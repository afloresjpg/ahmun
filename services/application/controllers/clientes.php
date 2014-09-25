<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

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

		if(!$session['logged_in']) {		
			header('Location: inicio');
			return false;
		} else {
			$this->showClientesLayer($data);			
		}		

	}		

	public function add() 
	{

		$this->load->model('clientes_model');

		$nombre = $this->input->post('nombre', true);
		$data['url'] = base_url();	

		if(isset($nombre)) {
			if(empty($nombre)) {
				$data['result']['type'] = 'error';
				$data['result']['message'] = 'Alguno de los campos esta vacío';
				$this->showClientesLayer($data);
			} else {
				$result = $this->clientes_model->setCliente($nombre);
				//die(var_dump($result));
				if(isset($result['ERROR_ID'])) {
					if($result['ERROR_ID'] == 5) {
						$data['result']['type'] = 'error';
						$data['result']['message'] = 'Ya existe ese cliente';
						$this->showClientesLayer($data);	
						return false;						
					}
				} else {
					$data['result']['type'] = 'success';
					$data['result']['message'] = 'Se a registrado el cliente <strong>'.$result['NOMBRE'].'</strong> con éxito!';
					$this->showClientesLayer($data);
					return false;
				}
			}	
		} else {
			return false;			
		}

	}

	public function listar() {

		$this->load->model('clientes_model');

		$todo = $this->clientes_model->getClientes();
		$data['clientes'] = $todo;

		$data['url'] = base_url();				
		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('listar_clientes', $data);
		$this->load->view('templates/footer', $data);
	}

	public function showClientesLayer($data) {
		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('clientes', $data);
		$this->load->view('templates/footer', $data);
	}

}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

