<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_reg_selesai(){
		$this->db->where('statusbayar','');
		$this->db->where('status','Selesai');
		return $this->db->get('registrasi')->result_array();
	}

	public function list_reg_selesai_bayar(){
		$this->db->where('statusbayar','1');
		$this->db->where('status','Selesai');
		return $this->db->get('registrasi')->result_array();
	}

	public function list_reg_obat($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('reg_obat')->result_array();
	}

	public function list_biaya_lainya($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('pembayaran_lainya')->result_array();	
	}

	public function input_pembayaran(){
		$data = array(	'noreg'=>$this->input->get('reg'),
						'bayar'=>$this->input->post('bayar'),
						'kembalian'=>$this->input->post('kembali'),
						'tanggal' => date('Y-m-d')
				);
		$this->db->insert('pembayaran',$data);
		return;
	}

	public function update_status_bayar($reg){
		$data = array('statusbayar' => '1' );
		$this->db->where('noreg', $reg);
		$this->db->update('registrasi',$data);
		return;
	}

	public function tambah_lainya(){
		$data = array(	'noreg' => $this->input->get('reg'),
						'keterangan' => $this->input->post('keterangan'),
						'tarif' => $this->input->post('tarif')
				);
		$this->db->insert('pembayaran_lainya',$data);
		return;
	}

	public function hapus_lainya($id){
		$this->db->where('id',$id);
		$this->db->delete('pembayaran_lainya');
		return;
	}


}