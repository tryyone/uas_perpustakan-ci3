<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaModel extends CI_Model {

    public function get_all_anggota()
    {
        $query = $this->db->get('anggota');
        return $query->result();
    }
}
?>
