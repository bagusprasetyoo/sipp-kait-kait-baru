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

    public function edit_peng($post)
    {
        $params['email'] = $post['email'];
        $params['no_hp'] = $post['nohp'];
        $params['role'] = $post['role'];
        $this->db->where('id_pengguna', $post['idpengguna']);
        $this->db->update('tb_pengguna', $params);
    }

    public function delPeng($id)
    {
        $this->db->where('id_pengguna', $id);
        $this->db->delete('tb_pengguna');
    }
}
