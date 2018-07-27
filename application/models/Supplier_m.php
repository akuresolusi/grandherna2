<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array(	'nama'=> $this->input->post('nama'),
						'alamat'=> $this->input->post('alamat'),
						'no_telp'=> $this->input->post('no_telp'),
						'status'=> '1'
				);
		$this->db->insert('supplier',$data);
		return;
	}

	public function list_supplier(){
		$this->db->where('status','1');
		$this->db->order_by('id','DESC');
		return $this->db->get('supplier')->result_array();
	}
	

	public function getdata($id){
		$this->db->where('id',$id);
		return $this->db->get('supplier')->result_array();	
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('supplier',$data);
		return;
	}

	public function edit(){
		$data = array('nama'=> $this->input->post('nama'),
					'alamat'=> $this->input->post('alamat'),
					'no_telp'=> $this->input->post('no_telp')
		);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('supplier',$data);
		return;
	}

}