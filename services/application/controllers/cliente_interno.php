<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_interno extends CI_Controller {

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

		if(!array_key_exists('logged_in', $session)) {
			header('Location: '.base_url().'inicio');
			return false;					
		} else {
			$this->showCliente_internoLayer($data);			
		}		

	}		

	public function add() 
	{

		$this->load->model('cliente_interno_model');

		$nombre = $this->input->post('nombre', true);
		$cliente_asociado = $this->input->post('cliente_asociado', true);		

		$data['url'] = base_url();	

		if(isset($nombre) && isset($cliente_asociado)) {
			if(empty($nombre) || empty($cliente_asociado)) {
				$data['result']['type'] = 'error';
				$data['result']['message'] = 'Alguno de los campos esta vacío';
				$this->showCliente_internoLayer($data);
			} else {
				$result = $this->cliente_interno_model->setClienteInterno($nombre, $cliente_asociado);
				//die(var_dump($result));
				if(isset($result['ERROR_ID'])) {
					if($result['ERROR_ID'] == 7) {
						$data['result']['type'] = 'error';
						$data['result']['message'] = 'Ya existe ese cliente interno';
						$this->showCliente_internoLayer($data);	
						return false;						
					}
				} else {
					$data['result']['type'] = 'success';
					$data['result']['message'] = 'Se a registrado el cliente interno <strong>'.$result['NOMBRE'].'</strong> con éxito!';
					$this->showCliente_internoLayer($data);
					return false;
				}
			}	
		} else {
			return false;			
		}

	}	

	public function listar() {

		$this->load->model('cliente_interno_model');		

		$todo = $this->cliente_interno_model->getClientesInternos();
		$data['clientes_internos'] = $todo;		

		$this->load->library('session');	
		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;		
		$data['page'] = 'cliente_interno';	
		
		if(!array_key_exists('logged_in', $session)) {
			header('Location: '.base_url().'inicio');
			return false;			
		}

		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('listar_cliente_interno', $data);
		$this->load->view('templates/footer', $data);	
		

		
	}

	public function showCliente_internoLayer($data) {

		$this->load->model('clientes_model');
		
		$result = $this->clientes_model->getClientes();
		$data['clientes'] = $result;

		$this->load->library('session');	
		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;	
		$data['page'] = 'cliente_interno';

		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('cliente_interno', $data);
		$this->load->view('templates/footer', $data);
	}

}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

