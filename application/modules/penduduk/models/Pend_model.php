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

    public function add($post)
    {
        $params = [
            'nik' => $post['nik'],
            'nama' => $post['nama'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'rt' => $post['rt'],
            'rw' => $post['rw'],
            'desa' => $post['desa'],
            'dusun' => $post['dusun'],
            'kec_kab' => $post['kec_kab'],
            'agama' => $post['agama'],
            'status_nikah' => $post['status_nikah'],
            'pekerjaan' => $post['pekerjaan'],
            'kewarganegaraan' => $post['kewarganegaraan'],
            'gol_darah' => $post['gol_darah'],
        ];
        $this->db->insert('tb_penduduk', $params);
    }

    public function delete($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('tb_penduduk');
    }
}
