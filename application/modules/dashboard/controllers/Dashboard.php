<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengguna/peng_model');
    }

    public function index()
    {
        check_not_login();
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/user_footer');
    }
}
