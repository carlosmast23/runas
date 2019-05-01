<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        if(isset($_POST['clave']))
        {
            $this->load->model('UsuarioModel');
            $resultado=$this->UsuarioModel->login($_POST['usuario'],$_POST['clave']);
            if($resultado)
            {
                redirect('admin');
                //$this->vistaLogin();
            }
            else{
                $this->vistaLogin(True);
            }
            
        }
        else
        {
            $this->vistaLogin(False);
        }
		
    }

    public function vistaLogin($error)
    {
        $this->load->view('cabecera');
		$this->load->view('login',array("error"=>$error));
		$this->load->view('pie_pagina');
    }
    
    public function verificar()
    {
        $usuario=$this->input->post('usuario');
        $clave=$this->input->post('clave');

        $this->load->model('UsuarioModel');
        $resultado=$this->UsuarioModel->login($usuario,$clave);        

        //if($resultado)
        //{
            redirect('admin');
        //}
        //else
        //{
        //    redirect('login');
        //}
    }

	
}
