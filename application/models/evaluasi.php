<?php defined('BASEPATH') OR exit('No direct script access allowed');
class evaluasi extends CI_Model
{
	
	public function __construct()	{
		parent::__construct();
		$this->load->database();
	}

	function cek_login($table, $where) {
		return $this->db->get_where($table, $where);
	}

	function readData($table) {
		return $this->db->get($table);
	}

	function distinctData($table,$dist) {
		return $this->db->distinct()->select($dist)->get($table);
	}

	function readDosen() {
		$this->db->select('dosen.id, dosen.nama, dosen.alamat, prodi.nama as prodi');
		$this->db->from('dosen');
		$this->db->join('prodi', 'dosen.id_prodi=prodi.id');
		$query = $this->db->get();
		return $query;
	}

	function readKrs() {
		$nim = $this->session->userdata('nim');
		$this->db->select('dosen.id as id, matkul.nama as matkul, matkul.sks, krs.waktu, dosen.nama as dosen, ruang.nama as ruang');
		$this->db->from('krs');
		$this->db->join('matkul', 'krs.id_matkul = matkul.id');
		$this->db->join('dosen','krs.id_dosen = dosen.id');
		$this->db->join('ruang', 'krs.id_ruang = ruang.id')->where('krs.id_mhs',$nim);
		$query = $this->db->get();
		return $query;
	}

	function readDdosen($id) {
		$this->db->select("dosen.nama as dosen, dosen.alamat, prodi.nama as prodi");
		$this->db->from('dosen')->join('prodi','dosen.id_prodi = prodi.id')->where('dosen.id',$id);
		return $this->db->get()->result_array();
	}
 
 	function grafik() {
 		$this->db->select("COUNT(krs.id_matkul) as total, matkul.nama")->from('krs');
 		$this->db->join('matkul', 'matkul.id = krs.id_matkul')->group_by('krs.id_matkul');
 		return $this->db->get();
 	}
}