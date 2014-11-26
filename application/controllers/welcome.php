<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->model('Carrera_model');
	}
	
	public function index()
	{
<<<<<<< HEAD
        $query['carrera'] = $this->Carrera_model->getAll();
       		$this->load->view('header');
       		$this->load->view('microchat/index');
		$this->load->view('Dashboard/Inicio',$query);
=======
		$this->load->view('header');
		$this->load->view('Dashboard/Inicio');
>>>>>>> b4fc2da6e066f37021d3d2c5afc78a861fd3a95e
	}
	
}
