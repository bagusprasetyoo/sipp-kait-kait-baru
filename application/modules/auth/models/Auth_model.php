<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    // method mengambil data nik dari tabel penduduk
    public function get_nik($nik)
    {
        return $this->db->get_where('tb_penduduk', ['nik' => $nik])->row_array();
    }

    // method menambahkan data pengguna yang melakukan registrasi
    public function add($data)
    {
        $this->db->insert('tb_pengguna', $data);
    }
}
