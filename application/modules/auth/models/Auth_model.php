<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function validate_member()
    {
        return $this->db->get('tb_penduduk')->result();
    }

    public function login($post)
    {
        $this->db->from('tb_pengguna');
        $this->db->where('nik', $post['nik']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }
}
