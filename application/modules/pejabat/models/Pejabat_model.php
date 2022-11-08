<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pejabat_model extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tb_pejabat');
        if ($id != null) {
            $this->db->where('id_pejabat', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama_pejabat' => $post['nama_pejabat'],
            'jabatan' => $post['jabatan'],
            'nip' => $post['nip'],
        ];
        $this->db->insert('tb_pejabat', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama_pejabat' => $post['nama_pejabat'],
            'jabatan' => $post['jabatan'],
            'nip' => $post['nip'],
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('tb_pejabat', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_pejabat', $id);
        $this->db->delete('tb_pejabat');
    }
}
