<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    public function getSurat($id = null)
    {
        $this->db->from('tb_surat');
        $this->db->join('tb_penduduk', 'tb_penduduk.nik = tb_surat.nik');
        if ($id != null) {
            $this->db->where('nosurat', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function delete($nosurat){
        $this->db->where('nosurat', $nosurat);
        $this->db->delete('tb_surat');
      }

}