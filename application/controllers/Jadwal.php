<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}
	public function index(){
		$data['isi'] =  "jadwalpraktek/page-jadwal";
		$data['title'] = 'Jadwal Praktek Dokter';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] =  "jadwalpraktek/tambah-jadwal";
		$data['title'] = 'Tambah Jadwal';
		$this->load->view('layout',$data);	
	}

}
