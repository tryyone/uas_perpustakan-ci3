<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuModel extends CI_Model {

    public function get_all_buku()
    {
        $query = $this->db->get('buku');
        return $query->result();
    }
}
?>
