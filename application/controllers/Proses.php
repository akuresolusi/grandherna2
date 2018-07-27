<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('detail_m');
		$this->load->model('proses_m');
	}

	public function index(){
		$data['list_reg_lab_items'] = $this->proses_m->list_reg_lab_items($this->input->get('reg'));
		$data['list_reg_radio_items'] = $this->proses_m->list_reg_radio_items($this->input->get('reg'));
		$data['list_periksalab_kategori'] = $this->proses_m->list_periksalab_kategori();
		$data['list_periksaradio_kategori'] = $this->proses_m->list_periksaradio_kategori();
		$data['list_dokter'] = $this->proses_m->list_dokter();
		$data['list_paramedis'] = $this->proses_m->list_paramedis();
		$data['list_reg_dokter'] = $this->proses_m->list_reg_dokter($this->input->get('reg'));
		$data['list_reg_tindakan'] = $this->proses_m->list_reg_tindakan($this->input->get('reg'));
		$data['detail'] = $this->detail_m->detail_reg($this->input->get('reg'));
		$data['pasien'] = $this->detail_m->detail_pasien($data['detail']['norm']);
		$data['list_diagnosa'] = $this->proses_m->list_reg_diagnosa($this->input->get('reg'));
		$data['list_ruangan'] = $this->proses_m->list_ruangan();
		$data['isi'] = "proses/page-proses";
		$data['title'] = 'Daftar Tindakan Diagnosa';
		$this->load->view('layout',$data);
	}


	public function cari_diagnosa(){
			
		$diagnosa = $this->proses_m->data_diagnosa();
		if(count($diagnosa) >= 1){
			$json['status'] = 1;
			$json["datanya"] = "<ul id='daftar-autocomplete'>";
			foreach($diagnosa as $row){
				$json["datanya"] .= "
					<li>
						<span id='id' style='display:none;'>".$row['id']."</span>
						<span id='kode' style='display:none;'>".$row['kode']."</span>
						<span id='nomor' style='display:none;'>".$row['nomor']."</span>
						<span id='diagnosa' style='display:none;'>".$row['diagnosa']."</span>
						<span><b>".$row['kode']."</b> ".$row['diagnosa']."</span>
					</li>";
			}
			$json["datanya"] .= "</ul>";
		}
		echo json_encode($json);
	}


	public function cari_tindakan(){
			
		$tindakan = $this->proses_m->data_tindakan();
		if(count($tindakan) >= 1){
			$json['status'] = 1;
			$json["datanya"] = "<ul id='daftar-autocomplete-tindakan'>";
			foreach($tindakan as $row){
				$json["datanya"] .= "
					<li>
						<span id='id' style='display:none;'>".$row['id']."</span>
						<span id='tarif' style='display:none;'>".$row['tarif']."</span>
						<span id='tindakan' style='display:none;'>".$row['tindakan']."</span>
						<span>".$row['tindakan']."</span>
					</li>";
			}
			$json["datanya"] .= "</ul>";
		}
		echo json_encode($json);
	}

	public function tambah_diagnosa(){
		$this->proses_m->tambah_diagnosa();
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab3");
	}

	public function hapus_diagnosa(){
		$this->proses_m->hapus_diagnosa($this->input->get('id'));
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab3");
	}


	public function tambah_dokter(){
		$this->proses_m->tambah_dokter();
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab");
	}

	public function hapus_dokter(){
		$this->proses_m->hapus_dokter($this->input->get('id'));
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab");
	}

	public function tambah_tindakan(){
		$this->proses_m->tambah_tindakan();
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab2");
	}

	public function hapus_tindakan(){
		$this->proses_m->hapus_tindakan($this->input->get('id'));
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab2");
	}


	public function tambah_periksalab(){
		$item = $this->input->post('periksalab[]');
		foreach ($item as $value) {
			$this->proses_m->tambah_item_periksalab($value);
		}
		$cek_reg_lab = $this->proses_m->cek_reg_lab($this->input->get('noreg'));
		if($cek_reg_lab == 0){
			$this->proses_m->tambah_reg_lab();	
		}
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab5");
	}

	public function hapus_periksalab(){
		$this->proses_m->hapus_reg_lab_items($this->input->get('id'));
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab5");
	}


	public function tambah_periksaradio(){
		$item = $this->input->post('periksaradio[]');
		foreach ($item as $value) {
			$this->proses_m->tambah_item_periksaradio($value);
		}
		$cek_reg_radio = $this->proses_m->cek_reg_radio($this->input->get('noreg'));
		if($cek_reg_radio == 0){
			$this->proses_m->tambah_reg_radio();
		}
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab6");
	}

	public function hapus_periksaradio(){
		$this->proses_m->hapus_reg_radio_items($this->input->get('id'));
		redirect(base_url().'proses/?reg='.$this->input->get('noreg')."&tab=tab6");
	}

	public function rujuk_ranap(){
		$this->proses_m->update_ranap($this->input->get('noreg'));
		redirect(base_url().'proses/?reg='.$this->input->get('noreg'));
	}

	public function selesai(){
		$this->proses_m->selesai($this->input->get('noreg'));
		if($this->input->get('ranap') == "1"){
			redirect(base_url('poli/rawatinap'));
		}else{
			redirect(base_url('poli'));
		}
	}

}
