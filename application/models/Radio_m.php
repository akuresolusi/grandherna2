<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radio_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_reg_radio(){
		$this->db->where('status', '');
		$this->db->limit(100);
		return $this->db->get('reg_radio')->result_array();
	}


	public function list_items_periksa($noreg){
		$this->db->where('noreg', $noreg);
		return $this->db->get('reg_radio_items')->result_array();
	}


	public function selesai_proses_radio(){
		$data = array(	'kesimpulan'=>$this->input->post('ket'),
						'tanggalselesai'=>$this->input->post('tanggal'),
						'jamselesai'=>$this->input->post('jam'),
						'status'=>'Selesai'
				);
		$this->db->where('noreg', $this->input->get('noreg'));
		$this->db->update('reg_radio',$data);
	}

	public function list_reg_radio_selesai(){
		$this->db->where('status', 'Selesai');
		$this->db->limit(100);
		return $this->db->get('reg_radio')->result_array();
	}




	
	// PEMERIKSAAN
	public function insert_pemeriksaan(){
		$data = array('nama'=> $this->input->post('nama'),
					'idkategori'=> $this->input->post('idkategori'),
					'status' => '1',
					'tarif' => $this->input->post('tarif')
				);
		$this->db->insert('periksaradio',$data);
		return;
	}

	public function list_pemeriksaan(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('kategori',$like);
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		$this->db->where('status','1');
		return $this->db->get('periksaradio')->result_array();
	}

	public function hapus_pemeriksaan($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('periksaradio',$data);
		return;
	}

	public function edit_pemeriksaan(){
		$data = array('nama'=> $this->input->post('nama'),
					'idkategori'=> $this->input->post('idkategori'),
					'status'=>'1',
					'tarif' => $this->input->post('tarif')
				);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('periksaradio',$data);
		return;
	}

	public function list_kategori_radiologi(){
		$this->db->where('status','1');
		return $this->db->get('periksaradio_kategori')->result_array();
	}
	// END PEMERIKSAAN

	// KATEGORI RADIOLOGI
	public function insert_kategori(){
		$data = array('kategori'=> $this->input->post('kategori'),
					'status' => '1'
				);
		$this->db->insert('periksaradio_kategori',$data);
		return;
	}

	public function list_kategori(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('periksaradio_kategori')->result_array();
	}


	public function edit_kategori(){
		$data = array('kategori' => $this->input->post('kategori'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('periksaradio_kategori',$data);
		return;
	}

	public function hapus_kategori($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('periksaradio_kategori',$data);
		return;
	}
	// END RADIOLOGI

}