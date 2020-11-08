<?php 
 
class Matkul extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}else{
			$this->load->model('m_matkul');
		}
	}
 
	function index(){
		$data['matkul']=$this->m_matkul->get_all()->result();
        $data['title']="Data Matakuliah";
        $data['message']="";
		$this->load->view('matkul/index',$data);
		
		
	}
	function tambah(){
		$data['message']="";
		$this->load->view('matkul/tambah',$data);
		
		
	}
	function tambah_aksi(){
		 $kode=$this->input->post('kd_matkul');
          $cek=$this->m_matkul->cek($kode); // cek kode di database
            if($cek->num_rows()>0){ // jika kode sudah ada, maka tampilkan pesan
                $data['message']="</br>kode matkul sudah ada</br>";
                $this->load->view('matkul/tambah',$data);
            }else{
		 	$info=array(
                    'kd_matkul'=>$this->input->post('kd_matkul'),
                     'nama'=>$this->input->post('nama'),
                      'sks'=>$this->input->post('sks')
                    
                );
                $this->m_matkul->simpan($info);

            			redirect('matkul');
    
		}
		
	}
	function edit($kode){//1001
              $data['message']="";
            $data['matkul']=$this->m_matkul->cek($kode)->row_array();
           $this->load->view('matkul/edit',$data);
        
    }
    function edit_aksi(){
             
            $kode=$this->input->post('kd_matkul');
            
          	$info=array(
                    'kd_matkul'=>$this->input->post('kd_matkul'),
                     'nama'=>$this->input->post('nama'),
                      'sks'=>$this->input->post('sks')
                    
                );
            $this->m_matkul->update($kode,$info);
        	redirect('matkul');
    }

	 function hapus($kode){
        
        
        $this->m_matkul->hapus($kode);
        redirect('matkul');
    }
}