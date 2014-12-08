<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class LogIn extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model','login');
	}
	function index()
	{
		
		$this->load->view('headlogin');
		$this->load->view('LogIn/Main');
	}
	function autenticar()
	{
		$username = $this->input->post('user');
		$password = $this->input->post('pass');
		$user = $this->login->validar($username,$password);
		if ($user) {
			redirect("/welcome/index");
		}else{
			redirect("/LogIn/index");
		}
	}
}
?>