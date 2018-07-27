<style type="text/css">
	label{
		text-align: right;
	}
	.panel-title > a:before {
	    float: right !important;
	    font-family: FontAwesome;
	    content:"\f056";
	    padding-right: 5px;
	}
	.panel-title > a.collapsed:before {
	    float: right !important;
	    content:"\f055";
	}
	.panel-title > a:hover, 
	.panel-title > a:active, 
	.panel-title > a:focus  {
	    text-decoration:none;
	}
</style>


<style type="text/css">

  #hasilpencarian,
  #hasilpencarian-tindakan{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 200px;
    width: 473px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #daftar-autocomplete,
  #daftar-autocomplete-tindakan{ 
    list-style:none; 
    margin:0; 
    padding:0; 
    width:100%;
  }

  #daftar-autocomplete li,
  #daftar-autocomplete-tindakan li{
    padding: 5px 10px 5px 10px; 
    background:#FAFAFA; 
    border-bottom:#ddd 1px solid;
  }

  #daftar-autocomplete li:hover, 
   #daftar-autocomplete-tindakan li:hover, 
  #daftar-autocomplete li.autocomplete_active, 
  #daftar-autocomplete-tindakan li.autocomplete_active { 
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
		    		<span id="sub-title">Tindakan</span>
		    		<h3 class="page-title"><?php echo $title; ?></h3x>
	    		</div>
	    		<div class="col-md-6 add-data">
	    			<a href="<?php echo base_url('proses/selesai?noreg='.$this->input->get('reg')); ?>&ranap=<?php echo $detail['rawatinap'] ?>" class="btn btn-success btn-action btn-add"><span class="fa fa-check"> Selesai</span></a>
	    		</div>
	    	</div>
	 	</div>
		<div class="panel panel-default">
	    	<div class="panel-body">
	    		<h4 id="s-title">Data Pasien</h4>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">
		    			<tbody>
		    				<tr>
		    					<td width="130"><b>No. Registrasi</b></td>
		    					<td width="10">:</td>
		    					<td><?php echo $detail['noreg']; ?></td>
		    				</tr>
		    				<tr>
		    					<td width="130"><b>No. Rekam Medis</b></td>
		    					<td width="15">:</td>
		    					<td><?php echo $detail['norm']; ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Nama</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['nama']; ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Jenis Kelamin</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['jeniskelamin']; ?></td>
		    				</tr>
		    				
		    				
		    				
		    				
		    			</tbody>
		    		</table>
	    		</div>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase;" width="100%">
		    			<tbody>
		    				<tr>
		    					<td><b>Golongan Pasien</b></td>
		    					<td>:</td>
		    					<td><?php echo $detail['carabayar']; ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Tanggal Lahir</b></td>
		    					<td>:</td>
		    					<td><?php echo date_format(date_create($pasien['tanggallahir']),'d M Y'); ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Tempat Lahir</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['tempatlahir']; ?></td>
		    				</tr>
		    				<tr>
		    					<td width="130"><b>Alamat</b></td>
		    					<td width="10">:</td>
		    					<td><?php echo $pasien['alamat']; ?></td>
		    				</tr>
		    				
		    			</tbody>
		    		</table>
	    		</div>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase;" width="100%">
		    			<tbody>
		    				<tr>
		    					<td><b>Tanggal Masuk</b></td>
		    					<td>:</td>
		    					<td><?php echo date_format(date_create($detail['tanggal']),'d M Y'); ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Keterangan</b></td>
		    					<td>:</td>
		    					<td><?php echo $detail['keterangan'] ?></td>
		    				</tr>
		    				<?php
		    					$ruangan = $this->detail_m->detail_ruangan($detail['idruangan']);
		    					if($detail['rawatinap'] == 1){
		    				?>
		    				<tr>
		    					<td><b>Ruangan</b></td>
		    					<td>:</td>
		    					<td><?php echo $ruangan['nm_ruangan']; ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>No Kamar</b></td>
		    					<td>:</td>
		    					<td><?php echo $ruangan['nokamar']; ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>No Tempat Tidur</b></td>
		    					<td>:</td>
		    					<td><?php echo $ruangan['nott']; ?></td>
		    				</tr>

		    				<?php }else{ ?>

		    				<tr>
		    					<td><b>Dokter</b></td>
		    					<td>:</td>
		    					<td><?php 
		    					$dokter = $this->detail_m->detail_dokter($detail['dokter']);
		    					echo $dokter['nama']; ?></td>
		    				</tr>

		    				<?php } ?>
		    			</tbody>
		    		</table>
	    		</div>
	    	</div>
	    </div>

	    <div class="panel panel-default">
	    	<div class="panel-body">
	    		<div class="col-md-12" style="margin-top:15px;">
				<div class="tabbable-panel">
					<div class="tabbable-line">
	    			<ul class="nav nav-tabs">
					    <li><a data-toggle="tab" href="#tab2">Tindakan</a></li>
					    <li><a data-toggle="tab" href="#tab3">Diagnosa</a></li>
					    <li><a data-toggle="tab" href="#tab5">Order Lab</a></li>
					    <li><a data-toggle="tab" href="#tab6">Order Radiologi</a></li>
					    <?php
					    	if(!$detail['rawatinap'] == 1){
					    		echo"<li><a data-toggle='tab' href='#tab7'>Rujuk Rawat Inap</a></li>";
					    	}else{
					    		echo"<li ><a data-toggle='tab' href='#tab'>Dokter</a></li>";
					    	}
					    ?>
					 </ul>

					  <div class="tab-content">


					  	<!-- =============================DOKTER========================================= -->

					    <div id="tab" class="tab-pane fade in active" style="padding: 20px 0 0 0">
					      	<?php echo form_open(base_url().'proses/tambah_dokter?noreg='.$this->input->get('reg')); ?>	
					      	<div class="col-md-4" style="padding-left: 0;">	
						      	<div class="form-group">
						      		<label>Nama Dokter</label>
						      		<select name="dokter" class="form-control" required="">
						      			<option value="">- Pilih Dokter -</option>
						      			<?php
						      				foreach ($list_dokter as $value) {
						      					echo"<option value='".$value['id']."'>".$value['nama']."</option>";
						      				}
						      			?>
						      		</select>
						      	</div>
						     </div>
						     <div class="col-md-4">	
						      	<div class="form-group">
						      		<label>Kategori</label>
						      		<select class="form-control" name="kategori">
						      			<option value="">- Pilih Kategori -</option>
						      			<option value="DPJP">DPJP</option>
						      			<option value="Konsul">Konsul</option>
						      			<option value="Rawat Bersama">Rawat Bersama</option>
						      		</select>
						      	</div>
						      </div>
						      <div class="col-md-4" style="padding-left: 0; margin-top: 25px;">
						      	<button class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
						      </div>
						    <?php echo form_close(); ?> 

						     <!-- ==== -->
						      <table class="table table-hover">
						      	<thead>
						      		<th width="10px">No</th>
						      		<th>Nama Dokter</th>
						      		<th>Spesialis</th>
						      		<th>Kategori</th>
						      		<th width="10px"></th>
						      	</thead>
						      	<tbody>
						      	<?php
						      		$i=0;
						      		foreach ($list_reg_dokter as $value) {
						      			$i++;
						      			$dokter = $this->detail_m->detail_dokter($value['dokter']);
						      			$spesialis = $this->detail_m->detail_spesialis($dokter['spesialis']);
						      			echo"
						      			<tr>
						      				<td>".$i."</td>
							      			<td>".$dokter['nama']."</td>
							      			<td>".$spesialis['spesialis']."</td>
							      			<td>".$value['kategori']."</td>
							      			<td><a href='".base_url()."proses/hapus_dokter?id=".$value['id']."&noreg=".$this->input->get('reg')."'><span class='lnr lnr-cross-circle' style='font-size: 20px; color: red'></span></a></td>
							      		</tr>";
						      		}
						      	?>	
						      	</tbody>
						      </table>
					    </div>

					    <!-- ===================================TINDAKAN========================= -->

					    <div id="tab2" class="tab-pane fade" style="padding: 20px 0 0 0">
					      <table class="table table-hover">
					      	<thead>
					      		<th width="300">Nama Tindakan</th>
					      		<th width="70">Tanggal</th>
					      		<th width="200">Dokter</th>
					      		<th width="200">Perawat</th>
					      		<th width="150">Tarif</th>
					      		<th width="80">Qty</th>
					      		<th>Total</th>
					      		<th></th>
					      	</thead>
					      	<tbody>
					      		
					      		<tr>
					      			<?php echo form_open(base_url().'proses/tambah_tindakan?noreg='.$this->input->get('reg')); ?>
					      			<td style="padding-left: 0">
					      				<input type="hidden" id="idtindakan" name="tindakan">
					      				<input type="text" id="tindakan" class="form-control">
					      				<div id="hasilpencarian-tindakan"></div>
					      			</td>
					      			<td>
					      				<input type="date" name="tanggal" value='<?php echo date('Y-m-d'); ?>' 
					      				class="form-control">
					      			</td>
					      			<td>
					      				<select class="form-control" name="dokter">
					      					<option value="">- Pilih Dokter -</option>
					      					<?php
							      				foreach ($list_dokter as $value) {
							      					echo"<option value='".$value['id']."'>".$value['nama']."</option>";
							      				}
							      			?>
					      				</select>
					      			</td>
					      			<td>
					      				<select class="form-control" name="perawat">
					      					<option>- Pilih Perawat -</option>
					      					<?php
							      				foreach ($list_paramedis as $value) {
							      					echo"<option value='".$value['id']."'>".$value['nama']."</option>";
							      				}
							      			?>
					      				</select>
					      			</td>
					      			<td><input type="number" min="1" name="tarif" id="tariftindakan" class="form-control"></td>
					      			<td><input type="number" name="qty" value="1" min="1" id="qty" class="form-control"></td>
					      			<td></td>
					      			<td><button type="submit" class="btn btn-success"><span class="fa fa-save"> Simpan</span></td>
					      			<?php echo form_close(); ?>
					      		</tr>
					      		
					      		<?php
					      		$i=0;
						      		foreach ($list_reg_tindakan as $value) {
						      			$tindakan = $this->detail_m->detail_tindakan($value['tindakan']);
						      			$dokter = $this->detail_m->detail_dokter($value['dokter']);
						      			$paramedis = $this->detail_m->detail_paramedis($value['paramedis']);
						      			$total = $value['tarif'] * $value['qty'];
						      			echo"
							      			<td>".$tindakan['tindakan']."</td>
							      			<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
							      			<td>".$dokter['nama']."</td>
							      			<td>".$paramedis['nama']."</td>
							      			<td>".$value['tarif']."</td>
							      			<td>".$value['qty']."</td>
							      			<td>".$total."</td>
							      			<td><a href='".base_url()."proses/hapus_tindakan?id=".$value['id']."&noreg=".$this->input->get('reg')."'><span class='lnr lnr-cross-circle' style='font-size: 20px; color: red'></span></a></td>
							      		</tr>";
						      		}
						      	?>

					      	</tbody>
					      </table>
					    </div>

					    <!-- =================================DIAGNOSA================================== -->


					    <div id="tab3" class="tab-pane fade" style="padding: 20px 0 0 0">
					    
					    <?php  echo form_open(base_url().'proses/tambah_diagnosa?noreg='.$this->input->get('reg')); ?>
					    
					    <div class="col-md-2">
					     	<label>Kode</label>
					     	<input type="hidden" readonly="" name="iddiagnosa" id="iddiagnosa" class="form-control">
					     	<input type="text" readonly="" id="kodediagnosa" class="form-control">
					     </div>

					    <div class="col-md-3" style="padding-left: 0;">
							<div class="form-group">
								<label>Pilih Diagnosa</label>
								<input type="text" id="diagnosa" class="form-control">
								<div id="hasilpencarian"></div>
							</div>
					    </div>

					     <div class="col-md-3">
					     	<label>Tanggal Diagnosa</label>
					     	<input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control">
					     </div>

					     <div class="col-md-2">
					     	<label>Status</label>
					     	<select class="form-control" name="status">
					     		<option value="Diagnosa Awal">Diagnosa Awal</option>
					     		<option value="Diagnosa Akhir" >Diagnosa Akhir</option>
					     	</select>
					     </div>
					  	
					  	<div class="col-md-2" style="padding-left: 0; margin-top: 25px;">
				      		<button class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
					   	</div>
						
						<?php echo form_close(); ?>
					   	
					   	<table class="table table-hover">
					      	<thead>
					      		<th width="10px">No</th>
					      		<th width="150px">Kode Diagnosas</th>
					      		<th>Diagnosa</th>
					      		<th>Tanggal</th>
					      		<th>Status</th>
					      		<th width="10px"></th>
					      	</thead>
					      	<tbody>
					      	<?php
					      		$i=0;
					      		foreach ($list_diagnosa as $value) {
					      			$i++;
					      			$diagnosa = $this->detail_m->detail_diagnosa($value['diagnosa']);
					      			echo"
					      			<tr>
					      				<td>".$i."</td>
						      			<td>".$diagnosa['kode']."</td>
						      			<td>".$diagnosa['diagnosa']."</td>
						      			<td>".$value['tanggal']."</td>
						      			<td>".$value['status']."</td>
						      			<td><a href='".base_url()."proses/hapus_diagnosa?id=".$value['id']."&noreg=".$this->input->get('reg')."'><span class='lnr lnr-cross-circle' style='font-size: 20px; color: red'></span></a></td>
						      		</tr>";
					      		}
					      	?>
					      	</tbody>
					      </table>
					    </div>


					    <!-- ================================ORDER LAB========================================== -->

					    <div id="tab5" class="tab-pane fade" style="padding: 20px 0 0 0">
					    	<button type="button" class="btn btn-info " data-toggle="modal" data-target="#lab" style="margin-bottom: 15px;">Order Laboratorium</button>
							  
						     <table class="table table-hover">
						      	<thead>
						      		<th width="10px">No</th>
						      		<th>Pemeriksaan</th>
						      		<th>Tarif</th>
						      		<th>Nilai Normal</th>
						      		<th>Hasil</th>
						      		<th>Keterangan</th>
						      		<th width="10"></th>
						      	</thead>
						      	<tbody>
						      	<?php
						      		$i=0;
						      		foreach ($list_reg_lab_items as $value) {
						      		$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
						      		$i++;
						      		echo"
						      		<tr>
						      			<td>".$i."</td>
						      			<td>".$periksalab['nama']."</td>
						      			<td>Rp ".$periksalab['tarif']."</td>
						      			<td>".$value['nilainormal']."</td>
						      			<td>".$value['hasil']."</td>
						      			<td>".$value['keterangan']."</td>
						      			<td><a href='".base_url()."proses/hapus_periksalab?noreg=".$this->input->get('reg')."&id=".$value['id']."'><span class='lnr lnr-cross-circle' style='font-size: 20px; color: red'></span></a></td>
						      		</tr>";
						      		}
						      	?>
						      	</tbody>
						      </table>
						 </div>


						 <!-- ==========================================ORDER RADIO=========================================== -->

						  <div id="tab6" class="tab-pane fade" style="padding: 20px 0 0 0">
					    	<button type="button" class="btn btn-info " data-toggle="modal" data-target="#radiologi" style="margin-bottom: 15px;">Order Radiologi</button>
					    	
						     <table class="table table-hover">
						      	<thead>
						      		<th width="10px">No</th>
						      		<th>Pemeriksaan</th>
						      		<th>Tarif</th>
						      		<th width="10"></th>
						      	</thead>
						      	<tbody>
						      	<?php
						      		$i=0;
						      		foreach ($list_reg_radio_items as $value) {
					      			$periksaradio = $this->detail_m->detail_periksaradio($value['idperiksa']);
						      		$i++;
						      		echo"
						      		<tr>
						      			<td>".$i."</td>
						      			<td>".$periksaradio['nama']."</td>
						      			<td>Rp ".$periksaradio['tarif']."</td>
						      			<td><a href='".base_url()."proses/hapus_periksaradio?noreg=".$this->input->get('reg')."&id=".$value['id']."'><span class='lnr lnr-cross-circle' style='font-size: 20px; color: red'></span></a></td>
						      		</tr>";
						      		}
						      	?>
						      	</tbody>
						      </table>
						  </div>


						  <!-- RUJUK RAWAT INAP -->
						  <div id="tab7" class="tab-pane fade" style="padding: 20px 0 0 0">
					    	<?php echo form_open(base_url().'proses/rujuk_ranap?noreg='.$this->input->get('reg')); ?>
					    		<div class="col-md-2" style="padding: 0">
					    			<div class="form-group">
					    				<label>Tanggal</label>
					    				<input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control">
					    			</div>
					    		</div>
					    		<div class="col-md-2">
					    			<div class="form-group">
					    				<label>Jam</label>
					    				<input type="time" value='<?php echo date('H:i:s'); ?>' name="jam" class="form-control">
					    			</div>
					    		</div>
					    		<div class="col-md-5">
					    			<div class="form-group">
					    				<label>Ruangan</label>
					    				<input type="text" id="namaruangan" required="" readonly="" class="form-control">
					    				<input type="hidden" name="ruangan" id="idruangan" >
					    			</div>
					    		</div>
					    		<div class="col-md-3" style="padding-left: 0; margin-top: 25px;">
							      	<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#ruangan"><span class="fa fa-search"></span> Cari Kamar</button>
							      	<input type="submit" value="Simpan" class="btn btn-success">
							    </div>
					    	<?php echo form_close(); ?>
						  </div>
						</div>
					</div>
	    		</div>
		    </div>
		</div>
  	</div>
