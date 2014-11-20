<?php
/**
* 
*/
class Carreras extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Carrera_model');
	}
	function index(){
		$query['carreras'] = $this->Carrera_model->getAll();
		$this->load->view('header');
		$this->load->view('Carreras/carreras',$query);
	}
	function toupdate(){
		$id = $this->input->get("uid");
		$query['carreras'] = $this->Carrera_model->getid($id);
		$this->load->view('header');
		$this->load->view('Carreras/carreraUpdate', $query);
	}
	function create()
	{
		$codigo = $this->input->post('codigo');
		$nombre = $this->input->post('nombre');
		$data = array(
		   'codigo' => $codigo,
		   'nombre' => $nombre

		);
		$this->Carrera_model->insert($data);
		redirect('Carreras/index', 'refresh');
	}
	function update(){
		$id = $this->input->post('id');
		$codigo = $this->input->post('codigo');
		$nombre = $this->input->post('nombre');
		$data = array(
			'codigo'=>$codigo,
			'nombre'=>$nombre
		);
		$this->Carrera_model->update($id,$data);
		redirect('Carreras/index', 'refresh');
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			$this->Carrera_model->delete($id);
		}
		
	}
}
?>