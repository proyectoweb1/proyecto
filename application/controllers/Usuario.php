<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model');
		$this->load->model('role_model');
	}


	function Control()//funcion para control de eventos del form
	{
		if (isset($_POST["agregar"])){
			$this->Create();				
		}elseif (isset($_POST["eliminar"])) {
			$this->Delete();
		}elseif (isset($_POST["editar"])) {
			$this->toupdate();
		}	
	}
	function index()
	{
		$query['role'] = $this->role_model->getAll();
		$query['name'] = $this->Usuarios_model->getAll();
		$this->load->view('header');
		$this->load->view('Usuarios/formusuarios', $query);
	}
	function Create()
	{
		$cedula = $this->input->post('cedula');
		$nombre = $this->input->post('username');
		$primerapellido = $this->input->post('primerapellido');
		$segundoapellido = $this->input->post('segundoapellido');
		$NickName = $this->input->post('NickName');
		$role_id = $this->input->post("roles");
		$data = array(
			'cedula' => $cedula ,
			'nombre' => $nombre ,
			'primerapellido' => $primerapellido,
			'segundoapellido' => $segundoapellido,
			'nombreusuario' => $NickName,
			'role_id' => $role_id
			);
		$this->Usuarios_model->insert($data);
	}
	function delete()
	{
		$id = $this->input->post('eliminar');//eliminar es el id de select
		$this->Usuarios_model->delete($id);		
	}
	function toupdate(){  //de mas
		$id = $this->input->post('editar');
		$query['usuario'] = $this->Usuarios_model->getuser($id);			
		$this->load->view('header');
		$this->load->view('Usuarios/formusuarioseditar', $query);
	}
	function update(){  //de mas
		$id = $this->input->post('button');
		$cedula = $this->input->post('cedula');
		$username = $this->input->post('username');
		$primerapellido = $this->input->post('primerapellido');
		$segundoapellido = $this->input->post('segundoapellido');
		$NickName = $this->input->post('NickName');
		$data = array(
			'cedula'=>$cedula,
			'nombre'=>$username,
			'primerapellido'=>$primerapellido,
			'segundoapellido'=>$segundoapellido,
			'nombreusuario'=>$NickName,
			);	
		$this->Usuarios_model->update($id,$data);
		//redirect('Tecnologia/index', 'refresh');
	}	
}
?>


