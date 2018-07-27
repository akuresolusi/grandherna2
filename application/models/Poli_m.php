<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function list_reg($status){
		$this->db->limit(100);
		$this->db->order_by('id','DESC');
		$this->db->where('rawatinap !=',"1");
		$this->db->where('status', $status);
		return $this->db->get('registrasi')->result_array();
	}

	public function list_ranap(){
		$this->db->where('rawatinap','1');
		$this->db->where('status','Antrian');
		$this->db->order_by('id','DESC');
		return $this->db->get('registrasi')->result_array();
	}

	public function list_daftar(){
		$this->db->order_by('id','DESC');
		return $this->db->get('registrasi')->result_array();
	}

	public function list_daftar_ralan_group_poli(){
		$tgldari = $this->input->post_get('tanggaldari');
		$tglsampai = $this->input->post_get('tanggalsampai');

		if(!empty($tgldari)){
			$this->db->where('tanggal >=', $tgldari);
		}
		if(!empty($tglsampai)){
			$this->db->where('tanggal <=', $tglsampai);
		}

		$this->db->order_by('id','DESC');
		$this->db->group_by('poli');
		$this->db->where('rawatinap !=', 1);
		return $this->db->get('registrasi')->result_array();
	}

	public function list_daftar_ranap_group_poli(){
		$tgldari = $this->input->post_get('tanggaldari');
		$tglsampai = $this->input->post_get('tanggalsampai');

		if(!empty($tgldari)){
			$this->db->where('tanggal >=', $tgldari);
		}
		if(!empty($tglsampai)){
			$this->db->where('tanggal <=', $tglsampai);
		}

		$this->db->order_by('id','DESC');
		$this->db->group_by('poli');
		$this->db->where('rawatinap', 1);
		return $this->db->get('registrasi')->result_array();
	}

	public function list_daftar_where_poli($poli){
		$this->db->order_by('id','DESC');
		$this->db->where('poli',$poli);
		return $this->db->get('registrasi')->result_array();
	}

	public function list_daftar_selesai(){
		$this->db->where('status','Selesai');
		$this->db->order_by('id','DESC');
		return $this->db->get('registrasi')->result_array();
	}

	public function hapus_registrasi($reg){
		$this->db->where('noreg', $reg);
		$this->db->delete('registrasi');
		return;
	}

	public function list_reg_diagnosa($reg){
		$this->db->where('noreg', $reg);
		return $this->db->get('reg_diagnosa')->result_array();
	}
	

}