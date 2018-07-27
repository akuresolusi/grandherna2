<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('bidang'=> $this->input->post('bidang'),
					'status' => '1'
				);
		$this->db->insert('bidang',$data);
		return;
	}

	public function list_bidang(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('bidang')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('bidang',$data);
		return;
	}

	public function edit(){
		$data = array('bidang' => $this->input->post('bidang'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('bidang',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('bidang',$data);
		return;
	}

}