<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriruangan_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('kategoriruangan'=> $this->input->post('kategoriruangan'),
					'status' => '1'
				);
		$this->db->insert('kategoriruangan',$data);
		return;
	}

	public function list_kategoriruangan(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('kategoriruangan')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('kategoriruangan',$data);
		return;
	}

	public function edit(){
		$data = array('kategoriruangan' => $this->input->post('kategoriruangan'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('kategoriruangan',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('kategoriruangan',$data);
		return;
	}

}