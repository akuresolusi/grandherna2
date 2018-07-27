<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_dokter(){
		$this->db->order_by('id','DESC');
		return $this->db->get('dokter')->result_array();
	}

	public function list_poli(){
		$this->db->where('status','1');
		$this->db->order_by('id','DESC');
		return $this->db->get('poliklinik')->result_array();	
	}

	public function registrasi(){
		$data = array(
						'noreg' => date('Ymd').date('His'),
						'norm' => $this->input->post('norm'),
						'namap' => $this->input->post('namap'),
						'hubunganp' => $this->input->post('hubunganp'),
						'telpp' => $this->input->post('nohp'),
						'alamatp' => $this->input->post('alamatp'),
						'caramasuk' => $this->input->post('caramasuk'),
						'tanggal' => $this->input->post('tanggal'),
						'jam' => $this->input->post('jam'),
						'poli' => $this->input->post('poli'),
						'kunjungan' => $this->input->post('kunjungan'),
						'dokter' => $this->input->post('dokter'),
						'carabayar' => $this->input->post('carabayar'),
						'keterangan' => $this->input->post('keterangan'),
						'status' => 'Antrian'
					);
		$this->db->insert('registrasi',$data);
		return;
	}

	public function reg_inap_pasien($rm){
		$this->db->where('norm',$rm);
		return $this->db->get('registrasi')->result_array();
	}


}