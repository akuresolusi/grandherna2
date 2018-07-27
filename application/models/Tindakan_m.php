<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	// GOLONGAN
	public function insert_golongan(){
		$data = array('golongan'=> $this->input->post('golongan'),
				);
		$this->db->insert('tindakan_golongan',$data);
		return;
	}

	public function list_golongan(){
		$this->db->order_by('id','DESC');
		return $this->db->get('tindakan_golongan')->result_array();
	}


	public function edit_golongan(){
		$data = array('golongan' => $this->input->post('golongan'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('tindakan_golongan',$data);
		return;
	}

	public function hapus_golongan($id){
		$this->db->where('id',$id);
		$this->db->delete('tindakan_golongan');
		return;
	}
	// END GOLONGAN

	// TINDAKAN
	public function insert_tindakan(){
		$data = array('tindakan'=> $this->input->post('tindakan'),
					'satuan'=> $this->input->post('satuan'),
					'idgolongan'=> $this->input->post('idgolongan'),
					'tarif'=> $this->input->post('tarif'),
					'keterangan'=> $this->input->post('keterangan'),
					'status' => '1'
				);
		$this->db->insert('tindakan',$data);
		return;
	}

	public function list_tindakan(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('tindakan',$like);
			$this->db->or_like('satuan',$like);
			$this->db->or_like('golongan',$like);
			$this->db->or_like('tarif',$like);
			$this->db->or_like('keterangan',$like);
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		$this->db->where('status','1');
		return $this->db->get('tindakan')->result_array();
	}

	public function hapus_tindakan($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tindakan',$data);
		return;
	}

	public function edit_tindakan(){
		$data = array('tindakan'=> $this->input->post('tindakan'),
					'satuan'=> $this->input->post('satuan'),
					'idgolongan'=> $this->input->post('idgolongan'),
					'tarif'=> $this->input->post('tarif'),
					'keterangan'=> $this->input->post('keterangan'),
					'status' => '1'
				);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('tindakan',$data);
		return;
	}

	public function list_tindakan_golongan(){
		return $this->db->get('tindakan_golongan')->result_array();
	}
	// END TINDAKAN

}