<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function detail_dokter($id){
		$this->db->where('id',$id);
		return $this->db->get('dokter')->row_array();
	}

	public function detail_paramedis($id){
		$this->db->where('id',$id);
		return $this->db->get('paramedis')->row_array();
	}

	public function detail_spesialis($id){
		$this->db->where('id',$id);
		return $this->db->get('spesialis')->row_array();
	}

	public function detail_tindakan($id){
		$this->db->where('id',$id);
		return $this->db->get('tindakan')->row_array();
	}
	public function detail_tindakan_golongan($id){
		$this->db->where('id',$id);
		return $this->db->get('tindakan_golongan')->row_array();
	}

	public function detail_pasien($norm){
		$this->db->where('norm',$norm);
		return $this->db->get('pasien')->row_array();
	}

	public function detail_diagnosa($id){
		$this->db->where('id',$id);
		return $this->db->get('diagnosa')->row_array();
	}

	public function detail_poliklinik($id){
		$this->db->where('id',$id);
		return $this->db->get('poliklinik')->row_array();
	}

	public function detail_reg($noreg){
		$this->db->where('noreg',$noreg);
		return $this->db->get('registrasi')->row_array();	
	}

	public function detail_kelasruangan($id){
		$this->db->where('id',$id);
		return $this->db->get('kelasruangan')->row_array();
	}

	public function detail_kategoriruangan($id){
		$this->db->where('id',$id);
		return $this->db->get('kategoriruangan')->row_array();	
	}

	public function detail_periksalab($id){
		$this->db->where('id',$id);
		return $this->db->get('periksalab')->row_array();	
	}

	public function detail_periksalab_kategori($id){
		$this->db->where('id',$id);
		return $this->db->get('periksalab_kategori')->row_array();	
	}

	public function detail_periksaradio($id){
		$this->db->where('id',$id);
		return $this->db->get('periksaradio')->row_array();	
	}
	public function detail_periksaradio_kategori($id){
		$this->db->where('id',$id);
		return $this->db->get('periksaradio_kategori')->row_array();	
	}

	public function detail_ruangan($id){
		$this->db->where('id',$id);
		return $this->db->get('ruangan')->row_array();
	}

	public function detail_reg_lab($reg){
		$this->db->where('noreg', $reg);
		return $this->db->get('reg_lab')->row_array();
	}


	public function detail_reg_radio($reg){
		$this->db->where('noreg', $reg);
		return $this->db->get('reg_radio')->row_array();
	}

	public function detail_pembayaran($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('pembayaran')->row_array();
	}

	public function detail_obat($id){
		$this->db->where('id', $id);
		return $this->db->get('obat')->row_array();
	}

	public function detail_supplier($id){
		$this->db->where('id', $id);
		return $this->db->get('supplier')->row_array();
	}

}