<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peng_model');
    }
    public function tampil_peng()
    {
        $data['row'] = $this->peng_model->getPeng();

        $data['title'] = 'Data Pengguna';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('pengguna/tampil_peng', $data);
        $this->load->view('templates/user_footer');
    }
}
