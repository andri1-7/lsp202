<?php 
 
class M_krs extends CI_Model{
 private $table="tbl_krs";
 private $primary="id";
function get_all(){
    $this->db->select('tk.*,m.nama as nama, tj.ruang as ruang, tj.waktu as waktu ');
    $this->db->from('tbl_krs tk');
    $this->db->join('mahasiswa m', 'm.id=tk.id_mhs', 'left');
    $this->db->join('tbl_jadwal tj', 'tj.id=tk.id_jadwal', 'left');

    $query = $this->db->get();

    return $query;
	}	

	function cek($kode){
    $this->db->where('tk.id', $kode);
    $this->db->select('tk.*,m.nama as nama, tj.ruang as ruang, tj.waktu as waktu ');
    $this->db->from('tbl_krs tk');
    $this->db->join('mahasiswa m', 'm.id=tk.id_mhs', 'left');
    $this->db->join('tbl_jadwal tj', 'tj.id=tk.id_jadwal', 'left');
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
        $this->db->delete('tbl_krs');
    }


  public function get_mahasiswa()
  {

    $this->db->select('*');
    $this->db->from('mahasiswa');
    $query = $this->db->get();
    return $query->result();
  }

  public function get_jadwal()
  {

    $this->db->select('*');
    $this->db->from('tbl_jadwal');
    $query = $this->db->get();
    return $query->result();
  }
}