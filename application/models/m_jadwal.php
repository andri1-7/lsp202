<?php 
 
class M_jadwal extends CI_Model{
 private $table="tbl_jadwal";
 private $primary="id";
function get_all(){
        $this->db->select('tj.*,td.nama as nama_dosen,tm.nama as nama_matkul ');
        $this->db->from('tbl_jadwal tj');
        $this->db->join('tbl_dosen td', 'td.kd_dosen=tj.kd_dosen', 'left');
        $this->db->join('tbl_matkul tm', 'tm.kd_matkul=tj.kd_matkul', 'left');

        $query = $this->db->get();

        return $query;
	}	

	function cek($kode){
        $this->db->where($this->primary,$kode);
        $this->db->select('tj.*,td.nama as nama_dosen,tm.nama as nama_matkul ');
        $this->db->from('tbl_jadwal tj');
        $this->db->join('tbl_dosen td', 'td.kd_dosen=tj.kd_dosen', 'left');
        $this->db->join('tbl_matkul tm', 'tm.kd_matkul=tj.kd_matkul', 'left');

        $query = $this->db->get();
        
        return $query;
    }

	 function simpan($jenis){
        $this->db->insert($this->table,$jenis);
            }

     function update($kode,$jenis){
        $this->db->where($this->primary,$kode);
        $this->db->update($this->table,$jenis);
    }
    function hapus($kode){
        $this->db->where($this->primary,$kode);
        $this->db->delete($this->table);
    }

     public function get_dosen(){
        
        $this->db->select('*');
        $this->db->from('tbl_dosen');        
        $query=$this->db->get();
        return $query->result();
    }

      public function get_matkul(){
        
        $this->db->select('*');
        $this->db->from('tbl_matkul');        
        $query=$this->db->get();
        return $query->result();
    }

}