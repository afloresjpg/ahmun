<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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
			$this->showUsuariosLayer($data);			
		}		

	}		

	public function add() {
		$this->load->model('user_model');

		$nombre = $this->input->post('nombre', true);
		$apellido = $this->input->post('apellido', true);
		$nomuser = $this->input->post('nombreusuario', true);
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);

		$data['url'] = base_url();	

		if(empty($nombre) || empty($apellido) || empty($nomuser) || empty($email) || empty($password)) {			
			$data['result']['type'] = 'error';
			$data['result']['message'] = 'Alguno de los campos esta vacío';
			$this->showUsuariosLayer($data);
		} else {
			$result = $this->user_model->setUser($nombre, $apellido, $nomuser, $email, $password);
			if(isset($result['ERROR_ID'])) {
				if($result['ERROR_ID'] == 4) {
					$data['result']['type'] = 'error';
					$data['result']['message'] = 'Email ya registrad';
					$this->showUsuariosLayer($data);
					return false;
				}	
				if($result['ERROR_ID'] == 3) {
					$data['result']['type'] = 'error';
					$data['result']['message'] = 'Nombre de usuario ya registrado';
					$this->showUsuariosLayer($data);
					return false;
				}
			} else {				
				$data['result']['type'] = 'success';
				$data['result']['message'] = 'Se a registrado el usuario <strong>'.$result['NOMBRE_USUARIO'].'</strong> con éxito!';
				$this->showUsuariosLayer($data);
				return false;
			} 
		}
	}

	public function listar() {

		$this->load->model('user_model');
		$this->load->library('session');	

		$todo = $this->user_model->getUsers();
		$data['usuarios'] = $todo;

		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;	
		$data['page'] = 'usuario';

		if(!array_key_exists('logged_in', $session)) {
			header('Location: '.base_url().'inicio');
			return false;			
		}

		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('listar', $data);
		$this->load->view('templates/footer', $data);
	}

	public function showUsuariosLayer($data) {

		$this->load->library('session');	
		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['user_session'] = $session;	
		$data['page'] = 'usuario';
		
		$this->load->view('templates/head', $data);
		$this->load->view('templates/header', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('usuarios', $data);
		$this->load->view('templates/footer', $data);
	}

}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

