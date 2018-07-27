<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function insert(){
		$data = array('iddokter' => $this->input->post('iddokter'),
					'nama'=> $this->input->post('nama'),
					'jeniskelamin'=> $this->input->post('jeniskelamin'),
					'golongandarah' => $this->input->post('goldarah'),
					'tempatlahir'=> $this->input->post('tempatlahir'),
					'tanggallahir'=> $this->input->post('tanggallahir'),
					'nohp'=> $this->input->post('nohp'),
					'agama'=> $this->input->post('agama'),
					'alamat'=> $this->input->post('alamat'),
					'spesialis' => $this->input->post('spesialis'),
					'statuskawin'=> $this->input->post('status'),
					'noizinpraktek'=> $this->input->post('noizin'),
					'alumni'=> $this->input->post('alumni'),
					'status'=>'1'
				);
		$this->db->insert('dokter',$data);
		return;
	}

	public function list_dokter(){
		$this->db->order_by('id','DESC');
		$this->db->limit(100);
		$this->db->where('status','1');
		return $this->db->get('dokter')->result_array();
	}
	public function jlh_baris(){
		return $this->db->get('dokter')->num_rows();
	}

	public function delete($iddokter){
		$data = array('status'=>'0');
		$this->db->where('iddokter',$iddokter);
		$this->db->update('dokter',$data);
		return;
	}

	public function edit($iddokter){
		$data = array(
					'nama'=> $this->input->post('nama'),
					'jeniskelamin'=> $this->input->post('jeniskelamin'),
					'golongandarah' => $this->input->post('goldarah'),
					'tempatlahir'=> $this->input->post('tempatlahir'),
					'tanggallahir'=> $this->input->post('tanggallahir'),
					'nohp'=> $this->input->post('nohp'),
					'agama'=> $this->input->post('agama'),
					'alamat'=> $this->input->post('alamat'),
					'spesialis' => $this->input->post('spesialis'),
					'statuskawin'=> $this->input->post('status'),
					'noizinpraktek'=> $this->input->post('noizin'),
					'alumni'=> $this->input->post('alumni')
				);
		$this->db->where('iddokter',$iddokter);
		$this->db->update('dokter',$data);
		return;
	}

	// public function jlh_baris(){
	// 	return $this->db->get('dokter')->num_rows();
	// }

	public function detail_dokter($iddokter){
		$this->db->where('iddokter',$iddokter);
		return $this->db->get('dokter')->row_array();
	}

}