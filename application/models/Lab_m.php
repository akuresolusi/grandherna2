<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_reg_lab(){
		$this->db->where('status', '');
		$this->db->limit(100);
		return $this->db->get('reg_lab')->result_array();
	}

	public function list_reg_lab_selesai(){
		$this->db->where('status', 'Selesai');
		$this->db->limit(100);
		return $this->db->get('reg_lab')->result_array();
	}

	public function list_items_periksa($noreg){
		$this->db->where('noreg', $noreg);
		return $this->db->get('reg_lab_items')->result_array();
	}
	
	public function insert_hasil_lab(){
		$id = $this->input->post('id');
		$data = array();
		foreach($id as $key => $value){
			$data[] = array(
							"id" => $id[$key],
							"hasil"  => $this->input->post('hasil')[$key],
							"keterangan"  => $this->input->post('keterangan')[$key],
							"nilainormal"  => $this->input->post('normal')[$key]
						);
		}
		$this->db->update_batch('reg_lab_items', $data, 'id');
		return;
	}

	public function selesai_proses_lab(){
		$data = array(	'kesimpulan'=>$this->input->post('ket'),
						'status'=>'Selesai',
						'tanggalselesai'=>$this->input->post('tanggal'),
						'jamselesai'=>$this->input->post('jam')
				);
		$this->db->where('noreg', $this->input->get('noreg'));
		$this->db->update('reg_lab',$data);
	}
	
	// KATEGORI LABORATORIUM
	public function insert_kategori(){
		$data = array('kategori'=> $this->input->post('kategori'),
					'status' => '1'
				);
		$this->db->insert('periksalab_kategori',$data);
		return;
	}

	public function list_kategori(){
		$this->db->order_by('id','DESC');
		$this->db->where('status','1');
		return $this->db->get('periksalab_kategori')->result_array();
	}


	public function edit_kategori(){
		$data = array('kategori' => $this->input->post('kategori'));
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('periksalab_kategori',$data);
		return;
	}

	public function hapus_kategori($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('periksalab_kategori',$data);
		return;
	}
	// END LABORATORIUM

	// PEMERIKSAAN
	public function insert_pemeriksaan(){
		$data = array('nama'=> $this->input->post('nama'),
					'idkategori'=> $this->input->post('idkategori'),
					'satuan'=> $this->input->post('satuan'),
					'status' => '1',
					'tarif' => $this->input->post('tarif')
				);
		$this->db->insert('periksalab',$data);
		return;
	}

	public function list_pemeriksaan(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('kategori',$like);
			$this->db->or_like('satuan',$like);
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		$this->db->where('status','1');
		return $this->db->get('periksalab')->result_array();
	}

	public function hapus_pemeriksaan($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('periksalab',$data);
		return;
	}

	public function edit_pemeriksaan(){
		$data = array('nama'=> $this->input->post('nama'),
					'idkategori'=> $this->input->post('idkategori'),
					'satuan'=> $this->input->post('satuan'),
					'status'=>'1',
					'tarif' => $this->input->post('tarif')
				);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('periksalab',$data);
		return;
	}

	public function list_kategori_laboratorium(){
		$this->db->where('status','1');
		return $this->db->get('periksalab_kategori')->result_array();
	}
	// END PEMERIKSAAN

}