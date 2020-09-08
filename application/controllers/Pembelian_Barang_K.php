<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pembelian_Barang_K extends CI_Controller {
    public function __construct(){
        parent::__construct();
            $this->load->helper(['url']);
            $this->load->model('Pembelian_Barang_M');
    }
    public function index(){
        $table['table'] = $this->load->view('isi/table_barang', '', true);
        $title['title'] = 'Kasir | Pembelian Barang';
        $this->load->view('templates/header',$title);
        $this->load->view('halaman/pembelian-barang',$table);
        $this->load->view('templates/footer');
    }
    public function ambilHargaBarang(){
        $kode_barang = $this->input->post('kodeBarang');
        if($kode_barang == null || $kode_barang == " "){
            $data = ['gagal'=> 0];
            echo json_encode($data);
        }else{
            $hasil = $this->Pembelian_Barang_M->ambilHargaBarang($kode_barang);
            echo json_encode($hasil);
        }
    }
}
?>