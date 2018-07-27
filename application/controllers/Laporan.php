<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('detail_m');
		$this->load->model('poli_m');
		$this->load->model('laporan_m');
		$this->load->model('proses_m');
		$this->load->model('pembayaran_m');	
		$this->load->model('obat_m');		
	}

	public function index(){
		$data['isi'] = "laporan/page-laporan";
		$data['title'] = 'Daftar Laporan';
		$this->load->view('layout',$data);
	}

	public function cetak_rawat_jalan(){
		$data['list_group_poli'] = $this->poli_m->list_daftar_ralan_group_poli(); 
		$this->load->view('laporan/laporan-rawatjalan',$data);
	}

	public function cetak_rawat_inap(){
		$data['list_group_poli'] = $this->poli_m->list_daftar_ranap_group_poli(); 
		$this->load->view('laporan/laporan-rawatinap',$data);
	}

	public function cetak_pendapatan_harian(){
		$tanggal = $this->input->post('tanggal');
		$data['pembayaran'] = $this->laporan_m->list_pembayaran($tanggal);
		$this->load->view('laporan/laporan-pendapatan-harian', $data);
	}

	public function cetak_data_obat(){
		$data['obat'] = $this->obat_m->list_obat();
		$this->load->view('laporan/laporan-obat', $data);
	}

}
