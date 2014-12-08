<?php

class FrontEnd_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getall(){
		$query = $this->db->get('cualidad');
        return $query->result();
	}
    function search($id){
    	$this->db->where('cualidad_id', $id);
        $query = $this->db->get('estudiante_cualidad');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
     function searchTecn($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tecnologia');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
    function proy_tecn($id){
        $this->db->where('proyecto_id', $id);
        $query = $this->db->get('proyecto_tecnologia');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
    function est_proy($id){
        $this->db->where('proyecto_id', $id);
        $query = $this->db->get('estudiante_proyecto');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
    function searchEstudent($id){
        $this->db->where('id', $id);
        $query = $this->db->get('estudiante');
        return $query->result();
    }
}
?>