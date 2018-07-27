<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('departemen_m');

	}

	public function index(){
		$data['list'] = $this->departemen_m->list_departemen();
		$data['isi'] =  "departemen/page-departemen";
		$data['title'] = 'Daftar Data Departemen';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->departemen_m->insert();
		redirect(base_url('departemen'));
	}

	public function proses_edit(){
		$this->departemen_m->edit();
		redirect(base_url('departemen'));
	}

	public function proses_hapus(){
		$this->departemen_m->hapus($this->input->get('id'));
		redirect(base_url('departemen'));
	}
}
