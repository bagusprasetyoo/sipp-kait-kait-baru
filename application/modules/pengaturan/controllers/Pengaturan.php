<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk/pend_model');
        $this->load->model('pengguna/peng_model');
        check_not_login();
    }

    public function edit_profile()
    {
        $data['user'] = $this->fungsi->user();
        $data['title'] = 'Edit Profile';

        $this->form_validation->set_rules('email',  'Email', 'required|trim', [
            'required' => 'Email harus diisi !'
        ]);
        $this->form_validation->set_rules('nohp',  'No HP', 'required|trim', [
            'required' => 'No HP harus diisi !'
        ]);

        $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('pengaturan/edit_profile', $data);
            $this->load->view('template/user_footer');
        } else {
            $email = $this->input->post('email');
            $no_hp = $this->input->post('nohp');
            $nik = $this->input->post('nik');

            //cek gambar ketika diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->session->set_flashdata('warning', 'Salah Upload Gambar');
                    redirect('pengaturan/edit_profile');
                }
            }

            $this->db->set('email', $email);
            $this->db->set('no_hp', $no_hp);
            $this->db->where('nik', $nik);
            $this->db->update('tb_pengguna');

            $this->session->set_flashdata('success', 'Selamat Profile Berhasil diubah');
            redirect('pengaturan/edit_profile');
        }
    }

    public function change_password()
    {
        //rules
        $this->form_validation->set_rules('current_password',  'Password Sekarang', 'required|trim', [
            'required' => 'Password harus diisi !',
        ]);
        $this->form_validation->set_rules('new_password',  'Password Baru', 'required|trim|min_length[6]|matches[new_passconf]', [
            'required' => 'Password harus diisi !',
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('new_passconf',  'Ulang password baru', 'required|trim|matches[new_password]', [
            'required' => 'Tulis ulang Password !'
        ]);

        //set_error_delimiters: memperpendek penulisan form error di halaman registrasi
        $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');

        $data['user'] = $this->fungsi->user();
        $data['title'] = 'Edit Profile';
        if ($this->form_validation->run() == false) {
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('pengaturan/edit_profile', $data);
            $this->load->view('template/user_footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('danger', 'Salah input password.');
                redirect('pengaturan/change_password');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('warning', 'Password baru tidak boleh sama dengan password terdahulu.');
                    redirect('pengaturan/change_password');
                } else {
                    //input password sudah benar
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    //opsional bisa dimasukkan ke model 
                    $this->db->set('password', $password_hash);
                    $this->db->where('nik', $this->session->userdata('nik'));
                    $this->db->update('tb_pengguna');

                    $this->session->set_flashdata('success', 'Password berhasil diganti.');
                    redirect('pengaturan/edit_profile');
                }
            }
        }
    }
}
