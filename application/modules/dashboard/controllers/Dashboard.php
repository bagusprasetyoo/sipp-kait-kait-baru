<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_breadcrumb');
        $this->load->view('dashboard');
        $this->load->view('templates/admin_footer');
    }
}
