<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Role_model');
	}
	function index(){
		$this->load->view('header');
		$query['name'] = $this->Role_model->getAll();
		$this->load->view('Role/formrole', $query);
	}
	function create(){
		$nombre = $this->input->post('nombre');
		$data = array(
		   'nombre' => $nombre
		);
		$this->Role_model->insert($data);
		redirect('Role/index', 'refresh');
	}
	function toupdate(){
		$id = $this->input->get("uid");
		$role['rol'] = $this->Role_model->getid($id);
		$this->load->view('header');
		$this->load->view('Role/UpdateRole', $role);
		//$data = $this->input->post('data');
		//echo $data;
	}
	function update(){
		$id = $this->input->post('id');
		$role = $this->input->post('nombre');
		$data = array(
			'nombre'=>$role
		);
		$this->Role_model->update($id,$data);
		redirect('Role/index', 'refresh');
	}
	function delete()
	{
		$id = $this->input->post('id');
		//var_dump($id);
		$this->Role_model->delete($id);
	}
}
?>