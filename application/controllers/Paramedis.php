<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paramedis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('paramedis_m');
		$this->load->model('detail_m');

	}

	public function index(){
		$data['list'] = $this->paramedis_m->list_paramedis();
		$data['list_spesialis'] = $this->paramedis_m->list_spesialis();
		$data['isi'] =  "paramedis/page-paramedis";
		$data['title'] = 'Daftar Data Para Medis';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah(){
		$this->paramedis_m->insert();
		redirect(base_url('paramedis'));
	}

	public function proses_edit(){
		$this->paramedis_m->edit();
		redirect(base_url('paramedis'));
	}

	public function proses_hapus(){
		$this->paramedis_m->hapus($this->input->get('id'));
		redirect(base_url('paramedis'));
	}
}
