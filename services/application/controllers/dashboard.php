<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->model('user_model');	

		$session = $this->session->all_userdata();
		$data['url'] = base_url();				
		$data['total_usuarios'] = count($this->user_model->getUsers());

		if(!$session['logged_in']) {		
			header('Location: login');
			return false;
		} else {
			$this->load->view('templates/head', $data);
			$this->load->view('templates/header', $data);
			$this->load->view('templates/menu', $data);
			$this->load->view('dashboard', $data);
			$this->load->view('templates/footer', $data);
		}		

	}	
	

	public function logout() 
	{
		$this->load->library('session');	
		$this->session->sess_destroy();

		$data['url'] = base_url();			
		header('Location: '.$data['url'].'inicio');		
	}

}
	

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

