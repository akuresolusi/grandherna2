<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('poliklinik'=> $this->input->post('poliklinik'),
					'status' => '1'
				);
		$this->db->insert('poliklinik',$data);
		return;
	}

	public function list_poliklinik(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('poliklinik')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('poliklinik',$data);
		return;
	}

	public function edit(){
		$data = array('poliklinik' => $this->input->post('poliklinik'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('poliklinik',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('poliklinik',$data);
		return;
	}

}