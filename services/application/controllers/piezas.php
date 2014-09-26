<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Piezas extends CI_Controller {

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
			$this->showPiezasLayer($data);			
		}		

	}		

	public function add() 
	{

		$this->load->model('piezas_model');

		$nombre = $this->input->post('nombre', true);
		$data['url'] = base_url();	

		if(isset($nombre)) {
			if(empty($nombre)) {
				$data['result']['type'] = 'error';
				$data['result']['message'] = 'Alguno de los campos esta vacío';
				$this->showPiezasLayer($data);
			} else {
				$result = $this->piezas_model->setPieza($nombre);
				//die(var_dump($result));
				if(isset($result['ERROR_ID'])) {
					if($result['ERROR_ID'] == 8) {
						$data['result']['type'] = 'error';
						$data['result']['message'] = 'Ya existe esa pieza';
						$this->showPiezasLayer($data);	
						return false;						
					}
				} else {
					$data['result']['type'] = 'success';
					$data['result']['message'] = 'Se a registrado la pieza <strong>'.$result['NOMBRE'].'</strong> con éxito!';
					$this->showPiezasLayer($data);
					return false;
				}
			}	
		} else {
			return false;			
		}

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

	public function showPiezasLayer($data) {

		$this->load->library('session');	
		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;	
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('piezas', $data);
		$this->load->view('templates/footer', $data);
	}

}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

