<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pembelian_m');
		$this->load->model('detail_m');
	}
	public function index(){
		$data['list'] = $this->pembelian_m->list_pembelian();
		$data['isi'] =  "pembelian/page-pembelian";
		$data['title'] = 'Daftar Pembelian Obat';
		$this->load->view('layout',$data);
	}

	public function tambah(){
		$data['faktur'] = $this->pembelian_m->idbesarpembelian() + 1;
		$data['list_supplier'] = $this->pembelian_m->list_supplier();
		$data['list_items'] = $this->pembelian_m->list_items($data['faktur']);
		$data['isi'] =  "pembelian/tambah-pembelian";
		$data['title'] = 'Tambah Pembelian Obat';
		$this->load->view('layout',$data);
	}

	public function view(){
		$data['isi'] =  "pembelian/detail-pembelian";
		$data['title'] = 'Daftar Pembelian Obat';
		$this->load->view('layout',$data);
	}

	public function cari_barang(){
		$barang = $this->pembelian_m->data_barang();
		if(count($barang) >= 1){
			$json['status'] = 1;
			$json["datanya"] = "<ul id='daftar-autocomplete'>";
			foreach($barang as $row){
				$json["datanya"] .= "
					<li>
						<span id='id' style='display:none;'>".$row['id']."</span>
						<span id='nama' style='display:none;'>".$row['nama']."</span>
						<span>".$row['nama']."</span>
					</li>";
			}
			$json["datanya"] .= "</ul>";
		}
		echo json_encode($json);
	}

	public function proses_tambah(){
		if(!empty($this->input->post('tambah-item'))){
			$id = $this->input->post('idbarang');
			$qty = $this->input->post('qty');
			$harga = $this->input->post('harga');
			if(empty($id) || empty($qty) || empty($harga)){
				redirect(base_url().'pembelian/tambah?msg=Proses gagal, Mohon lengkapi form kosong');
			}else{ 
				$this->pembelian_m->input_item();
				redirect(base_url().'pembelian/tambah');
			}
		}else{
			if(!empty($this->input->post('supplier'))){
				$items = $this->pembelian_m->list_items($this->input->post('faktur'));
				foreach ($items as $value) {
					$barang = $this->detail_m->detail_obat($value['idbarang']);
					$stok = $barang['stok'] + $value['qty'];
					$this->pembelian_m->update_stok($value['idbarang'], $stok);
				}
				$this->pembelian_m->selesai();
				redirect(base_url().'pembelian');
			}else{
				redirect(base_url().'pembelian/tambah?msg=Proses gagal, Supplier belum dipilih');
			}
		}
	}

	public function hapus_item(){
		$this->pembelian_m->hapus_item($this->input->get('id'));
		redirect(base_url().'pembelian/tambah');
	}

	public function hapus(){
		$faktur = $this->input->get('faktur');
		$items = $this->pembelian_m->list_items($faktur);
		foreach ($items as $value) {
			$barang = $this->detail_m->detail_obat($value['idbarang']);
			$stok = $barang['stok'] - $value['qty'];
			$this->pembelian_m->update_stok($value['idbarang'], $stok);
		}
		$this->pembelian_m->hapus_semua_item($faktur);
		$this->pembelian_m->hapus_pembelian($faktur);
		redirect(base_url().'pembelian');
	}
	
	

}