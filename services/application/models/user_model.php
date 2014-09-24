<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model {

	public function getUsers() {

		$query = $this->db->get('USUARIOS');
		return $query->result_array();		

	}

	public function getUserByEmail($email) {

		$query = $this->db->query("CALL USUARIO_X_EMAIL('".$email."');"); 		
		$result = $query->result_array();				
		return $result[0];

	}

}