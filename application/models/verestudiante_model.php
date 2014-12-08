<?php

class Verestudiante_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	
    function getid($id){
    	$this->db->where('id', $id);
        $query = $this->db->get('estudiante');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
    function getcualidad($id){

        $this->db->select('nombre');
        $this->db->from('cualidad cu'); 
        $this->db->join('estudiante_cualidad ecu', 'cu.id = ecu.cualidad_id'); 
        $this->db->where('ecu.estudiante_id',$id); 
        $query = $this->db->get(); 
             
        if ($query->num_rows() > 0 ){
            return $query->result();
        } else {
            return null;
        }
    }
    function getproyecto($id){
        $this->db->select('descripcion');
        $this->db->from('proyecto pro');
        $this->db->join('estudiante_proyecto epro', 'pro.id = epro.proyecto_id');
        $this->db->where('estudiante_id', $id);
        $query = $this->db->get(); 
       if ($query->num_rows() > 0 ){
            return $query->result();
        } else {
            return null;
        }
    }
    function getcarrera($id){
        $this->db->select('nombre');
        $this->db->from('carrera ca'); 
        $this->db->join('estudiante_carrera eca', 'ca.id = eca.carrera_id');
        $this->db->where('estudiante_id', $id);
        $query = $this->db->get(); 
        if ($query->num_rows() > 0 ){
           return $query->row();
        } else {
            return null;
        }
    }
}
?>