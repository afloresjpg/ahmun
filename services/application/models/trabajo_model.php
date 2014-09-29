<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Trabajo_model extends CI_Model {

	public function getTrabajos() {
		$query = $this->db->query("SELECT NOMBRE FROM TRABAJOS");
		$result = $query->result_array();
		return $result;
	}

	public function setTrabajo($nombre) {
		$query = $this->db->query("CALL ALTA_TRABAJO('".$nombre."');"); 						
		$result = $query->result_array();

		$query->next_result(); // Dump the extra resultset.
		$query->free_result(); // Does what it says. 
		

		return $result[0];
	}

}