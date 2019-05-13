<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->model('PreguntaModel');
        $result = $this->PreguntaModel->todasPreguntas();
        //$result=$this->db->get('pregunta');
        $data = array('consulta' => $result);

        $this->load->view('cabecera');
        $this->load->view('admin/admin_preguntas.php',$data);
        $this->load->view('pie_pagina');
    }

    public function editarView($id = NULL)
    {
        $this->load->model('PreguntaModel');
        $result = $this->PreguntaModel->buscarPorId($id);
        //$result=$this->db->get('pregunta');
        $data = array('consulta' => $result);

        $this->load->view('cabecera');
        $this->load->view('admin/editar_preguntas.php',$data);
        $this->load->view('pie_pagina');
    }

    public function editar()
    {
        $this->load->model('PreguntaModel');
        $this->PreguntaModel->editar(
            $this->input->post("idpregunta"),
            $this->input->post("titulo"),
            $this->input->post("descripcion")

        );
        redirect(admin);
    }

    public function grabar()
    {
        echo "funcion grabar";
        $this->load->model("PreguntaModel");

        //if ($this->input->post("submit")) {
        //    echo "grabando...";

        //llamo al metodo add
        $add = $this->PreguntaModel->grabar(
            $this->input->post("titulo"),
            $this->input->post("descripcion"),
            $this->input->post("url_video")            
        );
        //}
        redirect(admin);
    }

    public function eliminar($id = NULL)
    {
        if($id != NULL)
        {
            $this->load->model("PreguntaModel");
            $this->PreguntaModel->eliminar($id);
            redirect(admin);

        }
    }
}
