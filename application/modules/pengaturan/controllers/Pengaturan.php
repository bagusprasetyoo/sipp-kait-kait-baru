<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk/pend_model');
        //meload pengguna model untuk mengambil nama (pengguna/ nanti dihapus)  
        $this->load->model('pengguna/peng_model');
    }

    public function edit_profile()
    {
        $data['title'] = 'Pengaturan Profile';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();

        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('nohp', 'No Hp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('pengaturan/edit_profile', $data);
            $this->load->view('templates/user_footer');
        } else {
            $nik  = $this->input->post('nik');
            $email  = $this->input->post('email');
            $nohp  = $this->input->post('nohp');

            $this->db->set('nohp', $nohp);
            $this->db->set('email', $email);
            $this->db->where('nik', $nik);
            $this->db->update('tb_pengguna');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Profile Berhasil di Ubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>');
            redirect('pengaturan/edit_profile');
        }
    }
}
