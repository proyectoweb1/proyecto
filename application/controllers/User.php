<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		// this is just to always load the model 
		// when instiantate the controller
		
		// esto es solo para siempre cargar el modelo 
		// cuando se instancia el controlador
		$this->load->model('User_model', 'user');
	}

	public function index() {
		
		$this->load->view('user/login');
		
	}

	public function login() {
		$this->load->view('user/login');
	}


	public function authenticate() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// llamamos al modelo User y el método de authenticate
		$user = $this->user->authenticate($username, $password);
		if ($user) {
			$this->session->set_userdata('user', $user);
			redirect("/Dashboard/Inicio");
		} else {
			redirect("/user/login");
		}
	}

	public function dashboard() {
		$user = $this->session->userdata('user');
		if(!$user) {
			redirect("/user/login");
		}
		$data['user_info'] = $user;   //me verifica que este identificado el usuario
		$data['title'] = 'Title';
		$this->load->view('user/dashboard', $data);
	}

	/**
	 *  @id = Identifies the user to view, it could be the user id or usernaame
	 *	@type = Identifies the type of search to do
	 */
	public function view($id, $type) {
		if ($type === 'id') {
			$user = $this->user->get_user_by_id($id);
		} else {
			$user = $this->user->get_user_by_username($id);
		}
                                                                           //
		if ($user) {
			$data['user_info'] = $user;
			$data['title'] = "View User {$user->username}";
			$data['company_name'] = $this->config->item('company_name');
			$this->load->view('user/view', $data);	
		} else {
			redirect("/user/login");
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect("/user/login");
	}

	
}
