<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pejabat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pejabat_model');
        check_not_login();
        check_admin();
    }

    public function show()
    {
        $data['row'] = $this->pejabat_model->get();

        $data['title'] = 'Data Pejabat';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('pejabat/show_pej', $data);
        $this->load->view('template/user_footer');
    }

    public function add()
    {
        /*dikarenakan 
        form tambah & edit dijadikan satu 
        kita inisialisasikan untuk membedakan
        */
        //lempar data null untuk  tambah data
        $pejabat = new stdClass();
        $pejabat->id_pejabat = null;
        $pejabat->nama_pejabat = null;
        $pejabat->jabatan = null;
        $pejabat->nip = null;

        $data = array(
            'page' => 'add',
            'row' => $pejabat
        );

        $data['title'] = ' Tambah Data Pejabat';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('pejabat/form_pej', $data);
        $this->load->view('template/user_footer');
    }

    public function edit($id)
    {
        $query = $this->pejabat_model->get($id);
        if ($query->num_rows() > 0) {
            $pejabat = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $pejabat
            );
            $data['title'] = 'Edit Data Pejabat';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('pejabat/form_pej', $data);
            $this->load->view('template/user_footer');
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->pejabat_model->add($post);
            $this->session->set_flashdata('success', "Data <strong>$post[nama_pejabat]</strong> berhasil ditambahkan!");
            redirect('pejabat/show');
        } else if (isset($_POST['edit'])) {
            $this->pejabat_model->edit($post);
            $this->session->set_flashdata('success', "Data <strong>$post[nama_pejabat]</strong> berhasil diedit!");
            redirect('pejabat/show');
        }
    }

    public function delete($id)
    {
        $this->surat_model->delete($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', '<i class="icon fas fa-trash"></i> Data berhasil dihapus.');
            redirect('pejabat/show');
        }
    }
}
