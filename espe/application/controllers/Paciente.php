<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->library('session');
    }

	public function index()
	{
		$this->buildView('paciente/index','Bienvenido');
	}

    public function login()
    {
        $this->grabarVariablesSession();
        $this->index();
    }

    public function verDatos()
    {
        $this->buildView('paciente/ver_datos','Datos Paciente');
    }

    public function verCita()
    {
        $this->buildView('paciente/ver_citas','Citas');
    }

    public function verDiagnostico()
    {
        $this->buildView('paciente/ver_diagnostico','Diagnostico del Paciente');
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
        $this->load->view('plantilla/menu_paciente',$datos);
        $this->load->view($view);
        $this->load->view('plantilla/footer');        
    }

}
