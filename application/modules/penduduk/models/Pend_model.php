<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pend_model extends CI_Model
{
    public function get($id = null)
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
            'nokk' => $post['nokk'],
            'nama' => $post['nama'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'rt' => $post['rt'],
            'rw' => $post['rw'],
            'dusun' => $post['dusun'],
            'desa' => 'Desa Kait-Kait Baru',
            'kec_kab_prov' => 'Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan',
            'agama' => $post['agama'],
            'status_nikah' => $post['status_nikah'],
            'pekerjaan' => $post['pekerjaan'],
            'kewarganegaraan' => $post['kewarganegaraan'],
            'nama_ayah' => $post['nama_ayah'],
            'nama_ibu' => $post['nama_ibu'],
            'gol_darah' => $post['gol_darah'],
            'nama_ayah' => $post['nama_ayah'],
            'nama_ibu' => $post['nama_ibu'],
        ];
        $this->db->insert('tb_penduduk', $params);
    }

    public function edit($post)
    {
        $params = [
            'nik' => $post['nik'],
            'nokk' => $post['nokk'],
            'nama' => $post['nama'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'rt' => $post['rt'],
            'rw' => $post['rw'],
            'dusun' => $post['dusun'],
            'desa' => 'Desa Kait-Kait Baru',
            'kec_kab_prov' => 'Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan',
            'agama' => $post['agama'],
            'status_nikah' => $post['status_nikah'],
            'pekerjaan' => $post['pekerjaan'],
            'kewarganegaraan' => $post['kewarganegaraan'],
            'nama_ayah' => $post['nama_ayah'],
            'nama_ibu' => $post['nama_ibu'],
            'gol_darah' => $post['gol_darah'],
            'nama_ayah' => $post['nama_ayah'],
            'nama_ibu' => $post['nama_ibu'],
        ];
        $this->db->where('nik', $post['nik']);
        $this->db->update('tb_penduduk', $params);
    }

    public function delete($nik)
    {
        $this->db->where('nik', $nik);
        $this->db->delete('tb_penduduk');
    }
}
