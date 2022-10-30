<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    /**It loads the form_validation library.*/
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function login()
    {
        // rules
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validasi success
            $this->_login();
        }
    }

    // opsional membuat agar method validasi success tidak terlalu panjang
    private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        //select * from user where nik=$nik
        $user = $this->db->get_where('user', ['nik' => $nik])->row_array();

        // jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nik' => $user['nik'],
                        'role_id' => $user['role_id']
                    ];
                    //simpan data ke dalam session
                    $this->session->set_userdata($data);
                    //arahkan ke controller yang diinginkan
                    redirect('user');
                } else {
                    //pesan jika password salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <small><i class="icon fas fa-check"></i> Password salah!</small></div>');
                    redirect('auth/login');
                }
            } else {
                //pesan jika user tidak aktif
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <small><i class="icon fas fa-check"></i> NIK belum diaktifasi!</small></div>');
                redirect('auth/login');
            }
        } else {
            //pesan sebelum redirect
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><i class="icon fas fa-check"></i> NIK belum diregistrasi!</small></div>');
            redirect('auth/login');
        }
    }

    public function registration()
    {
        //rules form validation
        $this->form_validation->set_rules('nik',  'NIK', 'required|trim|is_unique[tb_pengguna.nik]', [
            'is_unique' => 'NIK sudah diregistrasi'
        ]);
        $this->form_validation->set_rules('email',  'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('nohp',  'NoHP', 'required|trim');
        $this->form_validation->set_rules('password1',  'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2',  'Password', 'required|trim|matches[password1]');

        $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');

        //menampilkan form registrasi
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Pengguna';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [

                'email' => htmlspecialchars($this->input->post('email', true)),
                'no_hp' => htmlspecialchars($this->input->post('nohp', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'role' => "Pengguna",
                'tanggal_daftar' => time(),
                'nik' => htmlspecialchars($this->input->post('nik', true))
            ];


            //nanti akan dimasukkan ke model
            $this->db->insert('tb_pengguna', $data);


            //pesan sebelum redirect
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <small><i class="icon fas fa-check"></i> Selamat, NIK anda berhasil diregistrasi! Silahkan Login</small></div>');
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><i class="icon fas fa-check"></i>Kamu berhasil logout!</small></div>');
        redirect('auth');
    }
}
