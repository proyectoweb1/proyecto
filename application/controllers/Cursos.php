<?php
class Cursos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Curso_model');
	}
	function index(){
		$query['curso'] = $this->Curso_model->getall();
		$this->load->view('header');
		$this->load->view('Curso/index',$query);
	}
	function create()
	{
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			echo "Ha ocurrido un error de validacion ";
			echo anchor('Cursos/index', ' Intentelo de nuevo!');
			echo validation_errors();
		}else
		{
			$curso = $this->input->post('nombre');
			$data = array(
			   'nombre' => $curso
			);
			$this->Curso_model->insert($data);
			redirect('Cursos/index', 'refresh');
		}
	}
	function toupdate($id){
		//$id = $this->input->get("uid");
		$query['curso'] = $this->Curso_model->getid($id);
		$this->load->view('header');
		$this->load->view('Curso/CursoUpdate', $query);
	}
	function update(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			echo "Ha ocurrido un error de validacion ";
			echo anchor('Cursos/index', ' Intentelo de nuevo!');
			echo validation_errors();
		}else{
			$id = $this->input->post('id');
			$curso = $this->input->post('nombre');
			$data = array(
			   'nombre' => $curso
			);
			$this->Curso_model->update($id,$data);
			redirect('Cursos/index', 'refresh');
		}
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			//var_dump($id);
			$this->Curso_model->delete($id);
		}
	}
}
?>