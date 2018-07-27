<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laboratorium extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('lab_m');
		$this->load->model('detail_m');
			
	}

	public function index(){
	}

	public function antrian_periksa(){
		$data['list'] = $this->lab_m->list_reg_lab();
		$data['isi'] =  "laboratorium/page-antrian";
		$data['title'] = 'Daftar Antrian Laboratorium';
		$this->load->view('layout',$data);
	}

	public function memproses_antrian(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_items'] = $this->lab_m->list_items_periksa($this->input->get('reg'));
		$data['reg_lab'] = $this->detail_m->detail_reg_lab($this->input->get('reg'));
		$data['isi'] =  "laboratorium/proses-antrian";
		$data['title'] = 'Antrian Laboratorium';
		$this->load->view('layout',$data);
	}

	public function hasil_periksa(){
		$data['list'] = $this->lab_m->list_reg_lab_selesai();
		$data['isi'] =  "laboratorium/page-hasil";
		$data['title'] = 'Daftar Hasil Pemeriksaan';
		$this->load->view('layout',$data);
	}

	public function view_hasil(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_items'] = $this->lab_m->list_items_periksa($this->input->get('reg'));
		$data['reg_lab'] = $this->detail_m->detail_reg_lab($this->input->get('reg'));
		$data['isi'] =  "laboratorium/view-hasil";
		$data['title'] = 'Lihat Hasil Laboratorium';
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

	public function cetak_hasil_lab(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_items'] = $this->lab_m->list_items_periksa($this->input->get('reg'));
		$data['reg_lab'] = $this->detail_m->detail_reg_lab($this->input->get('reg'));
		$data['umur'] = $this->hitung_umur($data['pasien']['tanggallahir']);
		$this->load->view('laporan/laporan-hasillab', $data);
	}

	public function simpan_proses_lab(){
		$this->lab_m->insert_hasil_lab();
		$this->lab_m->selesai_proses_lab();
		redirect(base_url('laboratorium/antrian_periksa'));
	}


	// KATEGORI LABORATORIUM
	public function kategori_pemerikasaan(){
		$data['list'] = $this->lab_m->list_kategori();
		$data['isi'] =  "laboratorium/page-kategori";
		$data['title'] = 'Daftar Kategori Pemeriksaan';
		$this->load->view('layout',$data);
	}
	
	public function tambah_kategori(){
		$data['isi'] =  "laboratorium/tambah-kategori";
		$data['title'] = 'Kategori laboratorium';
		$this->load->view('layout',$data);
	}

	public function proses_tambah_kategori(){
		$this->lab_m->insert_kategori();
		redirect(base_url('laboratorium/kategori_pemerikasaan'));
	}
	public function proses_hapus_kategori(){
		$this->lab_m->hapus_kategori($this->input->get('id'));
		redirect(base_url('laboratorium/kategori_pemerikasaan'));
	}

	public function proses_edit_kategori(){
		$this->lab_m->edit_kategori();
		redirect(base_url('laboratorium/kategori_pemerikasaan'));
	}
	// END KATEGORI LABORATORIUM



	// DAFTAR PEMERIKSAAN
	public function daftar_pemerikasaan(){
		$data['list'] = $this->lab_m->list_pemeriksaan();
		$data['list_kategori_laboratorium'] = $this->lab_m->list_kategori_laboratorium();
		$data['isi'] =  "laboratorium/page-pemeriksaan";
		$data['title'] = 'Daftar Pemeriksaan';
		$this->load->view('layout',$data);
	}
	public function proses_tambah_pemeriksaan(){
		$this->lab_m->insert_pemeriksaan();
		redirect(base_url('laboratorium/daftar_pemerikasaan'));
	}

	public function proses_edit_pemeriksaan(){
		$this->lab_m->edit_pemeriksaan();
		redirect(base_url('laboratorium/daftar_pemerikasaan'));
	}

	public function proses_hapus_pemeriksaan(){
		$this->lab_m->hapus_pemeriksaan($this->input->get('id'));
		redirect(base_url('laboratorium/daftar_pemerikasaan'));
	}
	// END DAFTAR PEMERIKSAAN
	
	
}
