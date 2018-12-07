<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanan extends CI_Model {

    public function getpesanan() {
        return $this->db->query("select * from pesanan")->result();
    }
	public function delete_pesanan($no_pesanan){
        $table = 'pesanan';
        $this->db->where('no_pesanan', $no_pesanan);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}