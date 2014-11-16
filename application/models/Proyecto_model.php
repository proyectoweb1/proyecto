<?php

class Proyecto_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getall(){
		$query = $this->db->get('proyecto');
        return $query->result();
	}
	function insert($data)
	{
		$this->db->insert('proyecto',$data);
	}
	function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('proyecto',$data);
    }
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('proyecto');
    }
    function getid($id){
    	$this->db->where('id', $id);
        $query = $this->db->get('proyecto');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
}
?>