<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Halaman_Utama_M extends CI_Model {
    public function inputBarang($nama , $harga , $jumlah){
        $data = [
            'id_barang' => null,
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah
        ];
        $this->db->insert('barang',$data);
    }
    public function getDataBarang(){
        return $this->db->get('barang')->result();
    }
}

?>