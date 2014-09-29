<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Cliente_interno_model extends CI_Model {

	public function getClientesInternos() {

		$query = $this->db->get('CLIENTE_INTERNO');
		
		$result = $query->result_array();
		return $result;		

	}

	public function setClienteInterno($nombre, $cliente_asociado) {
		$query = $this->db->query("CALL ALTA_CLIENTE_INTERNO('".$nombre."', '".$cliente_asociado."');"); 						

		$result = $query->result_array();		

		$query->next_result(); // Dump the extra resultset.
		$query->free_result(); // Does what it says. 
		
		return $result[0];
	}	

	public function getClienteByNombre($nom) {

		$query = $this->db->query("CALL CLIENTE_X_NOMBRE('".$nom."');"); 		
		$result = $query->result_array();				
		return $result[0];

	}

	public function getClienteInternoByClienteId($id) {
		$query = $this->db->query("CALL CLIENTE_INTERNO_X_CLIENTE_ID('".$id."');"); 	
		$result = $query->result_array();

		return $result;
	}

}