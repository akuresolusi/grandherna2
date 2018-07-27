<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paramedis_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('nama'=> $this->input->post('nama'),
					'idspesialis'=> $this->input->post('idspesialis'),
					'telp'=> $this->input->post('telp'),
					'status' => '1'
				);
		$this->db->insert('paramedis',$data);
		return;
	}

	public function list_paramedis(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('spesialis',$like);
			$this->db->or_like('telp',$like);
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		$this->db->where('status','1');
		return $this->db->get('paramedis')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('paramedis',$data);
		return;
	}


	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('paramedis',$data);
		return;
	}

	public function edit(){
		$data = array('nama'=> $this->input->post('nama'),
					'idspesialis'=> $this->input->post('idspesialis'),
					'telp'=> $this->input->post('telp'),
					'status'=>'1'
				);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('paramedis',$data);
		return;
	}

	public function list_spesialis(){
		$this->db->where('status','1');
		return $this->db->get('spesialis')->result_array();
	}


}