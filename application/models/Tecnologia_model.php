<?php
class Tecnologia_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    function getAll()
    {
      $query = $this->db->get('tecnologia');
      return $query->result();
        // $this->db->select('id','nombre');
        // $this->db->from('role');
        // $this->db->order_by('name','asc');
        // $consulta = $this->db->get();
        // $resultado = $consulta->result();
        // return $resultado;
  }
  function insert($data)
  {
      $this->db->insert('tecnologia',$data);
  }
  function getid($id){
    $this->db->where('id', $id);
    $query = $this->db->get('tecnologia');
    if ($query->num_rows() > 0 ){
        return $query->row();
    } else {
        return null;
    }
}
function update($id,$data){
    $this->db->where('id',$id);
    $this->db->update('tecnologia',$data);
}
function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('tecnologia');
}
}
?>