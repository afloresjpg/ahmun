<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Session_model extends CI_Model {

	public function getSessions() {

		$query = $this->db->get('SESSION');
		die(var_dump($query->result()));

	}

	public function altaSession() {

		$this->db->query("CALL ALTA_SESSION('Hola', 'Hola2', 'Hola3');"); 

	}

}