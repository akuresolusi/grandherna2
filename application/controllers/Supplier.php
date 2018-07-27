<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('supplier_m');

	}
	public function index(){
		$data['list'] = $this->supplier_m->list_supplier();
		$data['isi'] =  "supplier/page-supplier";
		$data['title'] = 'Data Supplier';
		$this->load->view('layout',$data);
	}
	public function proses_tambah(){
		$this->supplier_m->insert();
		redirect(base_url('supplier'));
	}
	public function proses_edit(){
		$this->supplier_m->edit();
		redirect(base_url('supplier'));
	}
	public function getData($id){
		$data= $this->supplier_m->getdata($id);
		echo json_encode($data);
	}
	public function proses_hapus(){
		$this->supplier_m->hapus($this->input->get('id'));
		redirect(base_url('supplier'));
	}
}
