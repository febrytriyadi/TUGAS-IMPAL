<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function login($email, $password){
        $query= $this->db->query("select count(*) as exist from user "."where email='$email' and password='$password'"); 
        return $query->row_array(); 
    }   
    public function register($data){
		return $this->db->insert('user', $data);
	}
	public function profile($email,$password){
		$data = array();
		$options = array('email' => $email,'password' => $password);
		$Q = $this->db->get_where('user',$options,1);
		if ($Q->num_rows() > 0) {
			$data = $Q->row_array();
		}
		$Q->free_result();
		return $data;
	}
	
}