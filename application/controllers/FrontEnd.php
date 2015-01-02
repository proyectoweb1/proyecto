<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FrontEnd extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Cualidad_model');
		$this->load->model('FrontEnd_model');
		$this->load->model('Tecnologia_model');
		// $this->load->model('Carrera_model');
		// $this->load->model('Estudiante_model');
	}
	function index(){
		$query['cualidad'] = $this->Cualidad_model->getall();
		$query['tecnologia'] = $this->Tecnologia_model->getall();
		 // $query['carrera'] = $this->Carrera_model->getAll();
   //      $query['estudiantes'] = $this->Estudiante_model->getAll();
		$this->load->view('header_from');
		$this->load->view('FrontEnd/Inicio',$query);
	}
	function find()
	{
		$tecnologias = array(); 
		$estudiante = array();
		$estudiantes = array();
		$id = $this->input->post('cualidad');
		$tecn = $this->input->post('tecnologia');
		if (!$id == false){
			foreach ($id as $data){
		   $cualidades = $this->FrontEnd_model->search($data);
		   $query ['FrontEnd'] = $this->FrontEnd_model->searchEstudent($cualidades->estudiante_id);
		}
		} else {
		}
		if (!$tecn == false) {
			foreach ($tecn as $key) {
			$tecnologias = $this->FrontEnd_model->searchTecn($key);			
			$proyecto_tecnologia = $this->FrontEnd_model->proy_tecn($tecnologias->id);	
			$est_proy = $this->FrontEnd_model->est_proy($proyecto_tecnologia->proyecto_id);
			 $query ['FrontEnd'] = $this->FrontEnd_model->searchEstudent($est_proy->estudiante_id);	
		}	
		} else {
		}
		$this->load->model('Cualidad_model');
		$this->load->model('FrontEnd_model');
		$this->load->model('Tecnologia_model');	
		$query['cualidad'] = $this->Cualidad_model->getall();
		$query['tecnologia'] = $this->Tecnologia_model->getall();
		$this->load->view('header_from');
		$this->load->view('FrontEnd/Inicio', $query);	 
	}
}
?>