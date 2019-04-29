<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('plantilla/cabecera');
        $this->load->view('principal');
        $this->load->view('plantilla/pie_pagina');
    }

    function principal()
    {
        $this->load->view('plantilla/cabecera');
        $this->load->view('ejemplo/bienvenido');
        $this->load->view('plantilla/pie_pagina');
    }
}
