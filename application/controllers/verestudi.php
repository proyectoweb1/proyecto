<?php
/**
* 
*/
class Verestudi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('verestudiante_mo');
	}

	function toupdate(){
		$id = $this->input->get("id");
		$query['estudiante'] = $this->verestudiante_mo->getid($id);
		$query['carreras'] = $this->verestudiante_mo->getcarrera($id);
		$query['cualidad'] = $this->verestudiante_mo->getcualidad($id);
		$query['proyectos'] = $this->verestudiante_mo->getproyecto($id);
		$this->load->view('header_from');
		$this->load->view('FrontEnd/estu_vis', $query);
	}
		
	}
?>
