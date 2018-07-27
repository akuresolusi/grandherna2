<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('jabatan'=> $this->input->post('jabatan'),
					'status' => '1'
				);
		$this->db->insert('jabatan',$data);
		return;
	}

	public function list_jabatan(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('jabatan')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('jabatan',$data);
		return;
	}

	public function edit(){
		$data = array('jabatan' => $this->input->post('jabatan'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('jabatan',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('jabatan',$data);
		return;
	}

}