<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peng_model extends CI_Model
{
    public function getPeng($id = null)
    {
        $this->db->from('tb_pengguna');
        $this->db->join('tb_penduduk', 'tb_penduduk.nik = tb_pengguna.nik');
        if ($id != null) {
            $this->db->where('id_pengguna', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function delete($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('tb_penduduk');
    }
}
