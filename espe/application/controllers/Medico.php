<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medico extends CI_Controller {


	public function index()
	{
		$this->buildView('medico/index','Bienvenido');
	}

	public function login()
    {
        $this->grabarVariablesSession();
        $this->index();
	}
	
	public function cita()
    {        
        $this->buildView('medico/cita','Cita');
	}
	
	public function verDatos()
    {
        $this->buildView('paciente/ver_Datos','Datos Medico');
    }


	public function paciente()
	{
		//$this->load->view('welcome_message');
		$datos['titulo'] = "Paciente";
		$this->load->view('plantilla/head',$datos);
		$this->load->view('paciente');
		$this->load->view('plantilla/footer');
	}

	
	public function campus()
	{
		//$this->load->view('welcome_message');
		$datos['titulo'] = "Campus";
		$this->load->view('plantilla/head',$datos);
		$this->load->view('campus');
		$this->load->view('plantilla/footer');
	}

	public function grabarVariablesSession()
    {
        $this->session->set_userdata('usuario',$this->input->get('usuario'));
        $this->session->set_userdata('idusuario',$this->input->get('idusuario'));
        $this->session->set_userdata('cedula',$this->input->get('cedula'));
        $this->session->set_userdata('nombres',$this->input->get('nombres'));
        $this->session->set_userdata('apellidos',$this->input->get('apellidos'));
        $this->session->set_userdata('cargo',$this->input->get('cargo'));
	}
	
	public function buildView($view,$titulo)
    {
        $datos['titulo'] = $titulo;
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/menu_medico',$datos);
        $this->load->view($view);
        $this->load->view('plantilla/footer');        
    }
}
