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

	function toupdate(){
		$id = $this->input->get("id");
		$query['estudiante'] = $this->verestudiante_model->getid($id);
		$query['carreras'] = $this->verestudiante_model->getcarrera($id);
		$query['cualidad'] = $this->verestudiante_model->getcualidad($id);
		$query['proyectos'] = $this->verestudiante_model->getproyecto($id);
		$this->load->view('header');
		$this->load->view('Estudiante_vista/estu_vista', $query);
	}
		
	}
?>
