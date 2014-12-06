<?php
/**
* 
*/
class verestudiante extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('verestudiante_model');
		}
	
	function toupdate($id){
		//$id = $this->input->get("uid");
		$query['estudiante'] = $this->verestudiante_model->getid($id);
		$query['carreras'] = $this->verestudiante_model->getcarrera($id);
		$query['cualidad'] = $this->verestudiante_model->getcualida($id);
		$query['proyectos'] = $this->verestudiante_model->getproyecto($id);
		$this->load->view('header');
		$this->load->view('Estudiante_vista/estu_vista', $query);
	}
	

	
}
?>