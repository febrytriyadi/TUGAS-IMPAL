<?php 
 
class C_login extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('M_user'); 
    $this->load->model('m_obat');
    $this->load->model('m_laporan');
    $this->load->model('m_komplain');
    $this->load->library('form_validation');
    $this->load->helper(array('form', 'url'));
    $this->load->library('session');
  }
 
  public function index(){
    if($this->session->userdata('posisi')=='product'){
      #echo $this->session->userdata('posisi');
      $data['data']=$this->m_obat->getobat();
      $this->load->view('product',$data);
    }else $this->load->view('index');
  }
#  public function product(){
#    $this->load->view('product');
#  }
  public function komplain(){
    $this->load->view('komplain');
  }
  public function pembayaran(){
    $this->load->view('pembayaran');
  }
  public function profile(){
    $this->load->view('profile');
  }
  public function single(){
    $no_obat =  $this->input->get('nama');
    $data['data']=$this->m_obat->getNoObat($no_obat);
  #    $this->load->database();
  #    $data['data'] = $this->m_obat->getNoObat($no_obat);
      $this->load->view('single',$data);
  }
  public function proses(){

                        $data = [
              'BPJS'=>$this->input->post('BPJS'),
              'nama'=>$this->input->post('nama'),
              'email'=>$this->input->post('email'),
              'notlp'=>$this->input->post('notlp'),
              'password'=>$this->input->post('password')
            ];
            $tambah = $this->M_user->register($data);
            if($tambah){
              $this->session->set_flashdata('message', 'berhasil');
              redirect('');
            }else{
              echo "gagal";   
                }
  }
  public function proses_tambah_komplain(){
            $data = array(
                'nama_k' => $this->input->post('nama_k'),
                'kritik' => $this->input->post('kritik'),
            );
            $this->db->insert('komplain',$data);
        redirect('C_login/komplain');
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

            redirect('C_login/profile');
        }        
  public function proses_login(){

        $uid = $this->input->post('email');
        $pwd = $this->input->post('password');
    $hasil=$this->M_user->login($uid,$pwd);
    if($uid=='admin@admin.com' and $pwd=='admin'){
      redirect('C_admin/tambahobat');
    }
    else if($uid=='manager@manager.com' and $pwd=='manager') {
      redirect('C_manager/index');
    }
    else if($uid=='suplier@suplier.com' and $pwd=='suplier') {
      redirect('C_supplier/index');
    }
    else if ($hasil['exist']>0) {
      $data = $this->M_user->profile($uid,$pwd);
      $data_sess = array(
        'BPJS' => $data['BPJS'],
        'nama' => $data['nama'],
        'email' => $data['email'],
        'notlp' => $data['notlp'],
        'password' => $data['password'],
        'posisi' => 'product'
      );
      $this->session->set_userdata($data_sess);
      redirect('');
      #$this->index();
    }
    else {
      $this->session->set_flashdata('message', 'login anda salah, silahkan login kembali');     
      #echo "gagal";
      redirect('');
      #$this->index();
    } 
  }
  public function logout(){
    $this->session->sess_destroy();
    redirect('');
  }
}