<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obatpasien_m extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function list_obat(){
		$this->db->order_by('id','DESC');
		return $this->db->get('obat')->result_array();
	}
	public function list_pasien(){
		$this->db->select('*');
		$this->db->from('pasien');
		
		return $this->db->get()->result_array();

	}
	public function list_pasien_regist(){
		$this->db->from('registrasi');
		$this->db->select('registrasi.id');
		$this->db->select('pasien.nama');
		$this->db->select("pasien.nama AS 'nama_pasien'");
		$this->db->select("registrasi.id AS 'no_reg'");

		$this->db->join('pasien', 'registrasi.norm = pasien.norm');

		$this->db->where('registrasi.status','Selesai');
		$this->db->where('registrasi.statusbayar != ','1');
		return $this->db->get()->result_array();


		// $this->db->order_by('id','DESC');
		// $this->db->where('status','Selesai');
		// $this->db->where('statusbayar !=','1');
		// return $this->db->get('registrasi')->result_array();



	}
	public function list_pembelian_obat(){
		$this->db->select('*');
		

		$this->db->from('req_pembelian_obat');
		$this->db->order_by('req_pembelian_obat.id','DESC');
		$this->db->join('obat', 'obat.id = req_pembelian_obat.obat');
		$this->db->join('supplier', 'supplier.id = req_pembelian_obat.supplier');
		$this->db->select("supplier.nama AS 'nama_supplier'");
		$this->db->select("obat.nama AS 'nama_obat'");

		$this->db->where('obat.status','1');

		if(isset($_GET['supplier'])){
			$supp=$_GET['supplier'];
		}
		else{
			$supp='NaN';
		}
		$this->db->where('supplier.id',$supp);

		return $this->db->get()->result_array();

		// $this->db->order_by('id','DESC');
		// return $this->db->get('req_pembelian_obat')->result_array();
	}

	public function list_item_obat(){
		// $this->db->select('*');
		$this->db->from('reg_obat');
		$this->db->join('obat', 'obat.id = reg_obat.idobat');

		if(isset($_GET['pasien'])){
			$this->db->where('reg_obat.noreg',$_GET['pasien']);
		}
		else{

		}
		
		return $this->db->get()->result_array();	
	}
	public function getStok($id){
		$this->db->where('id',$id);
		$this->db->select("stok");
		$query = $this->db->get('obat');
		$num = $query->num_rows();
		return $query->result_array();	
	}

	public function insert(){
		$id=$this->input->post('noreg');
		$data = array(	'noreg'=> $this->input->post('noreg'),
						'idobat'=> $this->input->post('idobat'),
						'tarif'=> $this->input->post('tarif')*$this->input->post('qty'),
						'qty'=> $this->input->post('qty')
				);
		$this->db->insert('reg_obat',$data);



		$updateStok=$this->input->post('stokobat')-$this->input->post('qty');
		$data2 = array(
						'stok'=> $updateStok
					);
		$this->db->where('id',$this->input->post('idobat'));
		$this->db->update('obat',$data2);
		return;
	}

}