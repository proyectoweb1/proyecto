<?php

class Curso_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getall(){
		$query = $this->db->get('curso');
        return $query->result();
	}
	function insert($data)
	{
		$this->db->insert('curso',$data);
	}
	function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update('curso',$data);
    }
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('curso');
    }
    function getid($id){
    	$this->db->where('id', $id);
        $query = $this->db->get('curso');
        if ($query->num_rows() > 0 ){
            return $query->row();
        } else {
            return null;
        }
    }
}
?>