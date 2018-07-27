<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pasien_m');
		$this->load->model('detail_m');
		$this->load->model('pendaftaran_m');
	}

	public function index(){
		$data['list'] = $this->pasien_m->list_pasien();
		$data['isi'] = "rekammedis/page-rekammedis";
		$data['title'] = 'Daftar Rekam Medis';
		$this->load->view('layout',$data);
	}

	public function lihat(){
		$data['pasien'] = $this->detail_m->detail_pasien($this->input->get('norm'));
		$data['reg_inap'] = $this->pendaftaran_m->reg_inap_pasien($this->input->get('norm'));
		$data['isi'] = "rekammedis/proses-rekammedis";
		$data['title'] = 'Data Rekam Medis Pasien';
		$this->load->view('layout',$data);
	}
}