<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    function login($username, $password)
    {
        $this->db->select('id_user, username, password, level');
        $this->db->from('db_login');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
