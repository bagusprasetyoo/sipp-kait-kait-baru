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

    //menghitung jumlah data berdasarkan table
    function count_data($table)
    {
        return $this->ci->db->get($table)->num_rows();
    }
}
