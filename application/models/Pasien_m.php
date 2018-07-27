<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('norm' => $this->input->post('norm'),
					'noidentitas'=> $this->input->post('noidentitas'),
					'nama'=> $this->input->post('nama'),
					'jeniskelamin'=> $this->input->post('jeniskelamin'),
					'golongandarah' => $this->input->post('goldarah'),
					'tempatlahir'=> $this->input->post('tempatlahir'),
					'tanggallahir'=> $this->input->post('tanggallahir'),
					'namaibu'=> $this->input->post('namaibu'),
					'alamat'=> $this->input->post('alamat'),
					'agama'=> $this->input->post('agama'),
					'statuskawin'=> $this->input->post('status'),
					'nohp'=> $this->input->post('nohp'),
					'pekerjaan'=> $this->input->post('pekerjaan'),
					'status'=>'1'
				);
		$this->db->insert('pasien',$data);
		return;
	}

	public function list_pasien(){
		$like = $this->input->post_get('like');
		if(isset($lke)){
			$this->db->like('nama',$like);
			$this->db->or_like('norm',$like);
			$this->db->or_like('noidentitas',$like);
			$this->db->or_like('tempatlahir',$like);
			$this->db->or_like('namaibu',$like);
			$this->db->or_like('alamat',$like);
			$this->db->or_like('agama',$like);
				
		}
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		$this->db->where('status','1');
		return $this->db->get('pasien')->result_array();
	}

	public function delete($rm){
		$data = array('status'=>'0');
		$this->db->where('norm',$rm);
		$this->db->update('pasien',$data);
		return;
	}

	public function edit($rm){
		$data = array('noidentitas'=> $this->input->post('noidentitas'),
					'nama'=> $this->input->post('nama'),
					'jeniskelamin'=> $this->input->post('jeniskelamin'),
					'golongandarah' => $this->input->post('goldarah'),
					'tempatlahir'=> $this->input->post('tempatlahir'),
					'tanggallahir'=> $this->input->post('tanggallahir'),
					'namaibu'=> $this->input->post('namaibu'),
					'alamat'=> $this->input->post('alamat'),
					'agama'=> $this->input->post('agama'),
					'statuskawin'=> $this->input->post('status'),
					'nohp'=> $this->input->post('nohp'),
					'pekerjaan'=> $this->input->post('pekerjaan'),
					'status'=>'1'
				);
		$this->db->where('norm',$rm);
		$this->db->update('pasien',$data);
		return;
	}

	public function jlh_baris(){
		$this->db->where('status','1');
		return $this->db->get('pasien')->num_rows();
	}

	public function detail_pasien($rm){
		$this->db->where('norm',$rm);
		return $this->db->get('pasien')->row_array();
	}

}