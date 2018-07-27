<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_pembayaran($tanggal){
		$this->db->where('tanggal', $tanggal);
		return $this->db->get('pembayaran')->result_array();
	}

	public function list_obat(){
		$this->db->order_by('id','DESC');
		return $this->db->get('obat')->result_array();
	}


}