<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ruanginap extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}
	public function index(){
		$data['isi'] =  "ruanginap/page-ruanginap";
		$data['title'] = 'Data Ruang Inap';
		$this->load->view('layout',$data);
	}
	public function tambah(){
		$data['isi'] =  "ruanginap/tambah-ruanginap";
		$data['title'] = 'Tambah Data Ruangan';
		$this->load->view('layout',$data);	
	}

}
