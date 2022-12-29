<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pend_model extends CI_Model
{
    public function get($nik = null)
    {
        $this->db->from('tb_penduduk');
        if ($nik != null) {
            $this->db->where('nik', $nik);
        }
        $query = $this->db->get();
        return $query;
    }
    public function get_pend($nik = null)
    {
        $this->db->from('tb_penduduk');
        if ($nik != null) {
            $this->db->where('nik', $nik);
        }
        $this->db->like('nik', 63);
        $query = $this->db->get();
        return $query;
    }
    public function get_pej($nik = null)
    {
        $this->db->from('tb_penduduk');
        if ($nik != null) {
            $this->db->where('nik', $nik);
        }
        $this->db->not_like('nik', 63);
        $query = $this->db->get();
        return $query;
    }

    //mendapatkan data penduduk yang melakukan login menggunakan clause where
    public function get_where()
    {
        $query = $this->db->get_where('tb_penduduk', ['nik' => $this->session->userdata('nik')])->row_array();
        return $query;
    }

    //mendapatkan data penduduk per rt untuk memfilter data sesuai rt yang login
    public function get_data_perrt()
    {
        $this->db->from('tb_penduduk');
        $this->db->where('rt', $this->session->userdata('rt'));
        $this->db->like('nik', 63);
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
