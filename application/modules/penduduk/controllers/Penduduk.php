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
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('penduduk/tampil_pend', $data);
        $this->load->view('templates/user_footer');
    }

    public function add_pend()
    {
        /*dikarenakan form tambah & edit dijadikan satu 
        kita inisialisasikan untuk membedakan
        */
        //lempar data null untuk  tambah data
        $penduduk = new stdClass();
        $penduduk->nik = null;
        $penduduk->nama = null;
        $penduduk->tempat_lahir = null;
        $penduduk->tanggal_lahir = null;
        $penduduk->jenis_kelamin = null;
        $penduduk->alamat = null;
        $penduduk->rt = null;
        $penduduk->rw = null;
        $penduduk->desa = null;
        $penduduk->dusun = null;
        $penduduk->agama = null;
        $penduduk->status_nikah = null;
        $penduduk->pekerjaan = null;
        $penduduk->kewarganegaraan = null;
        $penduduk->gol_darah = null;

        $data = array(
            'page' => 'add',
            'row' => $penduduk
        );

        $data['title'] = 'Data Penduduk';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('penduduk/form_pend', $data);
        $this->load->view('templates/user_footer');
    }

    public function delete($nik){
        $query = $this->pend_model->delete($nik);
        if($query = true){
          $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data Berhasil diHapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span></button></div>');
          redirect('penduduk');
        }
    }

}
