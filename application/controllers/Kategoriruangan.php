<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriruangan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('kategoriruangan_m');

	}

	public function index(){
		$data['list'] = $this->kategoriruangan_m->list_kategoriruangan();
		$data['isi'] =  "kategoriruangan/page-kruangan";
		$data['title'] = 'Daftar Kategori Ruangan';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->kategoriruangan_m->insert();
		redirect(base_url('kategoriruangan'));
	}

	public function proses_edit(){
		$this->kategoriruangan_m->edit();
		redirect(base_url('kategoriruangan'));
	}

	public function proses_hapus(){
		$this->kategoriruangan_m->hapus($this->input->get('id'));
		redirect(base_url('kategoriruangan'));
	}
}
