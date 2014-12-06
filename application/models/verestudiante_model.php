<?php

class Verestudiante_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
    function getid($id){
    	$this->db->where('estudiante_id', $id);
        $query = $this->db->get('estudiante');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
    function getcualidad($id){
        $this->db->where('estudiante_id', $id);
        $query = $this->db->get('estudiante_cualidad');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
    function getproyecto($id){
        $this->db->where('estudiante_id', $id);
        $query = $this->db->get('estudiante_proyecto');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
    function getcarrera($id){
        $this->db->where('estudiante_id', $id);
        $query = $this->db->get('estudiante_carrera');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
}
?>