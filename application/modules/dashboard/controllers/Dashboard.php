<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_breadcrumb');
        $this->load->view('dashboard');
        $this->load->view('templates/admin_footer');
    }
}
