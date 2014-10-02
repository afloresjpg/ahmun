<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tarea_model extends CI_Model {	

	public function getTareas() {	
		$query = $this->db->query('SELECT * FROM tareas');
		$result = $query->result_array();		

		$query->next_result(); // Dump the extra resultset.
		$query->free_result(); // Does what it says. 
				
		return $result;

	}

	public function updateTarea ($id, $cliente, $cliente_interno, $trabajo, $pieza, $observacion, $mes, $cantidad) {
		$query = $this->db->query('CALL UPDATE_TAREA("'.$id.'","'.$cliente.'", "'.$cliente_interno.'", "'.$trabajo.'", "'.$pieza.'", "'.$observacion.'", "'.$mes.'", "'.$cantidad.'")');
		$result = $query->result_array();

		$query->next_result(); // Dump the extra resultset. 
		$query->free_result(); // Does what it says. 
				
		return $result[0];

	}

	public function deleteById($id) {
		$query = $this->db->query('DELETE FROM tareas WHERE TAREA_ID = '.$id);		
		return $result = true;
	}

	public function getTareaById($id) {
		$query = $this->db->query('SELECT * FROM tareas WHERE TAREA_ID = '.$id);
		$result = $query->result_array();

		$query->next_result(); // Dump the extra resultset.
		$query->free_result(); // Does what it says. 
				
		return $result[0];
	}

	public function setTarea($cliente, $cliente_interno, $trabajo, $pieza, $observaciones, $mes, $anio, $cantidad, $user) {
		$query = $this->db->query("CALL ALTA_TAREA('".$cliente."', '".$cliente_interno."', '".$trabajo."', '".$pieza."', '".$observaciones."', '".$mes."', '".$anio."', '".$cantidad."', '".$user."');"); 						
		$result = $query->result_array();

		$query->next_result(); // Dump the extra resultset.
		$query->free_result(); // Does what it says. 
				
		return $result[0];
	}	

}