</div>
<!-- END MAIN CONTENT -->

<?php $this->load->view('proses/modal-lab') ?>
<?php $this->load->view('proses/modal-radiologi') ?>
<?php $this->load->view('proses/modal-ruangan') ?>


<script type="text/javascript">
	$(document).on('keyup', '#diagnosa', function(e){
		var keyword = $("#diagnosa").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>proses/cari_diagnosa",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					if(json.status == 1){
						$("#hasilpencarian").show();
						$("#hasilpencarian").html(json.datanya);
					}
				}
			});       
		}else{
			$("#hasilpencarian").hide();      
		}
	});


	$(document).on('keyup', '#tindakan', function(e){
		var keyword = $("#tindakan").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>proses/cari_tindakan",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					if(json.status == 1){
						$("#hasilpencarian-tindakan").show();
						$("#hasilpencarian-tindakan").html(json.datanya);
					}
				}
			});       
		}else{
			$("#hasilpencarian-tindakan").hide();      
		}
	});


	$(document).on("click", "#daftar-autocomplete li", function(){
		var iddiagnosa = $(this).find("span#id").html();
		var diagnosa = $(this).find("span#diagnosa").html();
		var kode = $(this).find("span#kode").html();

		$("#iddiagnosa").val(iddiagnosa);
		$("#diagnosa").val(diagnosa);
		$("#kodediagnosa").val(kode);
		$("#hasilpencarian").hide();
	});

	$(document).on("click", "#daftar-autocomplete-tindakan li", function(){
		var id = $(this).find("span#id").html();
		var tindakan = $(this).find("span#tindakan").html();
		var tarif = $(this).find("span#tarif").html();

		$("#idtindakan").val(id);
		$("#tindakan").val(tindakan);
		$("#tariftindakan").val(tarif);
		$("#hasilpencarian").hide();
	});

	$(document).ready(function(){
		$(document).click(function(){
			$("#hasilpencarian").hide();
			$("#hasilpencarian-tindakan").hide();
		});
	});


	
	$(document).ready(function(){
		<?php if(!empty($this->input->get('tab'))){ ?>
			$('.nav-tabs a[href="#<?php echo $this->input->get('tab') ?>"]').tab('show');
		<?php }else{ ?>
			$('.nav-tabs a[href="#tab2').tab('show');
		<?php } ?>
	});


	$(".pilihruangan").click(function() {
		$("#idruangan").val($(this).attr('id'));
		$("#namaruangan").val($(this).attr('nm_ruangan'));
		// alert('ok');
	});

</script>