<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('gedung'=> $this->input->post('gedung'),
					'status' => '1'
				);
		$this->db->insert('gedung',$data);
		return;
	}

	public function list_gedung(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('gedung')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('gedung',$data);
		return;
	}

	public function edit(){
		$data = array('gedung' => $this->input->post('gedung'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('gedung',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('gedung',$data);
		return;
	}

}