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
		$this->load->view('header');
		$this->load->view('LogIn/Main');
	}
}
?>