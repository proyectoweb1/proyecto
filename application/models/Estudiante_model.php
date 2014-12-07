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
        return $this->db->insert_id();
    }
    function insertcarrera($insertCarrera)
    {
        $this->db->insert('estudiante_carrera',$insertCarrera);
    }
    function insertcualidad($dato)
    {
        $this->db->insert('estudiante_cualidad',$dato);
    }
    function insertproyecto($insert)
    {
        $this->db->insert('estudiante_proyecto',$insert);
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