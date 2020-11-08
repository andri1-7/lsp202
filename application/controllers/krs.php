<?php 
 
class krs extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}else{
			$this->load->model('m_krs');
		}
	}
 
	function index(){
		$data['krs']=$this->m_krs->get_all()->result();
        $data['title']="Data dosen";
        $data['message']="";
		$this->load->view('krs/index',$data);
		
		
	}
	function tambah(){
    $data['message']="";
    $data['mahasiswa'] = $this->m_krs->get_mahasiswa();
    $data['jadwal'] = $this->m_krs->get_jadwal();
		$this->load->view('krs/tambah',$data);
		
		
	}
	function tambah_aksi(){
		 
		 	$info=array(
                    'id_jadwal'=>$this->input->post('id_jadwal'),
                     'id_mhs'=>$this->input->post('id_mhs'),
                      'semester'=>$this->input->post('semester'),
                    
                );
                $this->m_krs->simpan($info);

            			redirect('krs');
		
	}
	function edit($kode){//1001
              $data['message']="";
    $data['mahasiswa'] = $this->m_krs->get_mahasiswa();
    $data['jadwal'] = $this->m_krs->get_jadwal();
    $data['krs']=$this->m_krs->cek($kode)->row_array();
    // die(var_dump($data['jadwal']));
           $this->load->view('krs/edit',$data);
        
    }
    function edit_aksi(){
             
            $kode=$this->input->post('id');
            
          	$info=array(
                   'id_jadwal'=>$this->input->post('id_jadwal'),
                     'id_mhs'=>$this->input->post('id_mhs'),
                      'semester'=>$this->input->post('semester'),
                    
                );
            $this->m_krs->update($kode,$info);
        	redirect('krs');
    }

	 function hapus($kode){
        
        
        $this->m_krs->hapus($kode);
        redirect('dosen');
    }
}