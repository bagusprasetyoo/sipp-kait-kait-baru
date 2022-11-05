<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('surat_model');
        $this->load->model('penduduk/pend_model');
        check_not_login();
    }

    public function show()
    {
        $data['row'] = $this->surat_model->get();

        $data['penduduk'] = $this->surat_model->view_penduduk();
        $data['title'] = 'Data Surat';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/tampil_surat', $data);
        $this->load->view('template/user_footer');
    }

    public function add()
    {
        check_pengguna();
        $data['row'] = $this->pend_model->get();

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
        $data['penduduk'] = $this->db->get_where('tb_penduduk', ['nik' => $this->session->userdata('nik')])->row_array();

        $data['title'] = 'Surat Keterangan Domisili';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/sk_domisili', $data);
        $this->load->view('template/user_footer');
    }

    public function delete()
    {
        $id = $this->input->post('id_surat');
        $this->surat_model->delete($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('alert_peng', '<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <small><i class="icon fas fa-trash"></i> Data berhasil dihapus.</small></div>');
            redirect('surat/show');
        }
    }
}
