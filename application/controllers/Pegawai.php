<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}
	public function index(){
		$data['isi'] =  "pegawai/page-pegawai";
		$data['title'] = 'Daftar Pegawai';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] =  "pegawai/tambah-pegawai";
		$data['title'] = 'Tambah Pegawai';
		$this->load->view('layout',$data);	
	}

}
