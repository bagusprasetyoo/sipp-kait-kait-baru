<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pejabat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pejabat_model');
        check_not_login();
        check_admin();
    }

    public function show()
    {
        $data['row'] = $this->pejabat_model->get();

        $data['title'] = 'Data Pejabat';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('penduduk/tampil_pend', $data);
        $this->load->view('template/user_footer');
    }
}
