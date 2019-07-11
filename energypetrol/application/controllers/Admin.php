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
		$this->videosPagina($data);
	}

	public function videoEditar()
	{
		$this->load->model('VideoModel');
        $this->VideoModel->editar(
            $this->input->post("id"),
            $this->input->post("titulo"),
            $this->input->post("url_video")

        );
        redirect('admin/videos');
	}

	public function videoEditarVista($id = NULL)
	{
		$this->load->model('VideoModel');
        $result = $this->VideoModel->buscarPorId($id);
        //$result=$this->db->get('pregunta');
        $data = array('consulta' => $result);

        $this->load->view('plantilla/cabecera_admin');
        $this->load->view('admin/video_editar.php',$data);
        $this->load->view('plantilla/piepagina');
	}

	public function videoCrear()
	{
		$this->load->model("VideoModel");

        $add = $this->VideoModel->crearVideo(
            $this->input->post("titulo"),
            $this->input->post("url_video")            
		);
		redirect('admin/videos');
	}

	public function videoEliminar($id = NULL)
    {
        if($id != NULL)
        {
            $this->load->model("VideoModel");
            $this->VideoModel->eliminar($id);
            redirect('admin/videos');

        }
    }


	public function videosPagina($data)
	{
		$this->load->view('plantilla/cabecera_admin.php',$data);
		$this->load->view('admin/videos_admin.php');
		$this->load->view('plantilla/piepagina.php');
	
	}

}
