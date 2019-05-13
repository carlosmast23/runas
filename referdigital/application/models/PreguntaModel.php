<?php
class PreguntaModel extends CI_Model
{
    public function todasPreguntas()
    {
        $result = $this->db->get('pregunta');
        return $result;
        //return $this->db->get('post');
    }

    public function grabar($titulo, $descripcion,$video)
    {
        $consulta = $this->db->query("INSERT INTO pregunta VALUES(NULL,'$titulo','$descripcion',0,'$video');");
        if ($consulta == true) {
            return true;
        } else {
            return false;
        }
    }

    
    public function eliminar($id)
    {
       $this->db->where('idpregunta',$id);
       $this->db->delete('pregunta');
    }

    public function buscarPorId($id)
    {
        $query=$this->db->get_where('pregunta',array('idpregunta' => $id));
        return $query->row_array(); //Devuelve un unico resultado
    }

    public function editar($id,$titulo,$descripcion)
    {
        $data = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion
        );

        $this->db->where('idpregunta', $id);
        return $this->db->update('pregunta', $data);
    }
}
