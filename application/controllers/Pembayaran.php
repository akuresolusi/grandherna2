<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pembayaran_m');
		$this->load->model('detail_m');
		$this->load->model('proses_m');
	}

	public function index(){

	}

	public function page_pembayaran(){
		$data['list_reg'] = $this->pembayaran_m->list_reg_selesai();
		$data['isi'] = "pembayaran/page-pembayaran";
		$data['title'] = 'Daftar Pembayaran';
		$this->load->view('layout',$data);
	}

	public function cek_tagihan($reg){
		$tindakan = $this->proses_m->list_reg_tindakan($this->input->get('reg'));
		$obat = $this->pembayaran_m->list_reg_obat($this->input->get('reg'));
		$lainya = $this->pembayaran_m->list_biaya_lainya($this->input->get('reg'));
		$lab = $this->proses_m->list_reg_lab_items($this->input->get('reg'));
		$radio = $this->proses_m->list_reg_radio_items($this->input->get('reg'));
		$ttindakan = 0;
		$tobat = 0;
		$tlainya = 0;
		$tlab = 0;
		$tradio	= 0;
		foreach ($tindakan as $value) {
			$ttindakan = ($value['tarif'] * $value['qty']) + $ttindakan;
		}
		foreach ($lainya as $value) {
			$tlainya = $value['tarif'] + $tlainya;
		}
		foreach ($obat as $value) {
			$tobat = ($value['harga'] * $value['qty']) + $tobat;
		}
		foreach ($lab as $value) {
			$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
			$tlab = $periksalab['tarif'] + $tlab;
		}
		foreach ($radio as $value) {
			$periksaradio = $this->detail_m->detail_periksaradio($value['idperiksa']);
			$tradio = $periksaradio['tarif']  + $tradio;
		}
		return $gtotal = $ttindakan + $tlainya + $tobat + $tlab + $tradio;
	}

	public function detail_pembayaran(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_reg_tindakan'] = $this->proses_m->list_reg_tindakan($this->input->get('reg'));
		$data['list_reg_obat'] = $this->pembayaran_m->list_reg_obat($this->input->get('reg'));
		$data['biaya_lainya'] = $this->pembayaran_m->list_biaya_lainya($this->input->get('reg'));
		$data['tagihan'] = $this->cek_tagihan($this->input->get('reg'));
		$data['pembayaran'] = $this->detail_m->detail_pembayaran($this->input->get('reg'));
		$data['list_reg_lab_items'] = $this->proses_m->list_reg_lab_items($this->input->get('reg'));
		$data['list_reg_radio_items'] = $this->proses_m->list_reg_radio_items($this->input->get('reg'));
		$data['isi'] = "pembayaran/detail-pembayaran";
		$data['title'] = 'Detail Pembayaran';
		$this->load->view('layout',$data);
	}

	public function lunasi_pembayaran(){
		$this->pembayaran_m->input_pembayaran();
		$this->pembayaran_m->update_status_bayar($this->input->get('reg'));
		redirect(base_url('pembayaran/detail_pembayaran?reg='.$this->input->get('reg')));
	}

	public function riwayat_pembayaran(){
		$data['list_reg'] = $this->pembayaran_m->list_reg_selesai_bayar();
		$data['isi'] = "pembayaran/page-pembayaran-selesai";
		$data['title'] = 'Daftar Riwayat Pembayaran';
		$this->load->view('layout',$data);
	}

	public function cetak_pembayaran(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['list_reg_tindakan'] = $this->proses_m->list_reg_tindakan($this->input->get('reg'));
		$data['list_reg_obat'] = $this->pembayaran_m->list_reg_obat($this->input->get('reg'));
		$data['biaya_lainya'] = $this->pembayaran_m->list_biaya_lainya($this->input->get('reg'));
		$data['tagihan'] = $this->cek_tagihan($this->input->get('reg'));
		$data['biaya_lab'] = $this->proses_m->list_reg_lab_items($this->input->get('reg'));
		$data['biaya_radio'] = $this->proses_m->list_reg_radio_items($this->input->get('reg'));
		$data['pembayaran'] = $this->detail_m->detail_pembayaran($this->input->get('reg'));
		$this->load->view('laporan/cetak-pembayaran',$data);
	}

	public function tambah_lainya(){
		$this->pembayaran_m->tambah_lainya();
		redirect(base_url('pembayaran/detail_pembayaran?reg='.$this->input->get('reg')));
	}

	public function hapus_lainya(){
		$this->pembayaran_m->hapus_lainya($this->input->get('id'));
		redirect(base_url('pembayaran/detail_pembayaran?reg='.$this->input->get('reg')));
	}


}