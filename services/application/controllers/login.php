<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);

		$this->compare($email, $password);

	}

	public function compare($email, $passwd) 	
	{
		$data['url'] = base_url();
		$this->load->model('user_model');

		if($email == '' || $passwd == '') {
			$data['result']['type'] = 'error';
			$data['result']['message'] = 'email o password incorrecto';						
		} else {
			$usuario = $this->user_model->getUserByEmail($email);
			if(isset($usuario['ERROR_ID'])) {
				if($usuario['ERROR_ID'] == 2) {
					$data['result']['type'] = 'error';
					$data['result']['message'] = 'no existe un usuario con ese email';			
				} else {
					$data['result']['type'] = 'error';
					$data['result']['message'] = 'algún dato es incorrecto';								
				}				
			} else {
				if($passwd == $usuario['PASSWORD']) {					

					$session = $this->session->all_userdata();					
					$id_session = $session['session_id'];
					$user_session = $this->session->userdata($id_session);
				
					$data_session = array(
						'user_id' => $usuario['USUARIO_ID'],
						'nombre_usuario' => $usuario['NOMBRE_USUARIO'],
						'email' => $usuario['EMAIL'],
						'admin' => $usuario['ADMIN'],
						'logged_in' => true				
					);									

					$this->session->set_userdata($data_session);

					header('Location: dashboard');
					return false;									

				} else {
					$data['result']['type'] = 'error';
					$data['result']['message'] = 'password incorrecto';								
				}
			}
		}

		$this->showLogin($data);

	}

	public function showLogin($data) {
		$this->load->view('templates/head', $data);
		$this->load->view('login', $data);
		$this->load->view('templates/footer', $data);				
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

