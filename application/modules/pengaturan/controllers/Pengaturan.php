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
        $data['title'] = 'Pengaturan Profile';
        $data['user'] = $this->db->get_where('tb_pengguna', ['nik' => $this->session->userdata('nik')])->row_array();

        $this->form_validation->set_rules('email',  'Email', 'required|trim', [
            'required' => 'Email harus diisi !'
        ]);
        $this->form_validation->set_rules('no_hp',  'No HP', 'required|trim', [
            'required' => 'No HP harus diisi !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('pengaturan/edit_profile', $data);
            $this->load->view('template/user_footer');
        } else {
            $email = $this->input->post('email');
            $no_hp = $this->input->post('no_hp');
            $nik = $this->input->post('nik');

            //cek gambar
            $upload_image = $_FILES['image']['nama'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('email', $email);
            $this->db->set('no_hp', $no_hp);
            $this->db->where('nik', $nik);
            $this->db->update('tb_pengguna');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <small><i class="icon fas fa-check"></i> Selamat Profile Berhasil diUbah.</small></div>');
            redirect('pengaturan/edit_profile');
        }
    }
}
