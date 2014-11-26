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

	 function getuser($id){  //de mas
	 	$query = $this->db->query("SELECT * FROM `usuario` WHERE id = $id ");	
	 	if ($query->num_rows() > 0 ){
	 		return $query->row();
	 	} else {
	 		return null;
	 	}
	 }

	 function getOne($id)
	 {
	 	$query = $this->db->get_where('usuario',array('idusuario'=> $id));
	 	return $query->result();
	 }
	function insert($data)//funcion para insertar en la BD
	{
		$cedula = $data["cedula"];
		$query = $this->db->get_where('usuario',array('cedula' => $cedula));
		if ($query->num_rows() > 0){
			echo"<script>alert('Usuario ya registrado')</script>";
		}else{
			$this->db->insert('usuario',$data);
			echo"<script>alert('Usuario creado con exito')</script>";
		}	
		header('Location: /index.php/Usuario');		
	}
	function delete($data)//funcion para Eliminar un usuario en la BD
	{
		$this->db->where('id', $data);
		$this->db->delete('usuario');
		echo"<script>alert('Usuario Eliminado exitosamente')</script>";		
		header('Location: /index.php/Usuario');		
	}

	function update($id,$data){  // de mas
		//var_dump($data);
		$this->db->where('id',$id);
		$this->db->update('usuario',$data);
		header('Location: /index.php/Usuario');	
	}

}
?>
