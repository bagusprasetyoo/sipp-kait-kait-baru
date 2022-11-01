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

    public function add($post){
        $params = [
            'nik' => $post['nik'],
            'nama' => $post['nama'],
            'tempat_lahir' => $post['tempatlahir'],
            'tanggal_lahir' => $post['tanggallahir'],
            'jenis_kelamin' => $post['jeniskelamin'],
            'alamat' => $post['alamat'],
            'rt' => $post['rt'],
            'rw' => $post['rw'],
            'desa' => $post['desa'],
            'dusun' => $post['dusun'],
            'agama' => $post['agama'],
            'status_nikah' => $post['status_nikah'],
            'pekerjaan' => $post['pekerjaan'],
            'kewarganegaraan' => $post['kewarganegaraan'],
            'gol_darah' => $post['gol_darah'],
        ];
    }

    public function delete($nik){
        $this->db->where('nik', $nik);
        $this->db->delete('tb_penduduk');
      }

}
