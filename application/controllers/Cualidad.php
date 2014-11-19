<?php
class Cualidad extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Cualidad_model');
	}
	function index(){
		$query['cualidad'] = $this->Cualidad_model->getAll();
		$this->load->view('header');
		$this->load->view('Cualidad/cualidad',$query);
	}
	 
	function toupdate(){
		$id = $this->input->get("uid");
		$query['cualidad'] = $this->Cualidad_model->getid($id);
		$this->load->view('header');
		$this->load->view('Cualidad/cualidadUpdate', $query);
	}
	function update(){
		$id = $this->input->post('id');
		$cualidad = $this->input->post('nombre');
		$data = array(
			'nombre'=>$cualidad
		);
		$this->Cualidad_model->update($id,$data);
		redirect('Cualidad/index', 'refresh');
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			//var_dump($id);
			$this->Role_model->delete($id);
		}
	}
}
?>