<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tarea_model extends CI_Model {	

	public function getTareas() {
		$query = $this->db->query('SELECT * FROM TAREAS');
		$result = $query->result_array();

		$query->next_result(); // Dump the extra resultset.
		$query->free_result(); // Does what it says. 
				
		return $result;

	}

	public function setTarea($cliente, $cliente_interno, $trabajo, $pieza, $observaciones, $mes, $anio, $cantidad, $user) {
		$query = $this->db->query("CALL ALTA_TAREA('".$cliente."', '".$cliente_interno."', '".$trabajo."', '".$pieza."', '".$observaciones."', '".$mes."', '".$anio."', '".$cantidad."', '".$user."');"); 						
		$result = $query->result_array();

		$query->next_result(); // Dump the extra resultset.
		$query->free_result(); // Does what it says. 
				
		return $result[0];
	}	

}