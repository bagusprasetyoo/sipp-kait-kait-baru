<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    public function view_penduduk()
    {
        return $this->db->get('tb_penduduk')->result();
    }
    public function get_surat($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->join('tb_penduduk', 'tb_penduduk.nik = tb_surat.nik');
        $this->db->join('tb_jenissurat', 'tb_jenissurat.id_js = tb_surat.id_js');
        if ($id != null) {
            $this->db->where('id_surat', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function delete($nosurat)
    // {
    //     $this->db->where('nosurat', $nosurat);
    //     $this->db->delete('tb_surat');
    // }
}
