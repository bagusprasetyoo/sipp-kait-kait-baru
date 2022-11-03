<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('surat_model');
        //meload pengguna model untuk mengambil nama (pengguna/ nanti dihapus)  
        $this->load->model('pengguna/peng_model');
        check_not_login();
    }

    public function tampil_surat()
    {
        $data['row'] = $this->surat_model->get_surat();

        $data['penduduk'] = $this->surat_model->view_penduduk();
        $data['title'] = 'Data Surat';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/tampil_surat', $data);
        $this->load->view('template/user_footer');
    }

    public function add_surat()
    {
        check_pengguna();
        $data['title'] = 'Buat Surat';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/add_surat', $data);
        $this->load->view('template/user_footer');
    }

    public function sk_domisili()
    {
        check_pengguna();
        $data['title'] = 'Surat Keterangan Domisili';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/sk_domisili', $data);
        $this->load->view('template/user_footer');
    }

    public function delete($nosurat)
    {
        $query = $this->surat_model->delete($nosurat);
        if ($query = true) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Berhasil diHapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span></button></div>');
            redirect('surat');
        }
    }
}
