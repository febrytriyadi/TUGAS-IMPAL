 <!-- Ainun Abidin(1301164159)-->
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_diagram extends CI_Model {

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
    public function proses_register(){

                        $data = [
                            'nama'=>$this->input->post('nama'),
                            'email'=>$this->input->post('email'),
                            'alamat'=>$this->input->post('alamat'),
                            'phone'=>$this->input->post('phone'),
                            'password'=>$this->input->post('password')
                        ];
                        $tambah = $this->M_user->register($data);
                        if($tambah){
                            $this->session->set_flashdata('message', 'berhasil');
                            redirect('C_login');
                        }else{
                            echo "gagal";       
                }
    }
    public function proses_update_akun(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('password')
            );
            $this->session->set_userdata('nama',$this->input->post('nama'));
            $this->session->set_userdata('alamat',$this->input->post('alamat'));
            $this->session->set_userdata('phone',$this->input->post('phone'));
            $email=$this->input->post('email');
            $this->db->where('email',$email);
            $this->db->update('user',$data);

            redirect('C_login');
        }        
    public function proses_login(){

        $uid = $this->input->post('email');
        $pwd = $this->input->post('password');
        $hasil=$this->M_akun->login($uid,$pwd);
        if($uid=='admin@admin.com' and $pwd=='admin'){
            redirect('C_admin');
        }
        else if ($hasil['exist']>0) {
            $data = $this->M_akun->profile($uid,$pwd);
            $data_sess = array(
                'nama' => $data['nama'],
                'email' => $data['email'],
                'alamat' => $data['alamat'],
                'phone' => $data['phone'],
                'password' => $data['password']
            );
            $this->session->set_userdata($data_sess);
            redirect('C_index');
        }
        else {
            $this->session->set_flashdata('message', 'login anda salah, silahkan login kembali');           
            redirect('C_login');
        }   
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('C_login/index');
    }

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
    public function search_data_obat(){
            $nama_obat = $this->input->post('nama_obat');
            $harga = $this->input->post('harga');
            $data['data']=$this->m_obat->search_obat($nama_obat,$harga);
            $this->load->view('tambahobat',$data);
        }
        public function proses_tambah_obat(){
            $data = array(
                'nama_obat' => $this->input->post('nama_obat'),
                'jenis' => $this->input->post('jenis'),
                'stock' => $this->input->post('stock'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pict' => $this->input->post('pict'),
            );
            $this->db->insert('obat',$data);

        redirect('C_admin/tambahobat');
	    }
        public function proses_update_obat(){
            $data = array(
                'nama_obat' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'stock' => $this->input->post('stock'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'pict' => $this->input->post('pict'),
            );
            $no_obat=$this->input->post('no_obat');
            $this->db->where('no_obat',$no_obat);
            $this->db->update('obat',$data);

            redirect('C_admin/tambahobat');
        }        
        public function proses_delete_obat(){
            $this->m_obat->delete_obat($this->input->post('no_obat'));
            redirect('C_admin/tambahobat');

        }

    public function getlaporan() {
        return $this->db->query("select * from laporan")->result();
    }
    public function proses_tambah_laporan(){
            $data = array(
                'nama_laporan' => $this->input->post('nama_laporan'),
                'nama_obat' => $this->input->post('nama_obat'),
                'jumlah' => $this->input->post('jumlah'),
                'total_harga' => $this->input->post('total_harga'),
                'tanggal' => $this->input->post('tanggal'),
            );
            $this->db->insert('laporan',$data);

        redirect('C_admin/laporan');
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
    public function proses_delete_laporan(){
        $this->m_laporan->delete_laporan($this->input->post('no_laporan'));
        redirect('C_admin/laporan')
    }

    public function getpesanan() {
        return $this->db->query("select * from pesanan")->result();
    }
    public function proses_tambah_pesanan(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'nama_obat' => $this->input->post('nama_obat'),
                'jumlah' => $this->input->post('jumlah'),
                'total_harga' => $this->input->post('total_harga'),
                'alamat_kirim' => $this->input->post('alamat_kirim'),
                'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),
                'status' => $this->input->post('status'),
            );
            $this->db->insert('pesanan',$data);
        redirect('C_index/');
        }
        public function proses_delete_pesanan(){
            $this->m_pesanan->delete_pesanan($this->input->post('no_pesanan'));
            redirect('C_admin/data_pesanan');

        }
        public function proses_update_pesanan(){
            $status=$this->input->post('status');
            $no_pesanan=$this->input->post('no_pesanan');
            $this->db->query("UPDATE pesanan set status='$status' where no_pesanan='$no_pesanan'");

            redirect('C_admin/data_pesanan');
        }

    public function getkomplain() {
        return $this->db->query("select * from komplain")->result();
    }
    public function proses_tambah_komplain(){
            $data = array(
                'kritik' => $this->input->post('kritik'),
            );
            $this->db->insert('komplain',$data);

        redirect('C_admin/komplain');
        }

}