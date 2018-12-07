<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Testing extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->library("unit_test");
			$this->load->model("M_obat");
			$this->load->model("M_user");
			$this->load->model("M_laporan");
			$this->load->model("M_komplain");
		}

		public function getHarga(){
			$nama_obat = "Panadol";
			$query=$this->M_obat->getHarga($nama_obat);

			$harga;
			foreach ($query as $key) {
				$harga=$key->harga;
			}
			
			return $harga;
		}

		public function index(){
			echo "Using Unit Test Library";
			$test = $this->getHarga();
			$test_name = "Tes Variable Harga";
			echo $this->unit->run($test, 'is_string', $test_name);
		}

		public function getkomplain() {
        	$nama = "febry";
        	$query = $this->M_komplain->getkomplain($nama);
        	$no_komplain;
			foreach ($query as $key) {
				$no_komplain=$key->no_komplain;
			}
			
			return $no_komplain;
			
    	}

    	public function tesgetkomplain(){
			$test = $this->getkomplain();
			$expected_result = 2;
			$test_name = "Tes Get Komplain";
			$note = "Mengambil salah satu data dari Komplain yang ada di database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}

		public function getlaporan() {
        	$no_laporan = 2;
        	$query = $this->M_laporan->getlaporan($no_laporan);
        	if (!$query){
				$status = FALSE;
			} else if ($query) {
				$status = TRUE;
			}
			return $status;
    	}

    	public function tesgetlaporan(){
			$test = $this->getlaporan();
			$expected_result = 'is_int';
			$test_name = "Tes Get Laporan";
			$note = "Mengambil salah satu data dari laporan yang ada di database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}

		public function register(){
			$data = array(
				"BPJS" => "12345678",
				"nama" => "aku",
				"email" => "triyadifebry@gmail.com",
				"notlp" => "085523512312312312",
				"password" => "febry",
			);
			$query = $this->M_user->register($data);
			if (!$query){
				$status = FALSE;
			} else if ($query) {
				$status = TRUE;
			}
			return $status;
		}

		public function tesregister(){
			$test = $this->register();
			$expected_result = TRUE;
			$test_name = "Tes Input Register";
			$note = "Menambahkan data user dengan register ke dalam database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}


		public function profile(){
			$email = "triyadifebry@gmail.com";
			$password = "febry";
			$data = array();
			$options = array('email' => $email,'password' => $password);
			$Q = $this->db->get_where('user',$options,1);
			if ($Q->num_rows() > 0) {
				$data = $Q->row_array();
			}
			$Q->free_result();
			return $data;
		}

		public function tesprofile(){
			$test = $this->profile();
			$expected_result = "is_int";
			$test_name = "Tes Login";
			$note = "Mengecek data user profile dengan table user ke dalam database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}

		public function getnoobat(){
			$no_obat = 1;
        	$query = $this->M_obat->getNoObat($no_obat);
        	$nama_obat;
			foreach ($query as $key) {
				$nama_obat=$key->nama_obat;
			}
			return $nama_obat;
		}

		public function tesgetnoobat(){
			$test = $this->getnoobat();
			$expected_result = "Panado";
			$test_name = "Tes Get Obat";
			$note = "Mengecek data noobat di obat dengan table obat ke dalam database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}

		public function delete_komplain(){
			$no_komplain = 0;
			$query=$this->M_komplain->delete_komplain($no_komplain);

			if (!$query){
				$status = FALSE;
			} else if ($query){
				$status = TRUE;
			}
			return $status;
		}


		public function tesdeletekomplain(){
			$test = $this->delete_komplain();
			$expected_result = TRUE;
			$test_name = "Tes Delete Komplain";
			$note = "Mendelete data Komplain dari table Komplain yang ada di database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}

    	public function delete_obat(){
			$no_obat = 0;
			$query=$this->M_obat->delete_obat($no_obat);

			if (!$query){
				$status = FALSE;
			} else if ($query){
				$status = TRUE;
			}
			return $status;
		}

		public function tesdeleteobat(){
			$test = $this->delete_obat();
			$expected_result = TRUE;
			$test_name = "Tes Delete Obat";
			$note = "Mendelete data obat dari table obat yang ada di database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}

		public function delete_laporan(){
			$no_laporan = 2;
			$query=$this->M_laporan->delete_laporan($no_laporan);

			if (!$query){
				$status = FALSE;
			} else if ($query){
				$status = TRUE;
			}
			return $status;
		}

		public function tesdeletelaporan(){
			$test = $this->delete_laporan();
			$expected_result = TRUE;
			$test_name = "Tes Delete Laporan";
			$note = "Mendelet data laporan dari table laporan yang ada di database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}

		public function login(){
			$email = "triyadi@gmail.com";
			$password = "febry11";
			$result = $this->M_user->login($email,$password);
			return $result['exist'];
		}

		public function teslogin(){
			$test = $this->login();
			$expected_result = 1;
			$test_name = "Tes Login";
			$note = "Mengecek data user yang dapat login dari table user yang ada di database";
			echo $this->unit->run($test, $expected_result, $test_name, $note);
		}
				
	}

?>
