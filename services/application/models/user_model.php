<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model {

	public function getUsers() {

		$query = $this->db->get('usuarios');
		$result = $query->result_array();
		return $result;		

	}

	public function setUser($nombre, $apellido, $nombre_usuario, $email, $password) {
		$query = $this->db->query("CALL ALTA_USUARIO('".$nombre."', '".$apellido."', '".$nombre_usuario."', '".$password."', '".$email."', 0);"); 						
		$result = $query->result_array();
		return $result[0];
	}

	public function getUserByEmail($email) {

		$query = $this->db->query("CALL USUARIO_X_EMAIL('".$email."');"); 		
		$result = $query->result_array();				
		return $result[0];

	}

}