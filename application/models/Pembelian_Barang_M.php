<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian_Barang_M extends CI_Model {
    public function ambilHargaBarang($kodeBarang){
        return $this->db->query('select harga from barang where id_barang = '.$kodeBarang)->row();
    }
}