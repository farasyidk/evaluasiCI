<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('evaluasi');
		if ($this->session->userdata('status') != 'login') {
			redirect(base_url("login"));
		}
	}
	public function index($page = 'home') {
		$data['page'] = 'content/'.$page;
		$data['dosen'] = $this->evaluasi->readDosen();
		$data['ruang'] = $this->evaluasi->readData('ruang');
		$data['krs'] = $this->evaluasi->readKrs();
		$data['row'] = $this->evaluasi->distinctData('matkul','semester');
		$data['matkul'] = $this->evaluasi->readData('matkul');
		$this->load->view('index', $data);
	}
	function dDosen($id) {
		$data['dosen'] = $this->evaluasi->readDdosen($id);
		$data['page'] = 'content/detail_dosen';
		$this->load->view('index', $data);	
	}
	function grafik() {
		$data['page'] = 'content/graph';
		$data['graf'] = $this->evaluasi->grafik();
		foreach ($data['graf']->result_array() as $d) {
			$data['total'][] = $d['total'];
			$data['nama'][] = $d['nama'];
		}
		
		$this->load->view('index', $data);
	}
}
