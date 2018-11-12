<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('admin_model');
	}

	public function index(){

		$data['title'] = 'Login';
		$this->load->view('admin/login', $data);
	}

	public function login(){

		$this->form_validation->set_rules('user', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');

		if ($this->form_validation->run()) {
			
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');

			if ($this->admin_model->login($user, $pass)) {
				
				$this->session->set_userdata('login', true);
				redirect(base_url('admin'));

			} else{

				$this->session->set_flashdata('error', 'Usuario o contraseña incorrecta');
				redirect(base_url('auth'));
			}

		} else{
			$this->index();
		}
	}

	function loggedIn(){

		if ($this->session->userdata('login')) {
			redirect(base_url('admin'));
		} else {
			redirect(base_url('auth'));
		}
	}

	function logout(){

		$this->session->unset_userdata('login');
		redirect(base_url('auth'));
	}

}

?>