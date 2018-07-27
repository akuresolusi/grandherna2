<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function list_obat(){
		$this->db->order_by('id','DESC');
		return $this->db->get('obat')->result_array();
	}

	public function list_supplier(){
		$this->db->order_by('id','DESC');
		return $this->db->get('supplier')->result_array();
	}

	public function idbesarpembelian(){
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
		return @$this->db->get('pembelian')->row()->id;
	}

	public function data_barang(){
		if(!empty($this->input->post_get('like'))){
			$this->db->like('nama',$this->input->post_get('like'));
		}
		$this->db->limit(10);
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		$this->db->where('stok !=','0');
		return $this->db->get('obat')->result_array();
	}

	public function input_item(){
		$data = array('faktur'=>$this->input->post('faktur'),
						'idbarang'=>$this->input->post('idbarang'),
						'qty'=>$this->input->post('qty'),
						'harga'=>$this->input->post('harga')
				);
		$this->db->insert('pembelian_items',$data);
		return;
	}

	public function list_items($faktur){
		$this->db->where('faktur',$faktur);
		return $this->db->get('pembelian_items')->result_array();
	}

	public function hapus_item($id){
		$this->db->where('id',$id);
		$this->db->delete('pembelian_items');
		return;
	}

	public function selesai(){
		$data = array('faktur'=>$this->input->post('faktur'),
						'idsupplier'=>$this->input->post('supplier'),
						'tanggal'=>$this->input->post('tanggal'),
						'catatan'=>$this->input->post('catatan')
				);
		$this->db->insert('pembelian',$data);
		return;
	}

	public function list_pembelian(){
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		return $this->db->get('pembelian')->result_array();
	}

	public function update_stok($id, $stok){
		$data = array('stok' => $stok);
		$this->db->where('id',$id);
		$this->db->update('obat',$data);
		return;
	}

	public function hapus_semua_item($faktur){
		$this->db->where('faktur',$faktur);
		$this->db->delete('pembelian_items');
		return;
	}

	public function hapus_pembelian($faktur){
		$this->db->where('faktur',$faktur);
		$this->db->delete('pembelian');
		return;
	}
	

}