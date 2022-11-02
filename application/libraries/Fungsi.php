<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('peng_model');
        $idpengguna = $this->ci->session->userdata('idpengguna');
        $user_data = $this->ci->peng_model->getPeng($idpengguna)->row();
        return $user_data;
    }

    function count_data($table){
        return $this->ci->db->get($table)->num_rows();
    }
}
