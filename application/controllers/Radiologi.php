<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radiologi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('radio_m');
		$this->load->model('detail_m');
	}

	public function index(){
		
	}

	public function antrian_periksa(){
		$data['list'] = $this->radio_m->list_reg_radio();
		$data['isi'] =  "radiologi/page-antrian";
		$data['title'] = 'Daftar Antrian Radiologi';
		$this->load->view('layout',$data);
	}

	public function memproses_antrian(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_items'] = $this->radio_m->list_items_periksa($this->input->get('reg'));
		$data['reg_radio'] = $this->detail_m->detail_reg_radio($this->input->get('reg'));
		$data['isi'] =  "radiologi/proses-antrian";
		$data['title'] = 'Daftar Antrian Radiologi';
		$this->load->view('layout',$data);
	}

	public function simpan_proses_radio(){
		$this->radio_m->selesai_proses_radio();
		redirect(base_url('radiologi/antrian_periksa'));
	}
	

	public function hasil_periksa(){
		$data['list'] = $this->radio_m->list_reg_radio_selesai();
		$data['isi'] =  "radiologi/page-hasil";
		$data['title'] = 'Daftar Hasil Pemeriksaan';
		$this->load->view('layout',$data);
	}

	public function view_hasil_periksa(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_items'] = $this->radio_m->list_items_periksa($this->input->get('reg'));
		$data['reg_radio'] = $this->detail_m->detail_reg_radio($this->input->get('reg'));
		$data['isi'] =  "radiologi/view-hasil";
		$data['title'] = 'Lihat Hasil Pemeriksaan';
		$this->load->view('layout',$data);
	}

	function hitung_umur($tanggal_lahir) {
	    list($year,$month,$day) = explode("-",$tanggal_lahir);
	    $year_diff  = date("Y") - $year;
	    $month_diff = date("m") - $month;
	    $day_diff   = date("d") - $day;
	    if ($month_diff < 0) $year_diff--;
	        elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
	    return $year_diff;
	}

	public function cetak_hasil_radio(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_items'] = $this->radio_m->list_items_periksa($this->input->get('reg'));
		$data['reg_radio'] = $this->detail_m->detail_reg_radio($this->input->get('reg'));
		$data['umur'] = $this->hitung_umur($data['pasien']['tanggallahir']);
		$this->load->view('laporan/laporan-hasilradio', $data);
	}





	// KATEGORI RADIOLOGI
	public function kategori_pemerikasaan(){
		$data['list'] = $this->radio_m->list_kategori();
		$data['isi'] =  "radiologi/page-kategori";
		$data['title'] = 'Daftar Kategori Pemeriksaan';
		$this->load->view('layout',$data);
	}

	public function tambah_kategori(){
		$data['isi'] =  "radiologi/tambah-kategori";
		$data['title'] = 'Kategori Radiologi';
		$this->load->view('layout',$data);
	}

	public function proses_tambah_kategori(){
		$this->radio_m->insert_kategori();
		redirect(base_url('radiologi/kategori_pemerikasaan'));
	}
	public function proses_hapus_kategori(){
		$this->radio_m->hapus_kategori($this->input->get('id'));
		redirect(base_url('radiologi/kategori_pemerikasaan'));
	}

	public function proses_edit_kategori(){
		$this->radio_m->edit_kategori();
		redirect(base_url('radiologi/kategori_pemerikasaan'));
	}
	// END KATEGORI RADIOLOGI

	// DAFTAR PEMERIKSAAN
	public function daftar_pemerikasaan(){
		$data['list'] = $this->radio_m->list_pemeriksaan();
		$data['list_kategori_radiologi'] = $this->radio_m->list_kategori_radiologi();
		$data['isi'] =  "radiologi/page-pemeriksaan";
		$data['title'] = 'Daftar Pemeriksaan';
		$this->load->view('layout',$data);
	}
	
	public function proses_tambah_pemeriksaan(){
		$this->radio_m->insert_pemeriksaan();
		redirect(base_url('radiologi/daftar_pemerikasaan'));
	}

	public function proses_edit_pemeriksaan(){
		$this->radio_m->edit_pemeriksaan();
		redirect(base_url('radiologi/daftar_pemerikasaan'));
	}

	public function proses_hapus_pemeriksaan(){
		$this->radio_m->hapus_pemeriksaan($this->input->get('id'));
		redirect(base_url('radiologi/daftar_pemerikasaan'));
	}
	// END DAFTAR PEMERIKSAAN

	




}
