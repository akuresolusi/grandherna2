<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obatpasien extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('obatpasien_m');
		$this->load->model('detail_m');
	}

	public function index(){
		$data['list'] = $this->obatpasien_m->list_obat_pasien();
		$data['isi'] = "obat/page-obatpasien";
		$data['title'] = 'Daftar Obat Pasien';
		$this->load->view('layout',$data);
	}

	public function proses(){
		$data['reg'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['reg']['norm']);
		$data['reg_obat'] = $this->obatpasien_m->list_reg_obat($this->input->get('reg'));
		$data['isi'] = "obat/proses-obatpasien";
		$data['title'] = 'Detail Obat Pasien';
		$this->load->view('layout',$data);
	}

	public function input_obat(){
		$this->obatpasien_m->input_obat();
		redirect(base_url().'obatpasien/proses?reg='.$this->input->get('reg'));
	}

	public function hapus_obat(){
		$this->obatpasien_m->hapus_obat($this->input->get('id'));
		redirect(base_url().'obatpasien/proses?reg='.$this->input->get('reg'));
	}


	public function cari_obat(){
		$obat = $this->obatpasien_m->data_obat();
		if(count($obat) >= 1){
			$json['status'] = 1;
			$json["datanya"] = "<ul id='daftar-autocomplete'>";
			foreach($obat as $row){
				$json["datanya"] .= "
					<li>
						<span id='id' style='display:none;'>".$row['id']."</span>
						<span id='nama' style='display:none;'>".$row['nama']."</span>
						<span id='harga' style='display:none;'>".$row['hargajual']."</span>
						<span>".$row['nama']."</span>
					</li>";
			}
			$json["datanya"] .= "</ul>";
			echo json_encode($json);
		}
	}

	// public function index(){
	// 	$data['listPasienRegist'] = $this->obatpasien_m->list_pasien_regist();
	// 	$data['listPasien'] = $this->obatpasien_m->list_pasien();
	// 	$data['listObat'] = $this->obatpasien_m->list_obat();
	// 	$data['listObatItem'] = $this->obatpasien_m->list_item_obat();
	// 	$data['isi'] =  "obat/page-obatpasien";
	// 	$data['title'] = 'Data Pembelian Obat Pasien';
	// 	$this->load->view('layout',$data);
	// }

	// public function proses_tambah(){
	// 	$this->obatpasien_m->insert();
	// 	redirect(base_url('obatpasien?pasien=6'));
	// }



	// public function getData($id){
	// 	$data['info_obat']= $this->pembelian_m->getdata($id);
	// 	$data['info_stok']= $this->pembelian_m->getStok($id);

	// 	echo json_encode($data);
	// }
	
	

	// public function saveData($id){
	// 	$this->obatpasien_m->insert($id);
	// 	// redirect(base_url('pembelian'));
	// }

}