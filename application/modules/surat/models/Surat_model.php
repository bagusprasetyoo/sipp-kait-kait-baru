<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_surat');
        $this->db->join('tb_penduduk', 'tb_penduduk.nik = tb_surat.nik');
        $this->db->join('tb_pejabat', 'tb_pejabat.id_pejabat = tb_surat.id_pejabat');
        if ($id != null) {
            $this->db->where('id_surat', $id);
        }
        $this->db->order_by('tanggal_surat', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    //filter untuk menampilkan data surat sesuai nik pengguna yang login yang login
    public function filter_pengguna()
    {
        $nik = $this->session->userdata('nik');
        $this->db->from('tb_surat');
        $this->db->join('tb_penduduk', 'tb_penduduk.nik = tb_surat.nik');
        $this->db->join('tb_pejabat', 'tb_pejabat.id_pejabat = tb_surat.id_pejabat');
        $this->db->where('tb_surat.nik', $nik);
        $this->db->order_by('tanggal_surat', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    //filter untuk menampilkan data surat sesuai rt yang login
    public function filter_rt()
    {
        $rt = $this->session->userdata('rt');
        $this->db->from('tb_surat');
        $this->db->join('tb_penduduk', 'tb_penduduk.nik = tb_surat.nik');
        $this->db->join('tb_pejabat', 'tb_pejabat.id_pejabat = tb_surat.id_pejabat');
        $this->db->where('tb_penduduk.rt', $rt);
        $this->db->order_by('tanggal_surat', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    //mendapatkan data sebuah surat sesuai id
    public function get_where($id)
    {
        $query = $this->db->get_where('tb_surat', ['id_surat' => $id])->row_array();
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

    public function add_skbelumnikah($post)
    {
        date_default_timezone_set('Asia/Ujung_Pandang');
        $isi = [
            'nama' => $post['nama'],
            'nik' => $post['nik'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'agama' => $post['agama'],
            'status_nikah' => $post['status_nikah'],
            'pendidikan' => $post['pendidikan'],
            'pekerjaan' => $post['pekerjaan'],
            'alamat' => $post['alamat'],
            'keperluan' => $post['keperluan'],
            'tanggal_surat' => date('Y-m-d'),
        ];
        $isisurat = json_encode($isi);
        $params = [
            'jenis_surat' => 'SK Belum Menikah',
            'isi_surat' => $isisurat,
            'tanggal_surat' => date('Y-m-d H:i:s'),
            'nik' => $post['nik'],
        ];
        $this->db->insert('tb_surat', $params);
    }

    public function add_sktidakmampu($post)
    {
        date_default_timezone_set('Asia/Ujung_Pandang');
        $isi = [
            'nama' => $post['nama'],
            'nokk' => $post['n'],
            'nik' => $post['nik'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'alamat' => $post['alamat'],
            'kepalakeluarga' => $post['kepalakeluarga'],
            'keperluan' => $post['keperluan'],
            'tanggal_surat' => date('Y-m-d'),
        ];
        $isisurat = json_encode($isi);
        $params = [
            'jenis_surat' => 'SK Tidak Mampu',
            'isi_surat' => $isisurat,
            'tanggal_surat' => date('Y-m-d H:i:s'),
            'nik' => $post['nik'],
        ];
        $this->db->insert('tb_surat', $params);
    }

    public function add_spskck($post)
    {
        date_default_timezone_set('Asia/Ujung_Pandang');
        $isi = [
            'nama' => $post['nama'],
            'nik' => $post['nik'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'agama' => $post['agama'],
            'status_nikah' => $post['status_nikah'],
            'pekerjaan' => $post['pekerjaan'],
            'alamat' => $post['alamat'],
            'keperluan' => $post['keperluan'],
            'tanggal_surat' => date('Y-m-d'),
        ];
        $isisurat = json_encode($isi);
        $params = [
            'jenis_surat' => 'SP SKCK',
            'isi_surat' => $isisurat,
            'tanggal_surat' => date('Y-m-d H:i:s'),
            'nik' => $post['nik'],
        ];
        $this->db->insert('tb_surat', $params);
    }

    public function add_skkepemilikantanah($post)
    {
        date_default_timezone_set('Asia/Ujung_Pandang');
        $isi = [
            'nama' => $post['nama'],
            'nik' => $post['nik'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'utara' => $post['utara'],
            'timur' => $post['timur'],
            'selatan' => $post['selatan'],
            'barat' => $post['barat'],      
            'atas_nama' => $post['atas_nama'],      
            'nosurat' => $post['nosurat'],          
            'tglsurat' => $post['tglsurat'],          
            'pernyataan' => $post['pernyataan'],          
            'tanggal_surat' => date('Y-m-d'),
        ];
        $isisurat = json_encode($isi);
        $params = [
            'jenis_surat' => 'SK Kepemilikan Tanah',
            'isi_surat' => $isisurat,
            'tanggal_surat' => date('Y-m-d H:i:s'),
            'nik' => $post['nik'],
        ];
        $this->db->insert('tb_surat', $params);
    }

    public function add_skkematian($post)
    {
        date_default_timezone_set('Asia/Ujung_Pandang');
        $isi = [
            'nama_mati' => $post['nama_mati'],
            'nik_mati' => $post['nik_mati'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'tempat_lahir' => $post['tempat_lahir'],
            'tanggallahir' => $post['tanggallahir'],
            'agama' => $post['agama'],
            'alamat_mati' => $post['alamat_mati'],
            'hari' => $post['hari'],
            'tanggal_mati' => $post['tanggal_mati'],
            'jam' => $post['jam'],
            'tempat' => $post['tempat'],      
            'penyebab' => $post['penyebab'],      
            'nama' => $post['nama'],
            'nik' => $post['nik'],
            'tanggal_lahir' => $post['tanggal_lahir'],
            'pekerjaan' => $post['pekerjaan'],    
            'alamat' => $post['alamat'],              
            'hubungan' => $post['hubungan'],          
            'tanggal_surat' => date('Y-m-d'),
        ];
        $isisurat = json_encode($isi);
        $params = [
            'jenis_surat' => 'SK Kematian',
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

    public function tanda_tangan($post)
    {
        $params = [
            'id_pejabat' => $post['tanda_tangan'],
        ];
        $this->db->where('id_surat', $post['idsurat']);
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
