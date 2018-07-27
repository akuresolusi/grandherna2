<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('kategori'=> $this->input->post('kategori'),
					'status' => '1'
				);
		$this->db->insert('kategori',$data);
		return;
	}

	public function list_kategori(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('kategori')->result_array();
	}

	public function delete($id){
		$data = array('status','0');
		$this->db->where('id',$id);
		$this->db->update('kategori',$data);
		return;
	}

	public function edit(){
		$data = array('kategori' => $this->input->post('kategori'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('kategori',$data);
		return;
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('kategori',$data);
		return;
	}

}