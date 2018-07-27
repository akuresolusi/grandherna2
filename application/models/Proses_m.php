<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function data_diagnosa(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('diagnosa',$like);
			$this->db->or_like('kode',$like);
		}
		$this->db->limit(10);
		return $this->db->get('diagnosa')->result_array();
	}

	public function data_tindakan(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('tindakan',$like);
		}
		$this->db->limit(10);
		return $this->db->get('tindakan')->result_array();
	}

	public function list_reg_diagnosa($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('reg_diagnosa')->result_array();
	}

	public function list_reg_dokter($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('reg_dokter')->result_array();
	}

	public function list_reg_tindakan($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('reg_tindakan')->result_array();
	}

	public function list_reg_lab_items($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('reg_lab_items')->result_array();
	}

	public function list_reg_radio_items($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('reg_radio_items')->result_array();
	}

	public function list_dokter(){
		$this->db->where('status','1');
		return $this->db->get('dokter')->result_array();
	}	

	public function list_paramedis(){
		$this->db->where('status','1');
		return $this->db->get('paramedis')->result_array();
	}	
	
	public function tambah_diagnosa(){
		$data = array('noreg'=> $this->input->get('noreg'),
						'diagnosa'=>$this->input->post('iddiagnosa'),
						'tanggal'=>$this->input->post('tanggal'),
						'jam'=> date('H:i:s'),
						'status'=>$this->input->post('status')
				);
		$this->db->insert('reg_diagnosa',$data);
		return;
	}

	public function hapus_diagnosa($id){
		$this->db->where('id', $id);
		$this->db->delete('reg_diagnosa');
		return;
	}

	public function tambah_dokter(){
		$data = array('noreg'=> $this->input->get('noreg'),
						'dokter'=>$this->input->post('dokter'),
						'kategori'=>$this->input->post('kategori'),
						'tanggal'=>date('Y-m-d'),
						'jam'=> date('H:i:s')
				);
		$this->db->insert('reg_dokter',$data);
		return;
	}

	public function hapus_dokter($id){
		$this->db->where('id', $id);
		$this->db->delete('reg_dokter');
		return;
	}


	public function tambah_tindakan(){
		$data = array('noreg'=> $this->input->get('noreg'),
						'tindakan'=>$this->input->post('tindakan'),
						'dokter'=>$this->input->post('dokter'),
						'paramedis'=>$this->input->post('perawat'),
						'tanggal'=>$this->input->post('tanggal'),
						'jam'=> date('H:i:s'),
						'tarif'=>$this->input->post('tarif'),
						'qty'=>$this->input->post('qty')
				);
		$this->db->insert('reg_tindakan',$data);
		return;
	}

	public function hapus_tindakan($id){
		$this->db->where('id', $id);
		$this->db->delete('reg_tindakan');
		return;
	}

	public function list_periksalab_kategori(){
		return $this->db->get('periksalab_kategori')->result_array();
	}

	public function list_periksaradio_kategori(){
		return $this->db->get('periksaradio_kategori')->result_array();
	}

	public function list_periksalab($id){
		$this->db->where('idkategori',$id);
		return $this->db->get('periksalab')->result_array();
	}

	public function list_periksaradio($id){
		$this->db->where('idkategori',$id);
		return $this->db->get('periksaradio')->result_array();
	}

	public function hapus_reg_lab_items($id){
		$this->db->where('id',$id);
		$this->db->delete('reg_lab_items');
		return;
	}

	public function tambah_reg_lab(){
		$data = array('noreg'=>$this->input->get('noreg'),
					  'tanggal'=>$this->input->post('tanggal')
				);
		$this->db->insert('reg_lab',$data);
		return;
	}

	public function tambah_item_periksalab($id){
		$data = array('noreg'=>$this->input->get('noreg'),
					  'idperiksa'=>$id
				);
		$this->db->insert('reg_lab_items',$data);
		return;
	}

	public function list_ruangan(){
		return $this->db->get('ruangan')->result_array();
	}


	public function hapus_reg_radio_items($id){
		$this->db->where('id',$id);
		$this->db->delete('reg_radio_items');
		return;
	}

	
	public function tambah_reg_radio(){
		$data = array('noreg'=>$this->input->get('noreg'),
					  'tanggal'=>$this->input->post('tanggal')
				);
		$this->db->insert('reg_radio',$data);
		return;
	}

	public function tambah_item_periksaradio($id){
		$data = array('noreg'=>$this->input->get('noreg'),
					  'idperiksa'=>$id
				);
		$this->db->insert('reg_radio_items',$data);
		return;
	}

	public function update_ranap($reg){
		$data = array(	'rawatinap'=> "1",
						'idruangan'=>$this->input->post('ruangan')
				);
		$this->db->where('noreg', $reg);
		$this->db->update('registrasi',$data);
		return;
	}

	public function selesai($reg){
		$data = array(	'status'=> "Selesai",
						'tanggalkeluar'=> date('Y-m-d'),
						'jamkeluar'=> date('H:i:s')
				);
		$this->db->where('noreg', $reg);
		$this->db->update('registrasi',$data);
		return;
	}

	public function cek_reg_lab($reg){
		$this->db->where('noreg', $reg);
		return $this->db->get('reg_lab')->num_rows();
	}

	public function cek_reg_radio($reg){
		$this->db->where('noreg', $reg);
		return $this->db->get('reg_radio')->num_rows();
	}


}