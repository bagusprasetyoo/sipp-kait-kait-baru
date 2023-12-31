<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_already_login();
    }
    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view('template/lp_header', $data);
        $this->load->view('landingpage/home');
        $this->load->view('template/lp_footer');
    }

    public function layanan()
    {
        $data['title'] = 'Layanan';
        $this->load->view('template/lp_header', $data);
        $this->load->view('template/lp_breadcrumb', $data);
        $this->load->view('landingpage/layanan');
        $this->load->view('template/lp_footer');
    }

    public function visimisi()
    {
        $data['title'] = 'Visi Misi';
        $data['subtitle'] = 'Profil Desa';
        $this->load->view('template/lp_header', $data);;
        $this->load->view('landingpage/visimisi');
        $this->load->view('template/lp_footer');
    }

    public function struktur()
    {
        $data['title'] = 'Struktur Pemerintah';
        $data['subtitle'] = 'Profil Desa';
        $this->load->view('template/lp_header', $data);
        $this->load->view('landingpage/struktur');
        $this->load->view('template/lp_footer');
    }

    public function kontak()
    {
        $data['title'] = 'Kontak';
        $this->load->view('template/lp_header', $data);
        $this->load->view('template/lp_breadcrumb', $data);
        $this->load->view('landingpage/kontak');
        $this->load->view('template/lp_footer');
    }
}
