<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    // public function login()
    // {
    //     $data['title'] = 'Login';
    //     $this->load->view('templates/auth_header', $data);
    //     $this->load->view('auth/login');
    //     $this->load->view('templates/auth_footer');
    // }

    // public function proses_login()
    // {
    //     $post = $this->input->post(null, TRUE);
    //     if(isset($post['login'])){
    //         $query = $this->auth_model->login($post);
    //         if($query->num_rows > 0){
    //             echo "login Berhasil";
    //         } else {
    //             echo "login gagal";
    //         }
    //     }
    // }
    // public function login()
    // {
    //     // rules untuk form validation halaaman Login
    //     $this->form_validation->set_rules('nik', 'NIK', 'trim|required', [
    //         'required' => 'NIK harus diisi !'
    //     ]);
    //     $this->form_validation->set_rules('password', 'Password', 'trim|required', [
    //         'required' => 'Password harus diisi !'
    //     ]);
    //     // jika form validasi salah maka akan kembali ke halaman login
    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Login';
    //         $this->load->view('templates/auth_header', $data);
    //         $this->load->view('auth/login');
    //         $this->load->view('templates/auth_footer');
    //     } else {
    //         $data_login =  array(
    //             'nik' => htmlspecialchars($this->input->post('nik', TRUE)),
    //             'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
    //         );
    //         $user = $this->auth_model->login($this->security->xss_clean($data_login));
    //         if ($user->num_rows() > 0) {
    //             $data = $user->row_array();
    //             $this->session->set_userdata('login', TRUE);
    //             $this->session->set_userdata('nik', $data['nik']);
    //             $this->session->set_userdata('role', $data['role']);
    //             redirect('dashboardz');
    //         } else {
    //             $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show">
    //                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    //                 <small><i class="icon fas fa-check"></i> NIK / Password salah!</small></div>');
    //             redirect('auth/login');
    //         }
    //     }
    // }
    public function login()
    {
        // rules untuk form validation halaaman Login
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required', [
            'required' => 'NIK harus diisi !'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi !'
        ]);

        // jika form validasi salah maka akan kembali ke halaman login
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

    //opsional membuat agar method validasi success tidak terlalu panjang
    private function _login()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        //select * from user where nik=$nik
        $user = $this->db->get_where('tb_pengguna', ['nik' => $nik])->row_array();

        // jika usernya ada
        if ($user) {
            //cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'nik' => $user['nik'],
                    'role' => $user['role']
                ];
                //simpan data ke dalam session
                $this->session->set_userdata($data);
                //arahkan ke controller yang diinginkan
                redirect('dashboard');
            } else {
                //pesan jika password salah
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <small><i class="icon fas fa-check"></i> Password salah!</small></div>');
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
        //rules untuk form validation halaaman Registrasi
        $this->form_validation->set_rules('nik',  'NIK', 'required|trim|is_unique[tb_pengguna.nik]|callback_validate_member', [
            'required' => 'NIK harus diisi !',
            'is_unique' => 'NIK sudah diregistrasi !',
            'callback_validate_member' => 'NIK tidak terdafatar.'
        ]);
        $this->form_validation->set_rules('email',  'Email', 'required|trim|valid_email', [
            'required' => 'Email harus diisi !',
            'valid_email' => 'Penulisan email tidak valid !'
        ]);
        $this->form_validation->set_rules('nohp',  'NoHP', 'required|trim', [
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

        //set_error_delimiters: memperpendek penulisan form error di halaman registrasi
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
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
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

    public function validate_member($str)
    {
        $nik = $str;
        if ($this->auth_model->validate_member($nik)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><i class="icon fas fa-check"></i>Kamu berhasil logout!</small></div>');
        redirect('landingpage');
    }
}
