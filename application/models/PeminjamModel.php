<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeminjamModel extends CI_Model {

    public function get_all_items()
    {
        $this->db->select('peminjaman_buku.*, buku.judul_buku, anggota.nama_anggota');
        $this->db->from('peminjaman_buku');
        $this->db->join('buku', 'peminjaman_buku.id_buku = buku.id_buku', 'inner');
        $this->db->join('anggota', 'peminjaman_buku.id_anggota = anggota.id_anggota', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_item($id)
    {
        $this->db->where('id_pinjam', $id);
        return $this->db->delete('peminjaman_buku');
    }

    public function insert_item($data)
    {
        return $this->db->insert('peminjaman_buku', $data);
    }
}