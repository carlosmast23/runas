<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('PreguntaModel');
		$result=$this->PreguntaModel->todasPreguntas();
		$data=array('consulta'=>$result);

		$this->load->view('cabecera');
		$this->load->view('index',$data);
		$this->load->view('pie_pagina');
	}

	public function preguntas()
	{
		$this->load->model('PreguntaModel');
		$result=$this->PreguntaModel->todasPreguntas();
		//$result=$this->db->get('pregunta');
		$data=array('consulta'=>$result);
		$this->load->view('cabecera');
		$this->load->view('preguntas',$data);
		$this->load->view('pie_pagina');
	}
}