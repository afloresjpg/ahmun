<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

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
		$this->load->helper('url');					
		$this->logIn();			
	}

	public function isLogedIn() 
	{				

		$session = $this->session->all_userdata();
		$id_session = $session['session_id'];
		$user_session = $this->session->userdata($id_session);

		if($user_session) {			
			return true;
		} else {
			return false;
		}
		
	}

	public function logIn() 
	{		
		$data['url'] = base_url();		
		if($this->isLogedIn()) {
			
		} else {		
			$this->load->view('templates/head', $data);
			$this->load->view('login', $data);	
			$this->load->view('templates/footer', $data);
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
