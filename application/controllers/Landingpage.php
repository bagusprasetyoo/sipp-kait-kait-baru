<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landingpage extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Beranda';
        $this->load->view('templates/lp_header', $data);
        $this->load->view('landingpage/home');
        $this->load->view('templates/lp_footer');
    }

    public function layanan()
    {
        $data['title'] = 'Layanan Umum';
        $data['subtitle'] = 'Layanan';
        $this->load->view('templates/lp_header', $data);
        $this->load->view('templates/lp_breadcrumb', $data);
        $this->load->view('landingpage/layanan');
        $this->load->view('templates/lp_footer');
    }

    public function visimisi()
    {
        $data['title'] = 'Visi Misi';
        $data['subtitle'] = 'Profil Desa';
        $this->load->view('templates/lp_header', $data);
        $this->load->view('templates/lp_breadcrumb', $data);
        $this->load->view('landingpage/visimisi');
        $this->load->view('templates/lp_footer');
    }

    public function struktur()
    {
        $data['title'] = 'Struktur Pemerintah';
        $data['subtitle'] = 'Profil Desa';
        $this->load->view('templates/lp_header', $data);
        $this->load->view('templates/lp_breadcrumb', $data);
        $this->load->view('landingpage/struktur');
        $this->load->view('templates/lp_footer');
    }

    public function kontak()
    {
        $data['title'] = 'Kontak';
        $this->load->view('templates/lp_header', $data);
        $this->load->view('landingpage/kontak');
        $this->load->view('templates/lp_footer');
    }
}
