<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends CI_Controller {

	
	public function index()
	{
              
		$this->load->view('microchat/index');
	}
	
}