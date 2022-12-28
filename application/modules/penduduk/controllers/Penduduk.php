<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pend_model');
        $this->load->model('pengguna/peng_model');
        check_not_login();
    }

    public function show()
    {
        if ($this->fungsi->user_login()->role == 'RT') {
            $datapend = $this->pend_model->get_data_perrt();
        } else {
            $datapend = $this->pend_model->get();
        }

        $data['row'] = $datapend;
        $data['title'] = 'Data Penduduk';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('penduduk/tampil_pend', $data);
        $this->load->view('template/user_footer');
    }

    public function show_all()
    {
        check_admin();
        $datapend = $this->pend_model->get_all();

        $data['row'] = $datapend;
        $data['title'] = 'Data Penduduk';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('penduduk/tampil_pend', $data);
        $this->load->view('template/user_footer');
    }

    public function add()
    {
        check_admin();
        /*dikarenakan 
        form tambah & edit dijadikan satu 
        kita inisialisasikan untuk membedakan
        */
        //lempar data null untuk  tambah data
        $penduduk = new stdClass();
        $penduduk->nokk = null;
        $penduduk->nik = null;
        $penduduk->nama = null;
        $penduduk->tempat_lahir = null;
        $penduduk->tanggal_lahir = null;
        $penduduk->jenis_kelamin = null;
        $penduduk->alamat = null;
        $penduduk->rt = null;
        $penduduk->rw = null;
        $penduduk->dusun = null;
        $penduduk->desa = null;
        $penduduk->kec_kab_prov = null;
        $penduduk->agama = null;
        $penduduk->status_nikah = null;
        $penduduk->pekerjaan = null;
        $penduduk->kewarganegaraan = null;
        $penduduk->nama_ayah = null;
        $penduduk->nama_ibu = null;
        $penduduk->gol_darah = null;
        $penduduk->nama_ayah = null;
        $penduduk->nama_ibu = null;

        $data = array(
            'page' => 'add',
            'row' => $penduduk
        );

        $data['title'] = ' Tambah Data Penduduk';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('penduduk/form_pend', $data);
        $this->load->view('template/user_footer');
    }

    public function edit($nik)
    {
        check_admin();
        $query = $this->pend_model->get($nik);
        if ($query->num_rows() > 0) {
            $penduduk = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $penduduk
            );
            $data['title'] = 'Edit Data Penduduk';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('penduduk/form_pend', $data);
            $this->load->view('template/user_footer');
        }
    }

    public function process()
    {
        check_admin();
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->form_validation->set_rules('nik',  'NIK', 'required|trim|is_unique[tb_penduduk.nik]', [
                'required' => 'NIK harus diisi !',
                'is_unique' => 'NIK sudah ada di data !'
            ]);
            //set_error_delimiters: memperpendek penulisan form error di halaman registrasi
            $this->form_validation->set_error_delimiters('<small class="text-danger pl-2">', '</small>');

            //menampilkan form registrasi
            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('danger', 'NIK sudah digunakan!');
                redirect('penduduk/add');
            } else {
                $this->pend_model->add($post);
                $this->session->set_flashdata('success', "Data <strong>$post[nama]</strong> berhasil ditambahkan!");
                redirect('penduduk/show');
            }
        } else if (isset($_POST['edit'])) {
            $this->pend_model->edit($post);
            $this->session->set_flashdata('success', "Data <strong>$post[nama]</strong> berhasil diedit!");
            redirect('penduduk/show');
        }
    }

    public function delete($nik)
    {
        check_admin();
        $query = $this->pend_model->delete($nik);
        if ($query = true) {
            $this->session->set_flashdata('success', '<i class="icon fas fa-trash"></i> Data berhasil dihapus!');
            redirect('penduduk/show');
        }
    }
}
