<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesialis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('spesialis_m');

	}

	public function index(){
		$data['list'] = $this->spesialis_m->list_spesialis();
		$data['isi'] =  "spesialis/page-spesialis";
		$data['title'] = 'Daftar Data Spesialis';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->spesialis_m->insert();
		redirect(base_url('spesialis'));
	}

	public function proses_edit(){
		$this->spesialis_m->edit();
		redirect(base_url('spesialis'));
	}

	public function proses_hapus(){
		$this->spesialis_m->hapus($this->input->get('id'));
		redirect(base_url('spesialis'));
	}

}
