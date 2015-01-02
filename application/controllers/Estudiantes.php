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
		//var_dump($_POST);die;
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('primerapellido','Primer Apellido', 'required');
		$this->form_validation->set_rules('segundoapellido','Segundo Apellido', 'required');
		$this->form_validation->set_rules('cedula', 'Cedula', 'required');
		$this->form_validation->set_rules('foto', 'Foto', 'required');
		$this->form_validation->set_rules('ingles', 'Ingles', 'required');
		if ($this->form_validation->run() == FALSE){
			echo "Ha ocurrido un error de validacion ";
			echo anchor('Estudiantes/index', ' Intentelo de nuevo!');
			echo validation_errors();
		}else{
			$nombre = $this->input->post('nombre');
			$primerapellido = $this->input->post('primerapellido');
			$segundoapellido = $this->input->post('segundoapellido');
			$cedula = $this->input->post('cedula');
			$foto = $this->input->post('foto');
			$ingles = $this->input->post('ingles');
			$data = array(
			   	'nombre' => $nombre,
			   	'primerapellido' => $primerapellido,
			   	'segundoapellido' => $segundoapellido,
			   	'cedula' => $cedula,
			   	'foto' => $foto,
			   	'nivelingles' => $ingles

			);
			$lastid = $this->Estudiante_model->insert($data);
			if ($lastid) {
				//creamos la carrera 
				$carrera = $this->input->post('carrera');
				$insertCarrera = array(
					'carrera_id' => $carrera,
					'estudiante_id' => $lastid
					);
				$this->Estudiante_model->insertcarrera($insertCarrera);
				//se termina de insertar la carrera
				//se insertan las cualidades
				$cuali = $this->input->post('cualidad');
				foreach ($cuali as $dat) {
					$dato = array(
						'estudiante_id' => $lastid,
						'cualidad_id' => $dat
						);
				$this->Estudiante_model->insertcualidad($dato);
				//se terminan las cualidades 
				}
				$proyectos = $this->input->post('proyecto');
				foreach ($proyectos as $proy) {
					$insert = array(
						'proyecto_id'	=> $proy,
						'estudiante_id'	=> $lastid
					);
					$this->Estudiante_model->insertproyecto($insert);
				}
			}else{
				echo "error al insertar datos del estudiante";
			}
			redirect('Estudiantes/index', 'refresh');
		}
	}
	function toupdate($id){
		//$id = $this->input->get("uid");
		$query['estudiante'] = $this->Estudiante_model->getid($id);
		$query['carreras'] = $this->Carrera_model->getall();
		$query['cualidad'] = $this->Cualidad_model->getall();
		$query['proyectos'] = $this->Proyecto_model->getall();
		$this->load->view('header');
		$this->load->view('Estudiante/estudianteUpdate', $query);
	}
	function update(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('primerapellido','Primer Apellido', 'required');
		$this->form_validation->set_rules('segundoapellido','Segundo Apellido', 'required');
		$this->form_validation->set_rules('cedula', 'Cedula', 'required');
		$this->form_validation->set_rules('foto', 'Foto', 'required');
		$this->form_validation->set_rules('ingles', 'Ingles', 'required');
		if ($this->form_validation->run() == FALSE){
			echo "Ha ocurrido un error de validacion ";
			echo anchor('Estudiantes/index', ' Intentelo de nuevo!');
			echo validation_errors();
		}else{
			$id = $this->input->post('id');
			$nombre = $this->input->post('nombre');
			$primerapellido = $this->input->post('primerapellido');
			$segundoapellido = $this->input->post('segundoapellido');
			$cedula = $this->input->post('cedula');
			$foto = $this->input->post('foto');
			$ingles = $this->input->post('ingles');
			$data = array(
			   	'nombre' => $nombre,
			   	'primerapellido' => $primerapellido,
			   	'segundoapellido' => $segundoapellido,
			   	'cedula' => $cedula,
			   	'foto' => $foto,
			   	'nivelingles' => $ingles

			);
			$this->Estudiante_model->update($id,$data);
			redirect('Estudiantes/index', 'refresh');
		}
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			$this->Estudiante_model->deleteEstudiante_cualidad($id);
			$this->Estudiante_model->deleteEstudiante_proyecto($id);
			$this->Estudiante_model->deleteEstudiante_carrera($id);
			$this->Estudiante_model->delete($id);

		}
		
	}

	
}
?>