<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuarios_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	function getAll()
	{
		$query = $this->db->get('usuario');
        return $query->result();
	}
	function getOne($id)
	{
		$query = $this->db->get_where('usuario',array('idusuario'=> $id));
		return $query->result();
	}
	function insert($data)
	{
		$this->db->insert('usuario',$data);
	}
}
?>