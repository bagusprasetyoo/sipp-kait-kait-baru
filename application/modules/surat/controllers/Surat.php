<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //multiple pemangilan model menggunakan array[] mempersingkat penulisan
        $this->load->model(['surat_model', 'penduduk/pend_model', 'pejabat/pejabat_model']);
        check_not_login();
    }

    public function show()
    {
        if ($this->fungsi->user_login()->role == 'Pengguna') {
            $datasurat = $this->surat_model->filter_pengguna();
        } else if ($this->fungsi->user_login()->role == 'RT') {
            $datasurat = $this->surat_model->filter_rt();
        } else {
            $datasurat = $this->surat_model->get();
        }
        $data['row'] = $datasurat;
        $data['pejabat'] = $this->pejabat_model->get();
        $data['title'] = 'Data Surat';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/tampil_surat', $data);
        $this->load->view('template/user_footer');
    }

    public function pilih()
    {
        check_pengguna();
        $data['title'] = 'Pilih Surat';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/pilih_surat', $data);
        $this->load->view('template/user_footer');
    }

    //== sk domisili ==
    public function sk_domisili()
    {
        check_pengguna();
        $data['penduduk'] = $this->pend_model->get_where();
        $data['title'] = 'Surat Keterangan Domisili';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/create/sk_domisili', $data);
        $this->load->view('template/user_footer');
    }

    public function add_sk_domisili()
    {
        check_pengguna();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->add_skdomisili($post);

        //pemberitahuan berupa flashdata
        $this->session->set_flashdata('success', "SK Domisili <strong>$post[nama]</strong> berhasil dikirim!");
        redirect('surat/show');
    }
    //=== end sk domisili ===

    //== sk usaha ==
    public function sk_usaha()
    {
        check_pengguna();
        $data['penduduk'] = $this->pend_model->get_where();
        $data['title'] = 'Surat Keterangan Usaha';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/create/sk_usaha', $data);
        $this->load->view('template/user_footer');
    }

    public function add_sk_usaha()
    {
        check_pengguna();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->add_skusaha($post);

        //pemberitahuan berupa flashdata
        $this->session->set_flashdata('success', "SK Usaha <strong>$post[nama]</strong> berhasil dikirim!");
        redirect('surat/show');
    }
    //=== end sk usaha ===


    //== sk belum menikah==//
    public function sk_belumnikah()
    {
        check_pengguna();
        $data['penduduk'] = $this->pend_model->get_where();
        $data['title'] = 'Surat Keterangan Belum Menikah';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/create/sk_belumnikah', $data);
        $this->load->view('template/user_footer');
    }

    public function add_sk_belumnikah()
    {
        check_pengguna();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->add_skbelumnikah($post);

        //pemberitahuan berupa flashdata
        $this->session->set_flashdata('success', "SK Belum Menikah <strong>$post[nama]</strong> berhasil dikirim!");
        redirect('surat/show');
    }
    //=== end sk belum menikah==//

    //== sk tidak mampu==//
    public function sk_tidakmampu()
    {
        check_pengguna();
        $data['penduduk'] = $this->pend_model->get_where();
        $data['title'] = 'Surat Keterangan Belum Menikah';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/create/sk_tidakmampu', $data);
        $this->load->view('template/user_footer');
    }

    public function add_sk_tidakmampu()
    {
        check_pengguna();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->add_sktidakmampu($post);

        //pemberitahuan berupa flashdata
        $this->session->set_flashdata('success', "SK Tidak Mampu <strong>$post[nama]</strong> berhasil dikirim!");
        redirect('surat/show');
    }
    //== end sk tidak mampu==//

    //== sp_skck==//
    public function sp_skck()
    {
        check_pengguna();
        $data['penduduk'] = $this->pend_model->get_where();
        $data['title'] = 'Surat Pengantar Surat Catatan Kepolisian';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/create/sp_skck', $data);
        $this->load->view('template/user_footer');
    }

    public function add_sp_skck()
    {
        check_pengguna();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->add_spskck($post);

        //pemberitahuan berupa flashdata
        $this->session->set_flashdata('success', "SP SKCK <strong>$post[nama]</strong> berhasil dikirim!");
        redirect('surat/show');
    }
    //== end sp skck==//

    //== sk_kepemilikantanah==//
    public function sk_kepemilikantanah()
    {
        check_pengguna();
        $data['penduduk'] = $this->pend_model->get_where();
        $data['title'] = 'Surat Keterangan Kepemilikan Tanah';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/create/sk_kepemilikantanah', $data);
        $this->load->view('template/user_footer');
    }

    public function add_sk_kepemilikantanah()
    {
        check_pengguna();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->add_skkepemilikantanah($post);

        //pemberitahuan berupa flashdata
        $this->session->set_flashdata('success', "SK Kepemilikan Tanah <strong>$post[nama]</strong> berhasil dikirim!");
        redirect('surat/show');
    }
    //== end sk kepemilikan tanah==//

    //== sk_kematian==//
    public function sk_kematian()
    {
        check_pengguna();
        $data['penduduk'] = $this->pend_model->get_where();
        $data['title'] = 'Surat Keterangan Kematian';
        $data['user'] = $this->fungsi->user();
        $this->load->view('template/user_header', $data);
        $this->load->view('template/user_sidebar', $data);
        $this->load->view('surat/create/sk_kematian', $data);
        $this->load->view('template/user_footer');
    }

    public function add_sk_kematian()
    {
        check_pengguna();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->add_skkematian($post);

        //pemberitahuan berupa flashdata
        $this->session->set_flashdata('success', "SK Kematian <strong>$post[nama]</strong> berhasil dikirim!");
        redirect('surat/show');
    }
    //== end sk kematian==//


    public function read_surat($id)
    {
        //mengambil data surat dari tb_surat
        $surat = $this->surat_model->get_where($id);

        if ($surat['jenis_surat'] == 'SK Domisili') {
            $isisurat = json_decode($surat['isi_surat']);
            // var_dump($isisurat->waktumenetap);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/read/sk_domisili
            $data['row'] = $isisurat;
            $data['title'] = 'Surat Keterangan Domisili';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('surat/read/sk_domisili', $data);
            $this->load->view('template/user_footer');
        } else if ($surat['jenis_surat'] == 'SK Usaha') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/read/sk_domisili
            $data['row'] = $isisurat;
            $data['title'] = 'Surat Keterangan Domisili';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('surat/read/sk_usaha', $data);
            $this->load->view('template/user_footer');
        } else if ($surat['jenis_surat'] == 'SK Belum Menikah') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/read/sk_belumnikah
            $data['row'] = $isisurat;
            $data['title'] = 'Surat Keterangan Belum Menikah';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('surat/read/sk_belumnikah', $data);
            $this->load->view('template/user_footer');
        } else if ($surat['jenis_surat'] == 'SK Tidak Mampu') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/read/sk_belumnikah
            $data['row'] = $isisurat;
            $data['title'] = 'Surat Keterangan Tidak Mampu';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('surat/read/sk_tidakmampu', $data);
            $this->load->view('template/user_footer');
        } else if ($surat['jenis_surat'] == 'SP SKCK') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/read/sk_belumnikah
            $data['row'] = $isisurat;
            $data['title'] = 'Surat Pengantar Surat Keterangan Catatan Kepolisian';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('surat/read/sp_skck', $data);
            $this->load->view('template/user_footer');
        } else if ($surat['jenis_surat'] == 'SK Kepemilikan Tanah') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/read/sk_kepemilikantanah
            $data['row'] = $isisurat;
            $data['title'] = 'Surat Keterangan Kepemilikan Tanah';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('surat/read/sk_kepemilikantanah', $data);
            $this->load->view('template/user_footer');
        } else if ($surat['jenis_surat'] == 'SK Kematian') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/read/sk_kematian
            $data['row'] = $isisurat;
            $data['title'] = 'Surat Keterangan Kematian';
            $data['user'] = $this->fungsi->user();
            $this->load->view('template/user_header', $data);
            $this->load->view('template/user_sidebar', $data);
            $this->load->view('surat/read/sk_kematian', $data);
            $this->load->view('template/user_footer');
        }
    }

    public function print($id)
    {
        check_admin();
        //mengambil data surat dari tb_surat
        $surat = $this->surat_model->get_where($id);

        if ($surat['jenis_surat'] == 'SK Domisili') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/print/sk_domisili
            $data['row'] = $isisurat;

            $data['title'] = 'Surat Keterangan Domisili';
            $data['user'] = $this->fungsi->user();
            $this->load->view('surat/print/sk_domisili', $data);
        } else if ($surat['jenis_surat'] == 'SK Usaha') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/print/sk_usaha
            $data['row'] = $isisurat;

            $data['title'] = 'Surat Keterangan Usaha';
            $data['user'] = $this->fungsi->user();
            $this->load->view('surat/print/sk_usaha', $data);
        } else if ($surat['jenis_surat'] == 'SK Belum Menikah') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/print/sk_belumnikah
            $data['row'] = $isisurat;

            $data['title'] = 'Surat Keterangan Belum Menikah';
            $data['user'] = $this->fungsi->user();
            $this->load->view('surat/print/sk_belumnikah', $data);
        } else if ($surat['jenis_surat'] == 'SK Tidak Mampu') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/print/sk_tidakmampu
            $data['row'] = $isisurat;

            $data['title'] = 'Surat Keterangan Tidak Mampu';
            $data['user'] = $this->fungsi->user();
            $this->load->view('surat/print/sk_tidakmampu', $data);
        } else if ($surat['jenis_surat'] == 'SP SKCK') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/print/sp_skck
            $data['row'] = $isisurat;

            $data['title'] = 'Surat Pengantar Surat Keterangan Catatan Kepolisian';
            $data['user'] = $this->fungsi->user();
            $this->load->view('surat/print/sp_skck', $data);
        } else if ($surat['jenis_surat'] == 'SK Kepemilikan Tanah') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/print/sk_kepemilikantanah
            $data['row'] = $isisurat;

            $data['title'] = 'Surat Keterangan Kepemilikan Tanah';
            $data['user'] = $this->fungsi->user();
            $this->load->view('surat/print/sk_kepemilikantanah', $data);
        } else if ($surat['jenis_surat'] == 'SK Kematian') {
            $isisurat = json_decode($surat['isi_surat']);

            $data['tandatangan'] =  $this->surat_model->get($id);
            //melempar data $isisurat berupa $row ke view/print/sp_skck
            $data['row'] = $isisurat;

            $data['title'] = 'Surat Keterangan Kematian';
            $data['user'] = $this->fungsi->user();
            $this->load->view('surat/print/sk_kematian', $data);
        }
    }

    public function validasi_rt($id)
    {
        check_rt();
        $this->surat_model->validasi_rt($id);
        $this->session->set_flashdata('success', 'Surat berhasil divalidasi RT.');
        redirect('surat/show');
    }

    public function validasi_kades($id)
    {
        check_kades();
        $this->surat_model->validasi_kades($id);
        $this->session->set_flashdata('success', 'Surat berhasil divalidasi Kepala Desa.');
        redirect('surat/show');
    }

    public function tanda_tangan()
    {
        check_admin();
        $post = $this->input->post(null, TRUE);
        $this->surat_model->tanda_tangan($post);
        $this->session->set_flashdata('success', 'Tanda tangan berhasil dipilih.');
        redirect('surat/show');
    }

    public function tolak_rt($id)
    {
        check_rt();
        $this->surat_model->tolak_rt($id);
        $this->session->set_flashdata('danger', 'Surat ditolak RT');
        redirect('surat/show');
    }

    public function tolak_kades($id)
    {
        check_kades();
        $this->surat_model->tolak_kades($id);
        $this->session->set_flashdata('danger', 'Surat ditolak Kepala Desa');
        redirect('surat/show');
    }

    public function delete($id)
    {
        check_admin();
        $this->surat_model->delete($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', '<i class="icon fas fa-trash"></i> Data berhasil dihapus.');
            redirect('surat/show');
        }
    }
}
