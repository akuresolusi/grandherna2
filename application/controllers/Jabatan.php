<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('jabatan_m');

	}

	public function index(){
		$data['list'] = $this->jabatan_m->list_jabatan();
		$data['isi'] =  "jabatan/page-jabatan";
		$data['title'] = 'Daftar Data Jabatan';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->jabatan_m->insert();
		redirect(base_url('jabatan'));
	}

	public function proses_edit(){
		$this->jabatan_m->edit();
		redirect(base_url('jabatan'));
	}

	public function proses_hapus(){
		$this->jabatan_m->hapus($this->input->get('id'));
		redirect(base_url('jabatan'));
	}
}
