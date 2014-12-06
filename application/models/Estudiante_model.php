<?php

class Estudiante_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getall(){
		$query = $this->db->get('estudiante');
        return $query->result();
	}
	function insert($data)
	{
		$this->db->insert('estudiante',$data);
	}
    function insertcarrera($data)
    {
        $this->db->insert('estudiante_carrera',$data);
    }
    function insertcualidad($data2)
    {
        $this->db->insert('estudiante_cualidad',$data2);
    }
	function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('estudiante',$data);
    }
   function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('estudiante');
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
}
?>