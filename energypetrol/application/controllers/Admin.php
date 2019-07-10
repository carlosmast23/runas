<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('plantilla/cabecera_admin.php');
		$this->load->view('admin/index.php');
		$this->load->view('plantilla/piepagina.php');
	}

	public function videos()
	{
		$this->load->model('VideoModel');
        $result = $this->VideoModel->todosVideo();
        //$result=$this->db->get('pregunta');
        $data = array('consulta' => $result);

		$this->load->view('plantilla/cabecera_admin.php',$data);
		$this->load->view('admin/videos_admin.php');
		$this->load->view('plantilla/piepagina.php');
	}

}
