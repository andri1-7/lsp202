<?php 
 
class M_dosen extends CI_Model{
 private $table="tbl_dosen";
 private $primary="kd_dosen";
function get_all(){		
		return $this->db->get($this->table);
	}	

	function cek($kode){
        $this->db->where($this->primary,$kode);
        $query=$this->db->get($this->table);
        
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

}