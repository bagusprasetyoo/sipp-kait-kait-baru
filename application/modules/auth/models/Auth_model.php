<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function validate_member()
    {
        return $this->db->get('tb_penduduk')->result();
    }
}
