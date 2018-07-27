<style type="text/css">
	label{
		text-align: right;
	}
</style>


<style type="text/css">

  #hasilpencarian{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 200px;
    width: 500px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #hasilpencariansupplier{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 250px;
    width: 380px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #daftar-autocomplete, 
  #daftar-autocomplete-supplier{ 
    list-style:none; 
    margin:0; 
    padding:0; 
    width:100%;
  }

  #daftar-autocomplete li, 
  #daftar-autocomplete-supplier li {
    padding: 5px 10px 5px 10px; 
    background:#FAFAFA; 
    border-bottom:#ddd 1px solid;
  }

  #daftar-autocomplete li:hover, 
  #daftar-autocomplete-supplier li:hover,
  #daftar-autocomplete li.autocomplete_active, 
  #daftar-autocomplete-supplier li.autocomplete_active { 
    background:#6bb9f0; 
    color:#fff; 
    cursor: pointer;
  } 

</style>

<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
	    	<div class="panel-body title-pos">
	    		<div class="col-md-6" style="padding: 0;">
		    		<span id="sub-title">Pendaftaran</span>
		    		<h3 class="page-title"><?php echo $title; ?></h3>
	    		</div>
	    		<div class="col-md-6 add-data">
	    			<a href="#" class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#cari"><span class="fa fa-search"> Cari Pasien</span></a>
	    			<a href="#" class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#tambah" style="margin-right: 5px;"><span class="fa fa-user-plus"> Tambah Pasien</span></a>
	    		</div>
	    	</div>
	 	</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
		    		<?php echo form_open(base_url().'pendaftaran/registrasi'); ?>
			    		<div class="form-group">
			    			<div class="col-md-12"><h4 id="title-group" style="margin-top: -10px;">Data Pasien</h4></div>
			    			<div class="form-group col-md-4">
			    				<label>No. RM</label>
			    				<input type="text" name="norm" id="norm" readonly="" required="" class="form-control" placeholder="No. Rekam Medik">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Nama Lengkap</label>
			    				<input type="text"  id="nama" class="form-control" disabled="" placeholder="Nama Lengkap">
			    				<div id="hasilpencarian"></div>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>No. KTP</label>
			    				<input type="text"  id="noidentitas" disabled="" class="form-control" placeholder="No. KTP">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Jenis Kelamin</label>
			    				<select class="form-control"  id="jeniskelamin" disabled="">
			    					<?php
						    			$data_jenis = array('Laki-Laki','Perempuan');
						    			foreach ($data_jenis as $value) {
						    				echo "<option value='".$value."'>".$value."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Tempat Lahir</label>
			    				<input type="text" id="tempatlahir" disabled="" class="form-control" placeholder="Tempat Lahir">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Tanggal Lahir</label>
			    				<input type="date" id="tanggallahir" disabled="" class="form-control">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Golongan Darah</label>
			    				<input type="text" id="golongandarah" disabled="" class="form-control" placeholder="Golongan Darah">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Agama</label>
			    				<select class="form-control" id="agama" disabled="">
			    					<?php
						    			$data_agama = array('Islam','Kristen','Katolik','Budha','Hindu','Khongcu','dll');
						    			foreach ($data_agama as $value) {
						    				echo "<option value='".$value."'>".$value."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Pekerjaan</label>
			    				<select class="form-control" id="pekerjaan" disabled="">
			    					<?php
						    			$data_pekerjaan = array('Pelajar','PNS','Karyawan','Wiraswasta','dll');
						    			foreach ($data_pekerjaan as $value){
						    				echo "<option value='".$value."'>".$value."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Status Menikah</label>
			    				<select class="form-control" id="status" disabled="">
			    					<?php
						    			$data_pernikahan = array('Menikah','Belum Menikah');
						    			foreach ($data_pernikahan as $value) {
						    				echo "<option value='".$value."'>".$value."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Telp / No. HP</label>
			    				<input type="text" id="notelp" disabled="" class="form-control" placeholder="Telp / No. HP">
			    			</div>
			    			<div class="form-group col-md-12">
			    				<label>Alamat</label>
			    				<textarea class="form-control" id="alamat" disabled="" placeholder="Alamat"></textarea>
			    			</div>
			    			
			    			<!-- PENANGGUNG JAWAB -->
			    			<div class="col-md-12"><h4 id="title-group">Data Penanggung Jawab</h4></div>
			    			<div class="form-group col-md-4">
			    				<label>Nama Lengkap</label>
			    				<input type="text" name="namap" class="form-control" placeholder="Nama Lengkap">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Hubungan</label>
			    				<input type="text" name="hubunganp" class="form-control" placeholder="Hubungan">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Telp</label>
			    				<input type="text" name="nohp" class="form-control" placeholder="No Telp">
			    			</div>
			    			<div class="form-group col-md-12">
			    				<label>Alamat</label>
			    				<textarea class="form-control" name="alamatp" placeholder="Alamat"></textarea>
			    			</div>

			    			<div class="col-md-12"><h4 id="title-group" style="margin-top: 0px;">#</h4></div>
			    			<div class="form-group col-md-4">
			    				<label>Cara Masuk</label>
			    				<select class="form-control" name="caramasuk" required="">
			    					<?php
						    			$data_pernikahan = array('DATANG SENDIRI','PUSKESMAS','RUMAH SAKIT','KLINIK','BIDAN');
						    			foreach ($data_pernikahan as $value) {
						    				echo "<option value='".$value."'>".$value."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Tanggal Masuk</label>
			    				<input type="date" name="tanggal" required="" value="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Tanggal">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Jam Masuk</label>
			    				<input type="time" name="jam" required=""  value="<?php echo date('H:i:s'); ?>" class="form-control" placeholder="Jam Masuk">
			    			</div>
			    			<div class="col-md-12"><h4 id="title-group" style="margin-top: 0px;">#</h4></div>

			    			<div class="form-group col-md-4">
			    				<label>Poli</label>
			    				<select class="form-control" required="" name="poli">
			    					<option value="">- Pilih Poli Tujuan -</option>
			    					<?php
						    			foreach ($list_poli as $value) {
						    				echo "<option value='".$value['id']."'>".$value['poliklinik']."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Kunjungan</label>
			    				<select class="form-control" name="kunjungan" required="">
			    					<?php
						    			$data = array('LAMA','BARU');
						    			foreach ($data as $value) {
						    				echo "<option value='".$value."'>".$value."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Dokter</label>
			    				<select class="form-control" name="dokter" required="">
			    					<option value="">- Pilih Dokter -</option>
			    					<?php
						    			foreach ($list_dokter as $value) {
						    				echo "<option value='".$value['id']."'>".$value['nama']."</option>";
						    			}
						    		?>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Cara Bayar</label>
			    				<input type="text" name="carabayar" readonly="" value="UMUM" class="form-control" placeholder="Cara Bayar">
			    			</div>
			    			<div class="form-group col-md-12">
			    				<label>Keterangan/Keluhan</label>
			    				<textarea class="form-control" name="keterangan" placeholder="Keterangan/Keluhan"></textarea>
			    			</div>
			    		</div>
			    		<hr>
		    		
						<div class="col-md-12">
							<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
							<a href="#" class="btn btn-success" ><span class="fa fa-print"> Cetak Kartu</span></a>
							<a href="#" class="btn btn-success" ><span class="fa fa-print"> Cetak Data Pasien</span></a>
						</div>
					<?php echo form_close(); ?>	
			    	</div>
				</div>
		  	</div>
		</div>
<!-- END MAIN CONTENT -->









<!-- MODAL CARI -->
<div class="modal fade" id="cari" role="dialog">
	<div class="modal-dialog modal-lg">
					    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><span class="fa fa-search"></span> Cari Pasien</h4>
			</div>

			<div class="modal-body">
				<table id="data" class="table table-striped  table-hover">
							<thead>
								<th>No RM</th>
								<th>Nama Pasien</th>
								<th>Jenis Kelamin</th>
								<th>Gol Darah</th>
								<th>Tanggal Lahir</th>
								<th>Telp/No Hp</th>
								<th>Status Menikah</th>
								<th width="10"></th>
							</thead>
							<tbody>
							<?php
								foreach($list as $value){
									echo"
									<tr>
										<td>".$value['norm']."</td>
										<td>".$value['nama']."</td>
										<td>".$value['jeniskelamin']."</td>
										<td>".$value['golongandarah']."</td>
										<td>".date_format(date_create($value['tanggallahir']),'d M Y')."</td>
										<td>".$value['nohp']."</td>
										<td>".$value['statuskawin']."</td>
										<td>
											<a class='btn btn-primary btn-xs pilihpasien' data-dismiss='modal' 
											norm='".$value['norm']."' 
											nama='".$value['nama']."'
											noidentitas='".$value['noidentitas']."'
											jeniskelamin='".$value['jeniskelamin']."'
											tempatlahir='".$value['tempatlahir']."'
											tanggallahir='".$value['tanggallahir']."'
											pekerjaan='".$value['pekerjaan']."'
											agama='".$value['agama']."'
											alamat='".$value['alamat']."'
											golongandarah='".$value['golongandarah']."'
											><span class='fa fa-check'> Pilih</span></a>
										</td>
									</tr>";
								}
							?>
							</tbody>
						</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
			</div>
		</div>
					      
	</div>
</div>








<!-- MODAL TAMBAH -->
<div class="modal fade" id="tambah" role="dialog">
	<div class="modal-dialog" style="width: 74%;">
					    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><span class="fa fa-user-plus"></span> Tambah Pasien</h4>
			</div>
			<div class="modal-body" style="padding: 0;">
				<iframe src="<?php echo base_url('pasien/tambah2'); ?>" width="100%" style="border:0px;" scrolling="yes" height="560"></iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger reload" data-dismiss="modal">Tutup</button>
			</div>
		</div>
					      
	</div>
</div>

<script type="text/javascript">
	

	$('.reload').click(function() {
	    location.reload();
	});

	$('.pilihpasien').click(function() {
	    $("#norm").val($(this).attr('norm'));
	    $("#nama").val($(this).attr('nama'));
	    $("#jeniskelamin").val($(this).attr('jeniskelamin'));
	    $("#tempatlahir").val($(this).attr('tempatlahir'));
	    $("#tanggallahir").val($(this).attr('tanggallahir'));
	    $("#golongandarah").val($(this).attr('golongandarah'));
	    $("#agama").val($(this).attr('agama'));
	    $("#pekerjaan").val($(this).attr('pekerjaan'));
	    $("#status").val($(this).attr('status'));
	    $("#notelp").val($(this).attr('notelp'));
	    $("#alamat").val($(this).attr('alamat'));
	});

	<?php
		if(!empty($this->input->get('msg'))){
			echo"swal('".$this->input->get('msg')."');";
		}
	?>

</script>