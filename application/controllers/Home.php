<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {


	function __construct(){

		parent::__construct();
		$this->load->library('session');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['view'] = 'home/index';
		$data['title'] = 'Inicio';
		$data['displayHome'] = $this->admin_model->displayHome();
		$this->load->view('home/template', $data);
	}

	function noticia($url){

		$data['view'] = 'home/noticia';
		
		if ($_GET['id']) {
			$id = $_GET['id'];
			$data['readNew'] = $this->admin_model->readNew($id, $url);

			if (!$data['readNew']) {
				redirect(base_url());
			}

			$data['latestNews'] = $this->admin_model->latestNews();
			$data['title'] = $data['readNew'][0]->title;
			$data['imagen'] = $data['readNew'][0]->imagen;
			$this->load->view('home/template', $data);
		} else {
			redirect(base_url());
		}
	}



}
?>