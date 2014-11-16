<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
	}

	function getall()
	{
		$this->load->view('header');
		$this->load->model('Usuarios_model');
		$this->load->model('role_model');
		$query['role'] = $this->role_model->getAll();
		$query['name'] = $this->Usuarios_model->getAll();
		$this->load->view('formusuarios', $query);
	}
	function Create()
	{
		$nombre = $this->input->post('username');
		$apellido = $this->input->post('lastname');
		$email = $this->input->post('email');
		$data = array(
		   'nombre' => $nombre ,
		   'apellido' => $apellido ,
		   'correo' => $email
		);
		$this->load->model('Usuarios_model');
		$this->Usuarios_model->insert($data);
	}
}
?>