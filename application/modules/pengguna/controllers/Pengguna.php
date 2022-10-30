<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user');
        echo 'selamat datang user!';
    }
}
