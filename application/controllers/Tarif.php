<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
	}

	public function tarif_lab(){
		$data['isi'] =  "tarif/page-lab";
		$data['title'] = 'Daftar Tarif Laboratorium';
		$this->load->view('layout',$data);
	}

	public function tarif_radio(){
		$data['isi'] =  "tarif/page-radio";
		$data['title'] = 'Daftar Tarif Radiologi';
		$this->load->view('layout',$data);
	}

}