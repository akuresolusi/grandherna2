<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('poli_m');
		$this->load->model('detail_m');
		$this->load->model('proses_m');
	}

	public function index(){
		$data['list_reg'] = $this->poli_m->list_reg('Antrian');
		$data['isi'] = "poli/page-poli";
		$data['title'] = 'Antrian Periksa';
		$this->load->view('layout',$data);
	}

	public function rawatinap(){
		$data['list_reg'] = $this->poli_m->list_ranap(); 
		$data['isi'] = "poli/page-poli";
		$data['title'] = 'Pasien Rawat Inap';
		$this->load->view('layout',$data);
	}


	public function daftar_harian(){
		$data['list_reg'] = $this->poli_m->list_daftar(); 
		$data['isi'] = "poli/page-daftar";
		$data['title'] = 'Daftar Registrasi Harian';
		$this->load->view('layout',$data);
	}

	public function daftar_harian_selesai(){
		$data['list_reg'] = $this->poli_m->list_daftar_selesai(); 
		$data['isi'] = "poli/page-daftar-selesai";
		$data['title'] = 'Daftar Registrasi Harian Selesai';
		$this->load->view('layout',$data);
	}

	public function hapus_registrasi(){
		$this->poli_m->hapus_registrasi($this->input->get('noreg'));
		redirect(base_url('poli/daftar_harian'));
	}

	public function detail_registrasi(){
		
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_reg_tindakan'] = $this->proses_m->list_reg_tindakan($this->input->get('reg'));
		$data['list_reg_diagnosa'] = $this->proses_m->list_reg_diagnosa($this->input->get('reg'));
		$data['list_reg_lab_items'] = $this->proses_m->list_reg_lab_items($this->input->get('reg'));
		$data['list_reg_radio_items'] = $this->proses_m->list_reg_radio_items($this->input->get('reg'));
		$data['dokter'] = $this->detail_m->detail_dokter($data['reg']['dokter']);
		$data['isi'] = "poli/view-reg";
		$data['title'] = 'Detail REGISTRASI HARIAN';
		$this->load->view('layout',$data);
	}

	public function cetak_detail_registrasi(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_reg_tindakan'] = $this->proses_m->list_reg_tindakan($this->input->get('reg'));
		$data['list_reg_diagnosa'] = $this->proses_m->list_reg_diagnosa($this->input->get('reg'));
		$data['list_reg_lab_items'] = $this->proses_m->list_reg_lab_items($this->input->get('reg'));
		$data['list_reg_radio_items'] = $this->proses_m->list_reg_radio_items($this->input->get('reg'));
		$data['dokter'] = $this->detail_m->detail_dokter($data['reg']['dokter']);
		$this->load->view('laporan/laporan-detail-registrasi',$data);
	}

}
