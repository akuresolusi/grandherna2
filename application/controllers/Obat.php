<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('obat_m');
		
	}
	public function index(){
		$data['list'] = $this->obat_m->list_obat();
		$data['listKategori'] = $this->obat_m->list_kategori_obat();
		$data['listSatuan'] = $this->obat_m->list_satuan_obat();

		$data['isi'] =  "obat/page-obat";
		$data['title'] = 'Data Obat Dan Alkes';
		$this->load->view('layout',$data);
	}
	public function proses_tambah(){
		$this->obat_m->insert();
		redirect(base_url('obat'));
	}
	public function proses_edit(){
		$this->obat_m->edit();
		redirect(base_url('obat'));
	}

	public function proses_hapus(){
		$this->obat_m->hapus($this->input->get('id'));
		redirect(base_url('obat'));
	}

	public function tambah(){
		$data['isi'] =  "obat/tambah-obat";
		$data['title'] = 'Tambah Obat';
		$this->load->view('layout',$data);	
	}

	public function getData($id){
		$data= $this->obat_m->getdata($id);
		echo json_encode($data);
	}



}
