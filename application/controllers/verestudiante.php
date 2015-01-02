<?php
/**
* 
*/
class Verestudiante extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('verestudiante_model');
	}

<<<<<<< HEAD
	function toupdate(){
		$id = $this->input->get("id");
=======
	function toupdate($id){
		//$id = $this->input->post("id");
>>>>>>> 3535a738a6ad7da9de040fe571a4a9be5d271c29
		$query['estudiante'] = $this->verestudiante_model->getid($id);
		$query['carreras'] = $this->verestudiante_model->getcarrera($id);
		$query['cualidad'] = $this->verestudiante_model->getcualidad($id);
		$query['proyectos'] = $this->verestudiante_model->getproyecto($id);
		$this->load->view('header');
		$this->load->view('Estudiante_vista/estu_vista', $query);
	}
		
	}
?>
