<?php 
 
class Dosen extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}else{
			$this->load->model('m_dosen');
		}
	}
 
	function index(){
		$data['dosen']=$this->m_dosen->get_all()->result();
        $data['title']="Data dosen";
        $data['message']="";
		$this->load->view('dosen/index',$data);
		
		
	}
	function tambah(){
		$data['message']="";
		$this->load->view('dosen/tambah',$data);
		
		
	}
	function tambah_aksi(){
		 $kode=$this->input->post('kd_dosen');
          $cek=$this->m_dosen->cek($kode); // cek kode di database
            if($cek->num_rows()>0){ // jika kode sudah ada, maka tampilkan pesan
                $data['message']="</br>kode dosen sudah ada</br>";
                $this->load->view('dosen/tambah',$data);
            }else{
		 	$info=array(
                    'kd_dosen'=>$this->input->post('kd_dosen'),
                     'nama'=>$this->input->post('nama'),
                      'alamat'=>$this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin')
                    
                );
                $this->m_dosen->simpan($info);

            			redirect('dosen');
    
		}
		
	}
	function edit($kode){//1001
              $data['message']="";
            $data['dosen']=$this->m_dosen->cek($kode)->row_array();
           $this->load->view('dosen/edit',$data);
        
    }
    function edit_aksi(){
             
            $kode=$this->input->post('kd_dosen');
            
          	$info=array(
                    'kd_dosen'=>$this->input->post('kd_dosen'),
                     'nama'=>$this->input->post('nama'),
                      'alamat'=>$this->input->post('alamat'),
                      'jenis_kelamin'=>$this->input->post('jenis_kelamin')
                    
                );
            $this->m_dosen->update($kode,$info);
        	redirect('dosen');
    }

	 function hapus($kode){
        
        
        $this->m_dosen->hapus($kode);
        redirect('dosen');
    }
}