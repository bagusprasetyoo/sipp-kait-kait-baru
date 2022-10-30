<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pend_model extends CI_Model
{
    public function getPend($id = null)
    {
        $this->db->from('tb_penduduk');
        if ($id != null) {
            $this->db->where('nik', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
