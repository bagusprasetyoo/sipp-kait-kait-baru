<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peng_model');
    }

    public function tampil_peng()
    {
        $data['row'] = $this->peng_model->getPeng();

        $data['title'] = 'Data Pengguna';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('pengguna/tampil_peng', $data);
        $this->load->view('templates/user_footer');
    }

    public function add_peng()
    {
        //rules untuk form validation halaaman Registrasi
        $this->form_validation->set_rules('nik',  'NIK', 'required|trim|is_unique[tb_pengguna.nik]', [
            'required' => 'NIK harus diisi !',
            'is_unique' => 'NIK sudah diregistrasi !'
        ]);
        $this->form_validation->set_rules('email',  'Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi !',
            'valid_email' => 'Penulisan email tidak valid !'
        ]);
        $this->form_validation->set_rules('nohp',  'No Handphone', 'required|trim', [
            'required' => 'No Handphone harus diisi !'
        ]);
        $this->form_validation->set_rules('password',  'Password', 'required|trim|min_length[3]|matches[passconf]', [
            'required' => 'Password harus diisi !',
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('passconf',  'Password', 'required|trim|matches[password]', [
            'required' => 'Tulis ulang Password !'
        ]);
        $this->form_validation->set_rules('role',  'Role', 'required|trim', [
            'required' => 'Role belum di pilih !'
        ]);

        //set_error_delimiters: memperpendek penulisan form error di halaman registrasi
        $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');

        //menampilkan form registrasi
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Pengguna';
            $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('pengguna/add_peng', $data);
            $this->load->view('templates/user_footer');
        } else {
            $nik = $this->input->post('nik');

            //select * from tb_pengguna where nik=$nik
            $penduduk = $this->db->get_where('tb_penduduk', ['nik' => $nik])->row_array();

            if ($nik == $penduduk['nik']) {
                $data = [
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'no_hp' => htmlspecialchars($this->input->post('nohp', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'image' => 'default.jpg',
                    'role' => "Pengguna",
                    'tanggal_daftar' => time(),
                    'nik' => htmlspecialchars($this->input->post('nik', true))
                ];

                //opsional bisa dimasukkan ke model
                $this->db->insert('tb_pengguna', $data);

                //pesan sebelum redirect
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <small><i class="icon fas fa-check"></i> Selamat, NIK anda berhasil diregistrasi! Silahkan Login</small></div>');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <small><i class="icon fas fa-triangle-exclamation"></i> NIK belum terdata di desa!</small></div>');
                redirect('auth/registration');
            }
        }
    }
}
