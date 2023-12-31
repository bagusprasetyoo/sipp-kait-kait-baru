<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_not_login();
        $data['title'] = 'Dashboard';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/user_footer');
    }
}
