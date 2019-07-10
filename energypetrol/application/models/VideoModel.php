<?php
    class VideoModel extends CI_Model
    {
        public function todosVideo()
        {
            $result = $this->db->get('video');
            return $result;
            //return $this->db->get('post');
        }

    }
?>