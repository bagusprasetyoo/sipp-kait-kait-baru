<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pend_model');
    }

    public function tampil_pend()
    {
        $data['row'] = $this->pend_model->getPend();

        $data['title'] = 'Data Penduduk';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_breadcrumb', $data);
        $this->load->view('penduduk/tampil_pend', $data);
        $this->load->view('templates/admin_footer');
    }

    public function add_pend()
    {
        /*dikarenakan form tambah & edit dijadikan satu 
        kita inisialisasikan untuk membedakan
        */
        //lempar data null untuk  tambah data
        $penduduk = new stdClass();
        $penduduk->nik = null;

        $data['title'] = 'Data Penduduk';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_breadcrumb', $data);
        $this->load->view('penduduk/form_pend', $data);
        $this->load->view('templates/admin_footer');
    }
}