<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_manager extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('m_laporan');
			$this->load->library('session');
        }
        public function index(){
            $data['data']=$this->m_laporan->getlaporan();
            $this->load->view('datalaporan',$data);
        }
    }
?>