<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('evaluasi');
	}
	function cek() {
		$nim = $this->input->post('nim');
		$pass= $this->input->post('pass');

		$where = array('nim'=>$nim,'password'=>md5($pass));
		$cek = $this->evaluasi->cek_login("mhs",$where);
		if ($cek->num_rows() > 0) {
			$nama = $cek->result_array();
			$data_session = array('nim'=>$nim, 'status'=>'login', 'nama'=>$nama[0]['nama']);
			$this->session->set_userdata($data_session);
			redirect(base_url('welcome'));
		} else {
			echo "username atau password salah";
		}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function index() {
		$this->load->view('login/form_login');
	}
}
