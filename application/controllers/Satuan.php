<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('satuan_m');

	}

	public function index(){
		$data['list'] = $this->satuan_m->list_satuan();
		$data['isi'] =  "satuan/page-satuan";
		$data['title'] = 'Daftar Data Satuan';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->satuan_m->insert();
		redirect(base_url('satuan'));
	}

	public function proses_edit(){
		$this->satuan_m->edit();
		redirect(base_url('satuan'));
	}

	public function proses_hapus(){
		$this->satuan_m->hapus($this->input->get('id'));
		redirect(base_url('satuan'));
	}
}
