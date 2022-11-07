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
        date_default_timezone_set('Asia/Ujung_Pandang');
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
            'tanggal_surat' => date('Y-m-d H:i:s'),
            'nik' => $post['nik'],
        ];
        $this->db->insert('tb_surat', $params);
    }

    public function add_skusaha($post)
    {
        date_default_timezone_set('Asia/Ujung_Pandang');
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
            'namausaha' => $post['namausaha'],
            'waktuusaha' => $post['waktuusaha'],
            'tanggal_surat' => date('Y-m-d'),
        ];
        $isisurat = json_encode($isi);
        $params = [
            'jenis_surat' => 'SK Usaha',
            'isi_surat' => $isisurat,
            'tanggal_surat' => date('Y-m-d H:i:s'),
            'nik' => $post['nik'],
        ];
        $this->db->insert('tb_surat', $params);
    }

    public function validasi_rt($id)
    {
        $params = [
            'valid_rt' => 1
        ];
        $this->db->where('id_surat', $id);
        $this->db->update('tb_surat', $params);
    }

    public function validasi_kades($id)
    {
        $params = [
            'valid_kades' => 1
        ];
        $this->db->where('id_surat', $id);
        $this->db->update('tb_surat', $params);
    }

    public function tolak_rt($id)
    {
        $params = [
            'valid_rt' => 2
        ];
        $this->db->where('id_surat', $id);
        $this->db->update('tb_surat', $params);
    }

    public function tolak_kades($id)
    {
        $params = [
            'valid_kades' => 2
        ];
        $this->db->where('id_surat', $id);
        $this->db->update('tb_surat', $params);
    }

    public function delete($id)
    {
        $this->db->where('id_surat', $id);
        $this->db->delete('tb_surat');
    }
}
