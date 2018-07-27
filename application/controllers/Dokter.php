<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('dokter_m');
		$this->load->model('spesialis_m');
	}

	public function index(){
		$data['list'] = $this->dokter_m->list_dokter();
		$data['isi'] =  "dokter/page-dokter";
		$data['title'] = 'Daftar Dokter';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] = "dokter/tambah-dokter";
		$data['title'] = 'Tambah Dokter';
		$data['list_spesialis'] = $this->spesialis_m->list_spesialis();
		$this->load->view('layout',$data);
	}
	public function proses_tambah(){
		$this->dokter_m->insert();
		redirect(base_url().'dokter');
	}
	public function edit(){
		$data['isi'] =  "dokter/edit-dokter";
		$data['title'] = 'Edit Dokter';
		$data['detail'] = $this->dokter_m->detail_dokter($this->input->get('id'));
		$data['list_spesialis'] = $this->spesialis_m->list_spesialis();
		$this->load->view('layout',$data);
	}

	public function proses_edit(){
		$this->dokter_m->edit($this->input->post('iddokter'));
		redirect(base_url().'dokter');
	}
	public function delete(){
		$this->dokter_m->delete($this->input->get('id'));
		redirect(base_url().'dokter');
	}

}
