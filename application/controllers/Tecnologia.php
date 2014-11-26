<?php
class Tecnologia extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Tecnologia_model');
	}
	function index(){
		$query['tecnologia'] = $this->Tecnologia_model->getAll();
		$this->load->view('header');
		$this->load->view('Tecnologia/tecnologia',$query);
	}
	function create()
	{
		$tecnologia = $this->input->post('nombre');
		$data = array(
		   'nombre' => $tecnologia
		);
		$this->Tecnologia_model->insert($data);
		redirect('Tecnologia/index', 'refresh');
	}
	function toupdate(){
		$id = $this->input->get("uid");
		$query['tecnologia'] = $this->Tecnologia_model->getid($id);
		$this->load->view('header');
		$this->load->view('Tecnologia/tecnologiaUpdate', $query);
	}
	function update(){
		$id = $this->input->post('id');
		$tecnologia = $this->input->post('nombre');
		$data = array(
			'nombre'=>$tecnologia
		);
		$this->Tecnologia_model->update($id,$data);
		redirect('Tecnologia/index', 'refresh');
	}
	function delete()
	{
		if($this->input->is_ajax_request() && $this->input->post('id')){
			$id = $this->input->post('id');
			$this->Tecnologia_model->delete($id);
		}
		
	}
}
?>