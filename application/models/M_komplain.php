<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_komplain extends CI_Model {

    public function getkomplain() {
        return $this->db->query("select * from komplain")->result();
    }
	public function delete_komplain($no_komplain){
        $table = 'komplain';
        $this->db->where('no_komplain', $no_komplain);
        $delete = $this->db->delete($table);

        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}