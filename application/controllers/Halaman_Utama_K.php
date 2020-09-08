<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Halaman_Utama_K extends CI_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->helper(['url']);
            $this->load->model('Halaman_Utama_M');
    }
    public function index(){
        $table['table'] = $this->load->view('isi/table_barang', '', true);
        $title['title'] = 'Kasir | Halaman utama';
        $this->load->view('templates/header',$title);
        $this->load->view('halaman/halaman_utama',$table);
        $this->load->view('templates/footer');
    }
    public function tambahDataBarang(){
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $this->Halaman_Utama_M->inputBarang($nama , $harga ,$jumlah);
    }
    public function ambilDataBarang(){
        $data = $this->Halaman_Utama_M->getDataBarang();
        echo json_encode($data);
    }
}

?>