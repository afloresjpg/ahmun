<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Clientes_model extends CI_Model {

	public function getClientes() {

		$query = $this->db->get('CLIENTES');
		$result = $query->result_array();
		return $result;		

	}

	public function setCliente($nombre) {
		$query = $this->db->query("CALL ALTA_CLIENTE('".$nombre."');"); 						
		$result = $query->result_array();
		return $result[0];
	}

	public function getClienteByNombre($nom) {

		$query = $this->db->query("CALL CLIENTE_X_NOMBRE('".$nom."');"); 		
		$result = $query->result_array();				
		return $result[0];

	}

}