<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PeminjamModel'); 
        $this->load->model('BukuModel'); 
        $this->load->model('AnggotaModel'); 

    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['content'] = 'table_view'; 
        $data['items'] = $this->PeminjamModel->get_all_items();
        $this->load->view('template/main', $data);
    }

    public function delete($id)
    {
        $this->PeminjamModel->delete_item($id);
        redirect('dashboard');
    }

    public function add()
    {
        $data['title'] = 'Tambah Data';
        $data['bukus'] = $this->BukuModel->get_all_buku();
        $data['anggotas'] = $this->AnggotaModel->get_all_anggota();
        $data['content'] = 'add_item_view';
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        if(isset($_POST['submit'])){
            $data = array(
                'id_pinjam' => $this->input->post('id_pinjam'),
                'id_anggota' => $this->input->post('anggota_id'),
                'id_buku' => $this->input->post('buku_id'),
                'tgl_pinjam' => $this->input->post('tgl_pinjam'),
                'tgl_kembali' => $this->input->post('tgl_kembali'),
                'jml_pinjam' => $this->input->post('jumlah'),
                'lama_pinjam' => $this->input->post('lama_pinjam'),
            );
            $this->PeminjamModel->insert_item($data);
            redirect('dashboard');
        }
        
        echo "TIDAK";
    }
}
