<?php

defined('BASEPATH') or exit('No direct script access allowed');

class register_model extends CI_Model
{
    public function register(){
        $data= [
            "nama" => $this->input->post('nama','true'),
            "email" => $this->input->post('email','true'),
            "username" => $this->input->post('username', 'true'),
            "password" => $this->input->post('password', 'true')
        ];
            $this->db->insert('db_login', $data);
    }
}
