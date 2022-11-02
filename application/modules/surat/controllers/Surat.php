<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('surat_model');
    }

    public function tampil_surat()
    {
        $data['row'] = $this->surat_model->getSurat();

        $data['title'] = 'Data Surat';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('penduduk/tampil_pend', $data);
        $this->load->view('templates/user_footer');
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