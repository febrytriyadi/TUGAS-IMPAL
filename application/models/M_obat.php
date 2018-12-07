<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_obat extends CI_Model {

    public function getobat() {
        return $this->db->query("select * from obat")->result();
    }
	public function delete_obat($no_obat){
        $table = 'obat';
        $this->db->where('no_obat', $no_obat);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    function getNoObat($no_obat) {
        return $this->db->query("select * from obat where no_obat = '$no_obat'")->result();
    }
}