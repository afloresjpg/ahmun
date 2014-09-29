<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tarea extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->library('session');		
		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;	

		if(!$session['logged_in']) {		
			header('Location: inicio');
			return false;
		} else {
			$this->showTareasLayer($data);			
		}		

	}		

	public function add() 
	{

		$this->load->model('tarea_model');

		$this->load->library('session');		
		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;	
		
		$cliente = $this->input->post('cliente', true);
		$cliente_interno = $this->input->post('cliente_interno', true);
		$trabajo = $this->input->post('trabajo', true);
		$pieza = $this->input->post('pieza', true);
		$observacion = $this->input->post('observaciones', true);
		$mes = $this->input->post('mes', true);
		$cant = $this->input->post('cantidad', true);

		$data['url'] = base_url();	

		if(isset($cliente) || isset($cliente_interno) || isset($trabajo) || isset($pieza) || isset($observacion) || isset($mes) || isset($cant)) {
			if(empty($cliente) || empty($cliente_interno) || empty($trabajo) || empty($pieza) || empty($observacion) || empty($mes) || empty($cant)) {
				$data['result']['type'] = 'error';
				$data['result']['message'] = 'Alguno de los campos esta vaío';
				$this->showTareasLayer($data);
				return false;
			} else {
				$this->load->model('trabajo_model');				
				$this->load->model('tarea_model');				

				$anio = date('Y');
				$user = $session['nombre_usuario'];

				$this->trabajo_model->setTrabajo($trabajo);																		
				$this->tarea_model->setTarea($cliente, $cliente_interno, $trabajo, $pieza, $observacion, $mes, $anio, $cant, $user);																		

				$data['result']['type'] = 'success';
				$data['result']['message'] = 'Se agrego la tarea con éxito';

				$this->showTareasLayer($data);
				return false;
			}
		} else {
			return false;			
		}

	}

	public function getTrabajos() {

		$this->load->model('trabajo_model');				
		$result = $this->trabajo_model->getTrabajos();
		echo json_encode($result);

	}

	public function listar() {

		$this->load->model('piezas_model');
		$this->load->library('session');	
		
		$todo = $this->piezas_model->getPiezas();
		$data['piezas'] = $todo;
		
		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;	

		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('listar_piezas', $data);
		$this->load->view('templates/footer', $data);
	}

	public function getClienteInterno() {

		$this->load->model('cliente_interno_model');
		$cliente = $this->input->post('cliente', true);				

		$data['cliente'] = $this->cliente_interno_model->getClienteInternoByClienteId($cliente);		

		echo json_encode($data);

	}

	public function showTareasLayer($data) {

		$this->load->model('piezas_model');
		$this->load->model('clientes_model');

		$this->load->library('session');	
		$session = $this->session->all_userdata();
		$data['url'] = base_url();			
		$data['user_session'] = $session;	

		$data['clientes'] = $this->clientes_model->getClientes();	
		$data['piezas'] = $this->piezas_model->getPiezas();	
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('tarea', $data);
		$this->load->view('templates/footer', $data);
	}

}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


