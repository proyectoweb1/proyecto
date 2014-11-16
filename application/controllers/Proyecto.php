<?php
class Proyecto extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Curso_model');
		$this->load->model('Proyecto_model');
	}
	function index(){
		$query['proyecto'] = $this->Proyecto_model->getall();
		$query['curso'] = $this->Curso_model->getall();
		$this->load->view('header');
		$this->load->view('Proyecto/Proyecto',$query);
	}
	function create()
	{
		//reglas de validacion para los campos
		$this->form_validation->set_rules('cursos', 'Cursos', 'required');
		$this->form_validation->set_rules('duracion', 'Duracion', 'required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');
		$this->form_validation->set_rules('calificacion', 'Calificacion', 'required');
		//se valida las reglas
		if ($this->form_validation->run() == FALSE)
		{
			echo "Ha ocurrido un error de validacion ";
			echo anchor('Proyecto/index', ' Intentelo de nuevo!');
			echo validation_errors();
		}else
		{
			//se crea el array con los datos
			$curso = $this->input->post('cursos');
			$duracion = $this->input->post('duracion');
			$descripcion = $this->input->post('descripcion');
			$fecha = $this->input->post('fecha');
			$calificacion = $this->input->post('calificacion');
			$data = array(
			   'curso' => $curso,
			   'duracion' => $duracion,
			   'descripcion' => $descripcion,
			   'fecha' => $fecha,
			   'calificacion'=>$calificacion
			);
			//se manda el array al modelo para insertar 
			$this->Proyecto_model->insert($data);
			redirect('Proyecto/index', 'refresh');
		}
	}
	function toupdate(){
		$id = $this->input->get("uid");
		$query['proyecto'] = $this->Proyecto_model->getid($id);
		$query['curso'] = $this->Curso_model->getall();
		$this->load->view('header');
		$this->load->view('Proyecto/ProyectoUpdate', $query);
	}
	function update(){
		$this->form_validation->set_rules('cursos', 'Cursos', 'required');
		$this->form_validation->set_rules('duracion', 'Duracion', 'required');
		$this->form_validation->set_rules('descripcion', 'Descripcion', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha', 'required');
		$this->form_validation->set_rules('calificacion', 'Calificacion', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			echo "Ha ocurrido un error de validacion ";
			echo anchor('Proyecto/', ' Intentelo de nuevo!');
			echo validation_errors();
		}else{
			$id = $this->input->post('id');
			$curso = $this->input->post('curso');
			$duracion = $this->input->post('duracion');
			$descripcion = $this->input->post('descripcion');
			$fecha = $this->input->post('fecha');
			$calificacion = $this->input->post('calificacion');
			$data = array(
			   'curso' => $curso,
			   'duracion' => $duracion,
			   'descripcion' => $descripcion,
			   'fecha' => $fecha,
			   'calificacion'=>$calificacion
			);
			$this->Proyecto_model->update($id,$data);
			redirect('Proyecto/index', 'refresh');
		}
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			//var_dump($id);
			$this->Proyecto_model->delete($id);
		}
	}
}
?>