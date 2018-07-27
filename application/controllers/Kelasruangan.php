<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelasruangan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('kelasruangan_m');

	}

	public function index(){
		$data['list'] = $this->kelasruangan_m->list_kelasruangan();
		$data['isi'] =  "kelasruangan/page-kelasruangan";
		$data['title'] = 'Daftar Kelas Ruangan';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->kelasruangan_m->insert();
		redirect(base_url('kelasruangan'));
	}

	public function proses_edit(){
		$this->kelasruangan_m->edit();
		redirect(base_url('kelasruangan'));
	}

	public function proses_hapus(){
		$this->kelasruangan_m->hapus($this->input->get('id'));
		redirect(base_url('kelasruangan'));
	}
}
