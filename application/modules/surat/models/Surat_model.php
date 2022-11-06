<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    public function view_penduduk()
    {
        return $this->db->get('tb_penduduk')->result();
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->join('tb_penduduk', 'tb_penduduk.nik = tb_surat.nik');
        if ($id != null) {
            $this->db->where('id_surat', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add_skdomisili($post)
    {
        $isi = [
            'nik' => $post['nik'],
            'nama' => $post['nama'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'agama' => $post['agama'],
            'status_nikah' => $post['status_nikah'],
            'pekerjaan' => $post['pekerjaan'],
            'alamat' => $post['alamat'],
            'waktumenetap' => $post['waktumenetap'],
            'tanggal_surat' => date('Y-m-d'),
        ];
        $isisurat = json_encode($isi);
        $params = [
            'jenis_surat' => 'SK Domisili',
            'isi_surat' => $isisurat,
            'tanggal_surat' => date('Y-m-d'),
            'nik' => $post['nik'],
        ];
        $this->db->insert('tb_surat', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_surat', $id);
        $this->db->delete('tb_surat');
    }
}
