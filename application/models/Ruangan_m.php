<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('nm_ruangan' => $this->input->post('nm_ruangan'),
					'id_kelas'=> $this->input->post('id_kelas'),
					'id_kategoriruangan'=> $this->input->post('id_kategoriruangan'),
					'nokamar'=> $this->input->post('nokamar'),
					'nott' => $this->input->post('nott'),
					'tarif'=> $this->input->post('tarif'),
					'status_kamar'=> $this->input->post('status_kamar'),
					'status'=>'1'
				);
		$this->db->insert('ruangan',$data);
		return;
	}

	public function list_ruangan(){
		$like = $this->input->post_get('like');
		if(!empty($like)){
			$this->db->like('nm_ruangan',$like);
			$this->db->or_like('id_kelas',$like);
			$this->db->or_like('id_kategoriruangan',$like);
			$this->db->or_like('nokamar',$like);
			$this->db->or_like('nott',$like);
			$this->db->or_like('tarif',$like);
			$this->db->or_like('status_kamar',$like);
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		$this->db->where('status','1');
		return $this->db->get('ruangan')->result_array();
	}

	public function delete($id){
		$data = array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('ruangan',$data);
		return;
	}

	public function edit($id){
		$data = array('nm_ruangan'=> $this->input->post('nm_ruangan'),
					'id_kelas'=> $this->input->post('id_kelas'),
					'id_kategoriruangan'=> $this->input->post('id_kategoriruangan'),
					'nokamar'=> $this->input->post('nokamar'),
					'nott'=> $this->input->post('nott'),
					'tarif'=> $this->input->post('tarif'),
					'status_kamar'=> $this->input->post('status_kamar'),
					'status'=>'1'
				);
		$this->db->where('id',$id);
		$this->db->update('ruangan',$data);
		return;
	}

	public function jlh_baris(){
		return $this->db->get('ruangan')->num_rows();
	}


	public function list_kelas(){
		$this->db->where('status','1');
		return $this->db->get('kelasruangan')->result_array();
	}

	public function list_kategori(){
		$this->db->where('status','1');
		return $this->db->get('kategoriruangan')->result_array();
	}


}