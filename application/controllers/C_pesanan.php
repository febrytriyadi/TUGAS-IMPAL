<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_pesanan extends CI_Controller {
        
        public function __construct(){
            parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('m_pesanan');
			$this->load->library('session');
        }
        public function index(){
            $data['data']=$this->m_pesanan->getpesanan();
            $this->load->view('checkout',$data);
        }
        public function proses_pesanan(){
            $data = array(
                'stock' => $this->input->post('stock'),
                'nama_obat' => $this->input->post('nama_obat'),
                'harga' => $this->input->post('harga'),
            );
            $this->db->insert('pesanan',$data);
        redirect('C_pesanan/index');
        }
    }
?>