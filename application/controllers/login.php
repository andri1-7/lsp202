<?php 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
  
	function index(){

		if($this->session->userdata('status') == "login"){
			redirect(base_url("admin"));
		}else{$this->load->view('v_login');}
		
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			//'password' => md5($password)
			'password' => $password
			);
		$cek = $this->m_login->cek_login("tbl_user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			//redirect('login');
			$this->session->set_flashdata('message','Username atau password salah');
			redirect(base_url("login"));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}