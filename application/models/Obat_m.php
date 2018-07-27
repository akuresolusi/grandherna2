<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array(	'nama'=> $this->input->post('nama'),
						'jenisobat'=> $this->input->post('kategori'),
						'satuan'=> $this->input->post('satuan'),
						'hargajual'=> $this->input->post('hargajual'),
						'expire'=> $this->input->post('expire'),
						'aturanpakai'=> $this->input->post('aturanpakai'),
						'status'=> '1'
				);
		$this->db->insert('obat',$data);
		return;
	}

	public function list_obat(){
		$this->db->select('*');
		$this->db->select("obat.id AS 'idobat'");
		$this->db->from('obat');
		$this->db->join('kategori', 'kategori.id = obat.jenisobat');
		$this->db->join('satuan', 'satuan.id = obat.satuan');

		$this->db->where('obat.status','1');
		return $this->db->get()->result_array();

	}
	public function list_kategori_obat(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('kategori')->result_array();
	}
	public function list_satuan_obat(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('satuan')->result_array();
	}

	public function getdata($id){
		$this->db->where('id',$id);
		return $this->db->get('obat')->result_array();	
	}

	public function hapus($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('obat',$data);
		return;
	}

	public function edit(){
		$data = array('nama'=> $this->input->post('nama'),
					'jenisobat'=> $this->input->post('kategori'),
					'satuan'=> $this->input->post('satuan'),
					'hargajual' => $this->input->post('hargajual'),
					'expire'=> $this->input->post('expire'),
					'aturanpakai'=> $this->input->post('aturanpakai')
				);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('obat',$data);
		return;
	}

}