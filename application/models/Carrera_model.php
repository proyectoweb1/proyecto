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