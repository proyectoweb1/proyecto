<?php
/**
* 
*/
class Estudiantes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Estudiante_model');
		$this->load->model('Carrera_model');
		$this->load->model('Cualidad_model');
		$this->load->model('Proyecto_model');
	}
	function index(){
		$query['estudiantes'] = $this->Estudiante_model->getAll();
		$query['carreras'] = $this->Carrera_model->getall();
		$query['cualidad'] = $this->Cualidad_model->getall();
		$query['proyectos'] = $this->Proyecto_model->getall();
		$this->load->view('header');
		$this->load->view('Estudiante/estudiante',$query);
	}
		function create()
	{
		$cedula = $this->input->post('cedula');
		$nombre = $this->input->post('nombre');
		$primerapellido = $this->input->post('primerapellido');
		$segundoapellido = $this->input->post('segundoapellido');
		$foto = $this->input->post('foto');
		$data = array(
			'cedula' => $cedula,
		   'nombre' => $nombre,
		   'primerapellido' => $primerapellido,
		   'segundoapellido' => $segundoapellido,
		   'foto' => $foto,

		);
		$this->Estudiante_model->insert($data);
		$cualidad = $this->input->post('cualidad');
		$id = $this->input->post('cedula');
		foreach ($cualidad as $data) {
            $data2 = array(
			'cualidad' => $cualidad,
			'id' => $cedula,		  
		);
        }
       
		$this->Estudiante_model->insertcualidad($data2);
		$carrera = $this->input->post('cursos');
		$cualidad = $this->input->post('cualidad');
		 $data2 = array(
			'carrera_id' => $carrera,
			'id' => $cedula,		  
		);
		$this->Estudiante_model->insertcarrera($data2);
		
		redirect('Estudiantes/index', 'refresh');
	}
	function toupdate(){
		$id = $this->input->get("uid");
		$query['carreras'] = $this->Estudiante_model->getid($id);
		$this->load->view('header');
		$this->load->view('Carreras/carreraUpdate', $query);
	}
	function update(){
		$id = $this->input->post('id');
		$codigo = $this->input->post('codigo');
		$nombre = $this->input->post('nombre');
		$data = array(
			'codigo'=>$codigo,
			'nombre'=>$nombre
		);
		$this->Estudiante_model->update($id,$data);
		redirect('Carreras/index', 'refresh');
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			$this->Estudiante_model->delete($id);
		}
		
	}

	
}
?>