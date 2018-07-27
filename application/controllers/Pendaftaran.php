<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pasien_m');
		$this->load->model('pendaftaran_m');
	}

	public function index(){
		$data['list_dokter']=$this->pendaftaran_m->list_dokter();
		$data['list_poli']=$this->pendaftaran_m->list_poli();
		$data['list'] = $this->pasien_m->list_pasien();
		$data['isi'] = "pendaftaran/form-pendaftaran";
		$data['title'] = 'Form Pendaftaran Poli/IGD';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['list'] = $this->pasien_m->list_pasien();
		$data['isi'] = "pendaftaran/form-pendaftaran";
		$data['title'] = 'Form Pendaftaran';
		$this->load->view('layout',$data);
	}

	public function registrasi(){
		if(empty($this->input->post('norm'))){
			redirect(base_url().'pendaftaran?msg=Pilih dahulu pasien sebelum diproses.&status=warning&judul=Proses Gagal!');
		}
		$this->pendaftaran_m->registrasi();
		redirect(base_url().'pendaftaran?msg=Pendaftaran Berhasil Dilakukan.&status=success&judul=Berhasil!');
	}


}
