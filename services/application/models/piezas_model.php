<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Piezas_model extends CI_Model {

	public function getPiezas() {

		$query = $this->db->get('PIEZAS');
		$result = $query->result_array();
		return $result;		

	}

	public function setPieza($nombre) {
		$query = $this->db->query("CALL ALTA_PIEZA('".$nombre."');"); 						
		$result = $query->result_array();
		return $result[0];
	}

	public function getPiezaByNombre($nom) {

		$query = $this->db->query("CALL PIEZA_X_NOMBRE('".$nom."');"); 		
		$result = $query->result_array();				
		return $result[0];

	}

}