<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('satuan'=> $this->input->post('satuan'),
					'status' => '1'
				);
		$this->db->insert('satuan',$data);
		return;
	}

	public function list_satuan(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('satuan')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('satuan',$data);
		return;
	}

	public function edit(){
		$data = array('satuan' => $this->input->post('satuan'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('satuan',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('satuan',$data);
		return;
	}

}