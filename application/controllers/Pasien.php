<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pasien_m');

	}

	public function index(){
		$data['list'] = $this->pasien_m->list_pasien();
		$data['isi'] =  "pasien/page-pasien";
		$data['title'] = 'Daftar Pasien';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['isi'] =  "pasien/tambah-pasien";
		$data['title'] = 'Tambah Data Pasien';
		$jbaris = $this->pasien_m->jlh_baris() + 0;
		$b = substr("000000", strlen($jbaris)).$jbaris;
		$data['norm'] = substr($b, 0, 2).".".substr($b, 2, 2).".".substr($b, 4, 2);
		$this->load->view('layout',$data);	
	}

	public function tambah2(){
		$jbaris = $this->pasien_m->jlh_baris() + 0;
		$b = substr("000000", strlen($jbaris)).$jbaris;
		$data['norm'] = substr($b, 0, 2).".".substr($b, 2, 2).".".substr($b, 4, 2);
		$this->load->view('pasien/tambah-pasien2',$data);	
	}

	public function proses_tambah(){
		$this->pasien_m->insert();
		redirect(base_url().'pasien');
	}

	public function proses_tambah2(){
		$this->pasien_m->insert();
		echo "Data Pasien Berhasil Ditambahkan";
	}

	public function edit(){
		$data['isi'] =  "pasien/edit-pasien";
		$data['title'] = 'Perbarui Pasien';
		$data['norm'] = $this->input->get('norm');
		$data['detail'] = $this->pasien_m->detail_pasien($this->input->get('norm'));
		$this->load->view('layout',$data);
	}

	public function proses_edit(){
		$this->pasien_m->edit($this->input->post('norm'));
		redirect(base_url().'pasien');
	}

	public function delete(){
		$this->pasien_m->delete($this->input->get('norm'));
		redirect(base_url().'pasien');
	}

	public function view(){
		$data['list'] = $this->pasien_m->detail_pasien();
	}

	
}
