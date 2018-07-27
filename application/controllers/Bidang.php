<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('bidang_m');

	}

	public function index(){
		$data['list'] = $this->bidang_m->list_bidang();
		$data['isi'] =  "bidang/page-bidang";
		$data['title'] = 'Daftar Data Bidang';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->bidang_m->insert();
		redirect(base_url('bidang'));
	}

	public function proses_edit(){
		$this->bidang_m->edit();
		redirect(base_url('bidang'));
	}

	public function proses_hapus(){
		$this->bidang_m->hapus($this->input->get('id'));
		redirect(base_url('bidang'));
	}
}
