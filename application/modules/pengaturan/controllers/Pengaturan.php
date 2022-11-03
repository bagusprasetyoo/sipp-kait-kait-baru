<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk/pend_model');
        //meload pengguna model untuk mengambil nama (pengguna/ nanti dihapus)  
        $this->load->model('pengguna/peng_model');
        check_not_login();
    }

    public function edit_profile()
    {
        $data['title'] = 'Pengaturan Profile';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('pengaturan/edit_profile', $data);
        $this->load->view('template/user_footer');
    }

}
