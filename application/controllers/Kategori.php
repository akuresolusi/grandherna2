<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('kategori_m');

	}

	public function index(){
		$data['list'] = $this->kategori_m->list_kategori();
		$data['isi'] =  "kategori/page-kategori";
		$data['title'] = 'Daftar Data Kategori';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->kategori_m->insert();
		redirect(base_url('kategori'));
	}

	public function proses_edit(){
		$this->kategori_m->edit();
		redirect(base_url('kategori'));
	}

	public function proses_hapus(){
		$this->kategori_m->hapus($this->input->get('id'));
		redirect(base_url('kategori'));
	}
}
