<?php

class Blog_model extends CI_model {
    public function getALLBlog()
    {
        return $this->db->get('blog')->result_array();
    }
}