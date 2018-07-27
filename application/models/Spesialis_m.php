<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesialis_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('spesialis'=> $this->input->post('spesialis'),
					'status' => '1'
				);
		$this->db->insert('spesialis',$data);
		return;
	}

	public function list_spesialis(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('spesialis')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('spesialis',$data);
		return;
	}

	public function edit(){
		$data = array('spesialis' => $this->input->post('spesialis'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('spesialis',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('spesialis',$data);
		return;
	}

	public function detail_spesialis($id){
		$this->db->where('id',$id);
		return $this->db->get('spesialis')->row_array();
	}

}