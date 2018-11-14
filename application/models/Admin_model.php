<?php 

class admin_model extends CI_Model{


	public function displayHome(){
		$query = $this->db->query('SELECT * FROM news order by id DESC LIMIT 8');

		return $query->result();
	}


	public function add_post($title, $resumen, $content, $author, $imagen, $url){

		$info = array(

			'title' => $title,
			'resumen' => $resumen,
			'imagen' => $imagen,
			'content' => $content,
			'author' => $author,
			'url' => $url

		);


		$this->db->insert('news', $info);
		redirect(base_url('admin/posts'));
	}

	public function edit_post($id, $title, $author, $resumen, $content, $imagen, $url){

		$info = array(

			'title' => $title,
			'resumen' => $resumen,
			'imagen' => $imagen,
			'content' => $content,
			'author' => $author,
			'url' => $url

		);


		$this->db->where('id', $id);
		$this->db->update('news', $info);	
		redirect(base_url('admin/posts'));
	}

	public function showAllPost(){

		$query = $this->db->query('SELECT * FROM news ORDER BY id DESC');
		return $query->result();
	}



	function login($user, $pass){

		$this->db->where('user', $user);
		$this->db->where('password', $pass);

		$query = $this->db->get('admin');

		if ($query->num_rows() > 0) {

			return true;

		} else{

			return false;

		}

	}

	function readNew($id, $url){
		$query = $this->db->query("SELECT * FROM news WHERE id = $id and url = '$url'");
			return $query->result();
	}

	function latestNews(){

		$query = $this->db->query('SELECT * FROM news ORDER BY id DESC LIMIT 4');
		return $query->result();
	}

}


?>