<?php

class Cualidad_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getall(){
		$query = $this->db->get('cualidad');
        return $query->result();
	}
	function insert($data)
	{
		$this->db->insert('cualidad',$data);
	}
	function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('cualidad',$data);
    }
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('cualidad');
    }
    function getid($id){
    	$this->db->where('id', $id);
        $query = $this->db->get('cualidad');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
}
?>