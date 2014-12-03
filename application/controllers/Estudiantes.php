<?php
/**
* 
*/
class Estudiantes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Estudiante_model');
		$this->load->model('Carrera_model');
		$this->load->model('Cualidad_model');
		$this->load->model('Proyecto_model');
	}
	function index(){
		$query['estudiantes'] = $this->Estudiante_model->getAll();
		$query['carreras'] = $this->Carrera_model->getall();
		$query['cualidad'] = $this->Cualidad_model->getall();
		$query['proyectos'] = $this->Proyecto_model->getall();
		$this->load->view('header');
		$this->load->view('Estudiante/estudiante',$query);
	}
		function create()
	{
		var_dump($_POST);die;
		$codigo = $this->input->post('codigo');
		$nombre = $this->input->post('nombre');
		$data = array(
		   'codigo' => $codigo,
		   'nombre' => $nombre

		);
		$this->Estudiante_model->insert($data);
		redirect('Carreras/index', 'refresh');
	}
	function toupdate(){
		$id = $this->input->get("uid");
		$query['carreras'] = $this->Estudiante_model->getid($id);
		$this->load->view('header');
		$this->load->view('Carreras/carreraUpdate', $query);
	}
	function update(){
		$id = $this->input->post('id');
		$codigo = $this->input->post('codigo');
		$nombre = $this->input->post('nombre');
		$data = array(
			'codigo'=>$codigo,
			'nombre'=>$nombre
		);
		$this->Estudiante_model->update($id,$data);
		redirect('Carreras/index', 'refresh');
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			$this->Estudiante_model->delete($id);
		}
		
	}

	
}
?>