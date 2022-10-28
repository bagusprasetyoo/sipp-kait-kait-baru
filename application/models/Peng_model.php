<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peng_model extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->form('tb_pengguna');
        $this->db->where('nik', $post['nik']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('tb_pengguna', $data);
    }
}
