<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obatpasien_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_obat_pasien(){
		$this->db->where('statusbayar !=','1');
		return $this->db->get('registrasi')->result_array();
	}
	

	public function input_obat(){
		$data = array('noreg' => $this->input->get('reg'),
						'idobat' => $this->input->post('obat'),
						'harga' => $this->input->post('harga'),
						'qty' => $this->input->post('qty')
				);
		$this->db->insert('reg_obat',$data);
		return;
	}

	public function list_reg_obat($reg){
		$this->db->where('noreg',$reg);
		return $this->db->get('reg_obat')->result_array();
	}

	public function hapus_obat($id){
		$this->db->where('id',$id);
		$this->db->delete('reg_obat');
		return;
	}

	public function data_obat(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('nama',$like);
		}
		// $this->db->where('stok !=','0');
		$this->db->limit(15);
		return $this->db->get('obat')->result_array();
	}

}