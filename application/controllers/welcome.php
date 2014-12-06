<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('Carrera_model');
		$this->load->model('Estudiante_model');
	}
	
	public function index()
	{
        $query['carrera'] = $this->Carrera_model->getAll();
        $query['estudiantes'] = $this->Estudiante_model->getAll();
       		$this->load->view('header');
       		$this->load->view('microchat/index');
		$this->load->view('Dashboard/Inicio',$query);
	}
	
}
