<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->library('session');

		if ($this->session->userdata('login')) {
			$this->load->model('admin_model');

		} else{
			redirect(base_url('auth'));	
		}

	}

	public function index()
	{
		$data['view'] = 'admin/index';
		$data['title'] = 'Dashboard';
		$this->load->view('admin/template', $data);
	}

	public function posts(){
		$data['view'] = 'admin/posts';
		$data['title'] = 'Dashboard';
		$data['data'] = $this->admin_model->showAllPost();
		$this->load->view('admin/template', $data);
	}

	public function add_post(){

		$data['view'] = 'admin/add_post';
		$data['title'] = 'Nuevo post';
		$this->load->view('admin/template', $data);
	}

	public function add_banners(){

		$data['view'] = 'admin/add_banners';
		$data['title'] = 'Nuevo Banner';
		$this->load->view('admin/template', $data);
	}


	public function add_new_banner(){

		$image = ($_FILES['image']['tmp_name']);
		$imgDest = 'assets/images/' . $_FILES['image']['name'];
		move_uploaded_file($image, $imgDest);
		$image = ($_FILES['image']['name']);


		$info = array(

			'url' => $_POST['url'],
			'image' => $image

		);

		$this->db->insert('banners', $info);
		redirect('admin');
	}

	public function banners(){

		$data['view'] = 'admin/banners';
		$data['title'] = 'Banners publicados';

		$data['displayBanners'] = $this->db->query('SELECT * FROM banners');
		$data['displayBanners'] = $data['displayBanners']->result();

		$this->load->view('admin/template', $data);
	}

	public function edit($id){

		$data['view'] = 'admin/edit';
		$data['title'] = 'Editar post';
		$data['displayPost'] = $this->db->query("SELECT * FROM news WHERE id=$id");
		$data['displayPost'] = $data['displayPost']->result();
		$this->load->view('admin/template', $data);
	}

	public function cleanUrl($url){
		$url = str_replace(
       		array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        	array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        	$url
	    );
	 
	    $url = str_replace(
	        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
	        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
	        $url );
	 
	    $url = str_replace(
	        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
	        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
	        $url );
	 
	    $url = str_replace(
	        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
	        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
	        $url );
	 
	    $url = str_replace(
	        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
	        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
	        $url );
	 
	    $url = str_replace(
	        array('ñ', 'Ñ', 'ç', 'Ç'),
	        array('n', 'N', 'c', 'C'),
	        $url
	    );

	    $url = strtolower($url);
	    $url = str_replace(' ', '-', $url);
	    $url = preg_replace("/[^a-zA-Z0-9_-]+/", '', $url);

	    return $url;
	}


	public function edit_post($id){
		$this->load->model('admin_model');
		$info = $this->input->post();

		$title = $info['title'];
		$author = $info['author'];
		$resumen = $info['resumen'];
		$content = html_entity_decode($info['content']);
			

		$url = $info['url'];

		$imagen = ($_FILES['imagen']['tmp_name']);
		$imgDest = 'assets/images/' . $_FILES['imagen']['name'];
		move_uploaded_file($imagen, $imgDest);
		$imagen = ($_FILES['imagen']['name']);


		$this->admin_model->edit_post($id, $title, $resumen, $content, $author, $imagen, $url);
	}

	public function add_new_post(){
		$this->load->model('admin_model');
		$info = $this->input->post();

		$title = $info['title'];
		$author = $info['author'];
		$resumen = $info['resumen'];
		$content = html_entity_decode($info['content']);
			

		$url = $info['title'];
		$url = $this->cleanUrl($url);

		$imagen = ($_FILES['imagen']['tmp_name']);
		$imgDest = 'assets/images/' . $_FILES['imagen']['name'];
		move_uploaded_file($imagen, $imgDest);
		$imagen = ($_FILES['imagen']['name']);

		//print_r(expression)


		$this->admin_model->add_post($title, $resumen, $content, $author, $imagen, $url);
	}

	public function deleteNews($id = null){

		if ($id != null) {
			
			$this->db->where('id', $id);
			$this->db->delete('news');

			redirect(base_url('admin/posts'));
		}
	}


	public function edit_banner($id){

		$data['title'] = 'Editar Banner';
		$data['view'] = 'admin/edit_banners';
		$data['DisplayBannerInfo'] = $this->db->query('SELECT * FROM banners WHERE id = '.$id);
		$data['DisplayBannerInfo'] = $data['DisplayBannerInfo']->result();

		$this->load->view('admin/template', $data);

	}

	function update_banner($id){

		$info = $this->input->post();
		$url = $info['url'];

		$imagen = ($_FILES['image']['tmp_name']);
		$imgDest = 'assets/images/' . $_FILES['image']['name'];
		move_uploaded_file($imagen, $imgDest);
		$imagen = ($_FILES['image']['name']);

		$info = array(

			'url' => $url,
			'image' => $imagen,

		);


		$this->db->where('id', $id);
		$this->db->update('banners', $info);	
		redirect(base_url('admin/banners'));
	}

	public function delete_Banners($id = null){

		if ($id != null) {
			
			$this->db->where('id', $id);
			$this->db->delete('banners');

			redirect(base_url('admin/banners'));
		}
	}

}
?>