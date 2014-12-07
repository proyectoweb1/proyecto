<?php

class Carrera_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getall(){
		$query = $this->db->get('carrera');
        return $query->result();
	}
    function getcantidad()
    {
       $this->db->select('cantidad');
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
	function insert($data)
	{
		$this->db->insert('carrera',$data);
	}
	function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('carrera',$data);
    }
   function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('carrera');
}
    function getid($id){
    	$this->db->where('id', $id);
        $query = $this->db->get('carrera');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
}
?>