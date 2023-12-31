<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('peng_model');
        check_not_login();
        check_admin();
    }

    public function show()
    {
        $data['row'] = $this->peng_model->get_mas();

        $data['title'] = 'Data Pengguna';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('pengguna/tampil_peng', $data);
        $this->load->view('template/user_footer');
    }
    public function show_pej()
    {
        $data['row'] = $this->peng_model->get_pej();

        $data['title'] = 'Data Pengguna';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('pengguna/tampil_peng', $data);
        $this->load->view('template/user_footer');
    }

    public function add()
    {
        //rules untuk form validation halaman add pengguna
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
        $this->form_validation->set_rules('password',  'Password', 'required|trim|min_length[6]|matches[passconf]', [
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

        //set_error_delimiters: memperpendek penulisan form error di halaman add pengguna
        $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');

        //menampilkan form add pengguna
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Pengguna';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('pengguna/add_peng', $data);
            $this->load->view('template/user_footer');
        } else {
            $nik = $this->input->post('nik');

            //select * from tb_penduduk where nik=$nik
            $penduduk = $this->db->get_where('tb_penduduk', ['nik' => $nik])->row_array();

            if ($nik == $penduduk['nik']) {
                $data = [
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'no_hp' => htmlspecialchars($this->input->post('nohp', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'image' => 'default.jpg',
                    'role' => htmlspecialchars($this->input->post('role', true)),
                    'tanggal_daftar' => date('Y-m-d'),
                    'nik' => htmlspecialchars($this->input->post('nik', true))
                ];

                //opsional bisa dimasukkan ke model
                $this->db->insert('tb_pengguna', $data);

                //pesan sebelum redirect
                $this->session->set_flashdata('success', 'Selamat data berhasil ditambahkan.');
                redirect('pengguna/show');
            } else {
                $this->session->set_flashdata('warning', 'NIK belum terdata di Data Penduduk.');
                redirect('pengguna/add');
            }
        }
    }

    public function edit($id)
    {
        //rules untuk form validation halaman edit pengguna
        $this->form_validation->set_rules('email',  'Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi !',
            'valid_email' => 'Penulisan email tidak valid !'
        ]);
        $this->form_validation->set_rules('nohp',  'No Handphone', 'required|trim', [
            'required' => 'No Handphone harus diisi !'
        ]);

        $this->form_validation->set_rules('role',  'Role', 'required|trim', [
            'required' => 'Role belum di pilih !'
        ]);

        //set_error_delimiters: memperpendek penulisan form error di halaman edit pengguna
        $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');

        //menampilkan form edit pengguna
        if ($this->form_validation->run() == false) {
            $query = $this->peng_model->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $data['title'] = 'Edit Data Pengguna';
                $data['user'] = $this->fungsi->user();
                $this->load->view('template/user_header', $data);
                $this->load->view('template/user_sidebar', $data);
                $this->load->view('pengguna/edit_peng', $data);
                $this->load->view('template/user_footer');
            } else {
                $this->session->set_flashdata('warning', 'Data tidak ditemukan!');
                redirect('pengguna/show');
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->peng_model->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', "Data $post[nik] berhasil diedit.");
                redirect('pengguna/show');
            }
        }
    }

    public function delete($id)
    {
        $this->peng_model->delete($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', '<i class="icon fas fa-trash"></i> Data berhasil dihapus.');
            redirect('pengguna/show');
        }
    }
}
