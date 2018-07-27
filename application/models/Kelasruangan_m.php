<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelasruangan_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('kelasruangan'=> $this->input->post('kelasruangan'),
					'status' => '1'
				);
		$this->db->insert('kelasruangan',$data);
		return;
	}

	public function list_kelasruangan(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('kelasruangan')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('kelasruangan',$data);
		return;
	}

	public function edit(){
		$data = array('kelasruangan' => $this->input->post('kelasruangan'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('kelasruangan',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('kelasruangan',$data);
		return;
	}

}