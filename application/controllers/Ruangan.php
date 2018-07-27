<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ruangan_m');
		$this->load->model('detail_m');

	}
	public function index(){
		$data['list'] = $this->ruangan_m->list_ruangan();
		$data['isi'] =  "ruangan/page-ruangan";
		$data['title'] = 'Daftar Ruangan';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list_kategori'] = $this->ruangan_m->list_kategori();
		$data['list_kelas'] = $this->ruangan_m->list_kelas();
		$data['isi'] =  "ruangan/tambah-ruangan";
		$data['title'] = 'Tambah Ruangan';
		$this->load->view('layout',$data);	
	}

	public function edit(){
		$data['list_kategori'] = $this->ruangan_m->list_kategori();
		$data['list_kelas'] = $this->ruangan_m->list_kelas();
		$data['isi'] =  "Ruangan/edit-ruangan";
		$data['title'] = 'Perbarui Ruangan';
		$data['detail'] = $this->detail_m->detail_ruangan($this->input->get('id'));
		$this->load->view('layout',$data);
	}

	public function proses_tambah(){
		$this->ruangan_m->insert();
		redirect(base_url('ruangan'));
	}

	public function proses_edit(){
		$this->ruangan_m->edit($this->input->get('id'));
		redirect(base_url('ruangan'));
	}

	public function proses_hapus(){
		$this->ruangan_m->delete($this->input->get('id'));
		redirect(base_url('ruangan'));
	}

}
