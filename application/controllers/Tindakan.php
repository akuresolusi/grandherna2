<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('tindakan_m');
		$this->load->model('detail_m');
			
	}

	public function index(){
	}

	// TINDAKAN GOLONGAN
	public function page_golongan(){
		$data['list'] = $this->tindakan_m->list_golongan();
		$data['isi'] =  "tindakan/page-golongan";
		$data['title'] = 'Daftar Tindakan Golongan';
		$this->load->view('layout',$data);
	}
	
	public function tambah_golongan(){
		$data['isi'] =  "tindakan/tambah-golongan";
		$data['title'] = 'golongan tindakan';
		$this->load->view('layout',$data);
	}

	public function proses_tambah_golongan(){
		$this->tindakan_m->insert_golongan();
		redirect(base_url('tindakan/page_golongan'));
	}
	public function proses_hapus_golongan(){
		$this->tindakan_m->hapus_golongan($this->input->get('id'));
		redirect(base_url('tindakan/page_golongan'));
	}

	public function proses_edit_golongan(){
		$this->tindakan_m->edit_golongan();
		redirect(base_url('tindakan/page_golongan'));
	}
	// END TINDAKAN GOLONGAN

	// DAFTAR TINDAKAN
	public function page_tindakan(){
		$data['list'] = $this->tindakan_m->list_tindakan();
		$data['list_tindakan_golongan'] = $this->tindakan_m->list_tindakan_golongan();
		$data['isi'] =  "tindakan/page-tindakan";
		$data['title'] = 'Daftar Tindakan';
		$this->load->view('layout',$data);
	}
	public function proses_tambah_tindakan(){
		$this->tindakan_m->insert_tindakan();
		redirect(base_url('tindakan/page_tindakan'));
	}

	public function proses_edit_tindakan(){
		$this->tindakan_m->edit_tindakan();
		redirect(base_url('tindakan/page_tindakan'));
	}

	public function proses_hapus_tindakan(){
		$this->tindakan_m->hapus_tindakan($this->input->get('id'));
		redirect(base_url('tindakan/page_tindakan'));
	}
	// END DAFTAR TINDAKAN
}
