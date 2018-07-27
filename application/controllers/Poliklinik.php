<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('poliklinik_m');

	}

	public function index(){
		$data['list'] = $this->poliklinik_m->list_poliklinik();
		$data['isi'] =  "poliklinik/page-poli";
		$data['title'] = 'Daftar Data Poliklinik';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->poliklinik_m->insert();
		redirect(base_url('poliklinik'));
	}

	public function proses_edit(){
		$this->poliklinik_m->edit();
		redirect(base_url('poliklinik'));
	}

	public function proses_hapus(){
		$this->poliklinik_m->hapus($this->input->get('id'));
		redirect(base_url('poliklinik'));
	}
}
