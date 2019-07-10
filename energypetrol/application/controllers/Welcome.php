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
		$this->load->view('plantilla/cabecera.php');
		$this->load->view('index.php');
		$this->load->view('plantilla/piepagina.php');
	}

	public function nosotros()
	{
		$this->load->view('plantilla/cabecera.php');
		$this->load->view('nosotros.php');
		$this->load->view('plantilla/piepagina.php');
	}

	
	public function contactanos()
	{
		$this->load->view('plantilla/cabecera.php');
		$this->load->view('contactanos.php');
		$this->load->view('plantilla/piepagina.php');
	}


	public function stock()
	{
		$this->load->view('plantilla/cabecera.php');
		$this->load->view('stock.php');
		$this->load->view('plantilla/piepagina.php');
	}


	public function videos()
	{
		$this->load->model('VideoModel');
        $result = $this->VideoModel->todosVideo();
        $data = array('consulta' => $result);

		$this->load->view('plantilla/cabecera.php');
		$this->load->view('videos.php',$data);
		$this->load->view('plantilla/piepagina.php');
	}

	public function login()
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
        $this->load->view('plantilla/cabecera_limpia.php');
		$this->load->view('admin/login.php',array("error"=>$error));
		//$this->load->view('admin/login.php');
		$this->load->view('plantilla/piepagina.php');
    }
}
