<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $this->buildView('admin/index','Bienvenido');
    }

    public function paciente()
	{
		$this->buildView('paciente','Paciente');
	}

    public function login()
    {
        $this->grabarVariablesSession();
        $this->index();
    }
	
	public function campus()
	{
		$this->buildView('campus','Campus');
	}
    
    public function buildView($view,$titulo)
    {
        $datos['titulo'] = $titulo;
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/menu_admin',$datos);
        $this->load->view($view);
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

}
