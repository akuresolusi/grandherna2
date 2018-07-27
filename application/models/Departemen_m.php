<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('departemen'=> $this->input->post('departemen'),
					'status' => '1'
				);
		$this->db->insert('departemen',$data);
		return;
	}

	public function list_departemen(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('departemen')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('departemen',$data);
		return;
	}

	public function edit(){
		$data = array('departemen' => $this->input->post('departemen'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('departemen',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('departemen',$data);
		return;
	}

}