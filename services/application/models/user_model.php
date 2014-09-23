<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model {

	public function getUsers() {

		$query = $this->db->get('USUARIOS');
		die(var_dump($query->result()));

	}

	public function altaUsuario() {

		$query = $this->db->query("CALL ALTA_USER('Hola', 'Hola2', 'Hola3');"); 
		return $query->resutl_array();

	}

}