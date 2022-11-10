<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    //mengetahui data dari pengguna yang login
    function user_login()
    {
        $this->ci->load->model('pengguna/peng_model');
        $idpengguna = $this->ci->session->userdata('idpengguna');
        $user_data = $this->ci->peng_model->get($idpengguna)->row();
        return $user_data;
    }

    //meringkas penulisan kode untuk mendapatkan data tb_pengguna seorang user yang login
    function user()
    {
        $user = $this->ci->db->get_where('tb_pengguna', ['nik' => $this->ci->session->userdata('nik')])->row_array();
        return $user;
    }

    //menghitung jumlah data berdasarkan table
    function count_data($table)
    {
        return $this->ci->db->get($table)->num_rows();
    }
    //jumlah penduduk laki-laki
    function count_pend_lk()
    {
        $this->ci->db->select('*');
        $this->ci->db->from('tb_penduduk');
        $this->ci->db->where('jenis_kelamin', 'Laki-Laki');
        return $this->ci->db->get()->num_rows();
    }
    //jumlah penduduk perempuan
    function count_pend_pr()
    {
        $this->ci->db->select('*');
        $this->ci->db->from('tb_penduduk');
        $this->ci->db->where('jenis_kelamin', 'Perempuan');
        return $this->ci->db->get()->num_rows();
    }

    //menghitung jumlah surat masuk yg belum divalidasi rt dan kades
    function count_suratmasuk()
    {
        $this->ci->db->select('*');
        $this->ci->db->from('tb_surat');
        $this->ci->db->where('valid_rt', 0);
        $this->ci->db->where('valid_kades', 0);
        return $this->ci->db->get()->num_rows();
    }

    //menghitung jumlah surat yg sudah divalidasi rt dan kades
    function count_suratselesai()
    {
        $this->ci->db->select('*');
        $this->ci->db->from('tb_surat');
        $this->ci->db->where('valid_rt', 1);
        $this->ci->db->where('valid_kades', 1);
        return $this->ci->db->get()->num_rows();
    }
}
