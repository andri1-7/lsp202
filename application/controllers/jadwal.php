<?php 
 
class Jadwal extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}else{
			$this->load->model('m_jadwal');
		}
	}
 
	function index(){
		$data['jadwal']=$this->m_jadwal->get_all()->result();
        $data['title']="Data jadwal";
        $data['message']="";
		$this->load->view('jadwal/index',$data);
		
		
	}
	function tambah(){
		$data['message']="";
    $data['dosen']=$this->m_jadwal->get_dosen();
    $data['matkul']=$this->m_jadwal->get_matkul();
		$this->load->view('jadwal/tambah',$data);
		
		
	}
	function tambah_aksi(){
		 //$kode=$this->input->post('kd_jadwal');
          //$cek=$this->m_jadwal->cek($kode); // cek kode di database
            if(0>0){ // jika kode sudah ada, maka tampilkan pesan
                $data['message']="</br>kode jadwal sudah ada</br>";
                $this->load->view('jadwal/tambah',$data);
            }else{
		 	$info=array(
                    'kd_dosen'=>$this->input->post('kd_dosen'),
                    'kd_matkul'=>$this->input->post('kd_matkul'),
                     'ruang'=>$this->input->post('ruang'),
                      'waktu'=>$this->input->post('waktu')
                    
                );
                $this->m_jadwal->simpan($info);

            			redirect('jadwal');
    
		}
		
	}
	function edit($kode){
              $data['message']="";
               $data['dosen']=$this->m_jadwal->get_dosen();
              $data['matkul']=$this->m_jadwal->get_matkul();
            $data['jadwal']=$this->m_jadwal->cek($kode)->row_array();
           $this->load->view('jadwal/edit',$data);
        
    }
    function edit_aksi(){
             
            $kode=$this->input->post('id');
            
          	$info=array(
                    'kd_dosen'=>$this->input->post('kd_dosen'),
                     'kd_matkul'=>$this->input->post('kd_matkul'),
                     'ruang'=>$this->input->post('ruang'),
                      'waktu'=>$this->input->post('waktu')
                    
                );
            $this->m_jadwal->update($kode,$info);
        	redirect('jadwal');
    }

	 function hapus($kode){
        
        
        $this->m_jadwal->hapus($kode);
        redirect('jadwal');
    }
}