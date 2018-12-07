<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    public function getlaporan() {
        return $this->db->query("select * from laporan")->result();
    }
	public function delete_laporan($no_laporan){
        $table = 'laporan';
        $this->db->where('no_laporan', $no_laporan);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}