<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function login()
    {
        //helper mengecek apabila sudah login tidak dapat kembali ke halaman login
        check_already_login();
        //memanggil fungsi validasi
        $this->validation_login();

        // jika form validasi salah maka akan kembali ke halaman login
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');
        } else {
            // validasi success
            $this->_login();
        }
    }

    //method validasi form login
    private function validation_login()
    {
        // rules untuk form validation halaaman Login
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required', [
            'required' => 'NIK harus diisi !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi !'
        ]);
    }

    //opsional membuat agar method validasi success tidak terlalu panjang
    private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        //select * from tb_pengguna where nik=$nik
        $user = $this->db->get_where('tb_pengguna', ['nik' => $nik])->row_array();
        //select * from tb_penduduk untuk mendapatkan data rt
        $rt = $this->db->get_where('tb_penduduk', ['nik' => $nik])->row_array();

        // jika usernya ada
        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'idpengguna' => $user['id_pengguna'],
                    'nik' => $user['nik'],
                    'role' => $user['role'],
                    'rt' => $rt['rt'],
                ];
                //simpan data ke dalam session
                $this->session->set_userdata($data);
                //arahkan ke controller yang diinginkan
                redirect('dashboard');
            } else {
                //pesan jika password salah
                $this->session->set_flashdata('danger', 'Password salah!');
                redirect('auth/login');
            }
        } else {
            //pesan sebelum redirect
            $this->session->set_flashdata('warning', "NIK belum diregistrasi!");
            redirect('auth/login');
        }
    }

    // method untuk melakukan registrasi
    public function registration()
    {
        //helper mengecek apabila sudah login tidak dapat kembali ke halaman registrasi
        check_already_login();
        //memanggil fungsi validasi
        $this->validation_registration();

        //menampilkan form registrasi
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Pengguna';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');
        } else {
            $nik = $this->input->post('nik');

            //mengecek nik dari database
            $penduduk = $this->auth_model->get_nik($nik);

            // mengecek apakah nik sama dengan nik pada data penduduk
            if ($nik == $penduduk['nik']) {
                // jika sudah sama maka akan mengeset data berikut
                $data = [
                    'email' => htmlspecialchars($this->input->post('email', true)),
                    'no_hp' => htmlspecialchars($this->input->post('nohp', true)),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'image' => 'default.jpg',
                    'role' => "Pengguna",
                    'tanggal_daftar' => date('Y-m-d'),
                    'nik' => htmlspecialchars($this->input->post('nik', true))
                ];

                //data akan disimpan ke dalam database tabel pengguna
                $this->auth_model->add($data);

                //pesan sebelum redirect
                $this->session->set_flashdata('success', 'Selamat, NIK anda berhasil diregistrasi! Silahkan Login');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('warning', "NIK belum terdata di desa!, Hubungi admin untuk memasukkan data Anda.");
                redirect('auth/registration');
            }
        }
    }

    // method validasi form registrasi
    private function validation_registration()
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
        $this->form_validation->set_rules('nohp',  'NoHP', 'required|trim', [
            'required' => 'No Handphone harus diisi !'
        ]);
        $this->form_validation->set_rules('password',  'Password', 'required|trim|min_length[6]|matches[passconf]', [
            'required' => 'Password harus diisi !',
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('passconf',  'Password', 'required|trim|matches[password]', [
            'required' => 'Tulis ulang Password !',
            'matches' => 'Password tidak cocok!',
        ]);

        //set_error_delimiters: memperpendek penulisan form error di halaman registrasi
        $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');
    }

    // method logout
    public function logout()
    {
        // menghapus set_userdata yang ada di session
        $this->session->unset_userdata(['idpengguna', 'nik', 'role', 'rt']);
        redirect('landingpage');
    }
}
