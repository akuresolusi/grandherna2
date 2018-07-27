<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Pembayaran</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6">
					    <span id="sub-total">Total <span style="color: #4183D7">Rp. <?php echo $tagihan; ?></span></span>
					</div>
		    	</div>
		 	</div>
			 	<div class="col-md-6" style="padding:0 20px 0 0; margin: 0px;">
				<div class="panel panel-default">
					  <div class="panel-body">
							<h4 id="s-title">Data Pasien</h4>
							<div class="col-md-12" style="padding: 0 0 10px 0">
								<table style="font-size: 15px; text-transform: uppercase;">
									<tbody>
										<tr>
											<td width="150"><b>No. Registrasi</b></td>
											<td width="10">:</td>
											<td><?php echo $reg['noreg']; ?></td>
										</tr>
										<tr>
											<td><b>No. Rekam Medis</b></td>
											<td>:</td>
											<td><?php echo $reg['norm']; ?></td>
										</tr>
										<tr>
											<td><b>No. KTP</b></td>
											<td>:</td>
											<td><?php echo $pasien['noidentitas']; ?></td>
										</tr>
										<tr>
											<td><b>Nama Lengkap</b></td>
											<td>:</td>
											<td><?php echo $pasien['nama']; ?></td>
										</tr>
										<tr>
											<td><b>Jenis Kelamin</b></td>
											<td>:</td>
											<td><?php echo $pasien['jeniskelamin']; ?></td>
										</tr>
										<tr>
											<td><b>Alamat</b></td>
											<td>:</td>
											<td><?php echo $pasien['alamat']; ?></td>
										</tr>
										<tr>
											<td width="150"><b>Tanggal Masuk</b></td>
											<td width="10">:</td>
											<td>
												<?php echo date_format(date_create($reg['tanggal']),'d M Y'); ?> |
											 	<?php echo $reg['jam']; ?>
											</td>
										</tr>
										<tr>
											<td width="150"><b>Tanggal Keluar</b></td>
											<td width="10">:</td>
											<td>
												<?php echo date_format(date_create($reg['tanggalkeluar']),'d M Y'); ?> |
												<?php echo $reg['jamkeluar']; ?>
											</td>
										</tr>
										<tr>
											<td width="150"><b>Rawat Inap ?</b></td>
											<td width="10">:</td>
											<td>
											<?php
												if($reg['rawatinap'] == "1"){
													echo "Ya";
												}else{ echo "Tidak"; }
											?>
											</td>
										</tr>
										<tr>
											<td width="150"><b>Poli</b></td>
											<td width="10">:</td>
											<td>
											<?php
												$poliklinik = $this->detail_m->detail_poliklinik($reg['poli']);
											 	echo $poliklinik['poliklinik']; 
											 ?>
											</td>
										</tr>
										<tr>
											<td><b>Dokter</b></td>
											<td>:</td>
											<td>Dr. Amran Mulyan dwwa, Sp.OG</td>
										</tr>
										<tr>
											<td><b>Cara Bayar</b></td>
											<td>:</td>
											<td><?php echo $reg['carabayar']; ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			 	<div class="col-md-6" style="padding:0; margin: 0px;">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php echo form_open(base_url().'pembayaran/lunasi_pembayaran?reg='.$this->input->get('reg')); ?>
						<h4 id="s-title">Pembayaran</h4>
						<div class="form-group" style="padding: 0 10px 0 0;">
							<label>Jumlah Bayar</label>
							<input type="number" name="bayar" min="<?php echo $tagihan; ?>" required="" id="bayar" value="<?php echo $pembayaran['bayar']; ?>" class="form-control">
						</div>
						<div class="form-group" style="padding: 0 10px 0 0;">
							<label>Kembalian</label>
							<input type="number" name="kembali" id="kembali" value="<?php echo $pembayaran['kembalian']; ?>" class="form-control" readonly="">
						</div>
						<div class="form-group" style="padding: 0; margin-top: 25px;">
							<button  class="btn btn-success" style="margin-bottom: 13px;" id="btn_bayar"><span class="fa fa-check"> Bayar</span></button>
							<a href="<?php echo base_url(); ?>pembayaran/cetak_pembayaran?reg=<?php echo $reg['noreg']; ?>" target="_blank" class="btn btn-warning" style="margin-bottom: 13px;" disabled id="btn_cetak" ><span class="fa fa-print"> Cetak Pembayaran</span></a>
						</div>
						<?php echo form_close(); ?>
					</div>
					</div>
				</div>



				<div class="col-md-12" style="padding:0; margin: 0px;">
					<div class="panel panel-default">
					  <div class="panel-body">
							<div class="col-md-6" style="padding: 0"><h4 id="s-title">Biaya Lain</h4></div>
							<div class="col-md-6 selesai" style="padding: 0;"><a href="" class="btn btn-danger" style="float: right;" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah</a></div>
							<div class="col-md-12" style="padding: 0 0 10px 0">
								<table class="table table-hover table-bordered table-striped">
									<thead>
										<th width="10">No.</th>
										<th>Keterangan</th>
										<th>Tarif</th>
										<th width="10px"></th>
									</thead>
									<tbody>
									<?php
										$gtotal = 0;
										$i=0;
										$tlainya = 0;
										foreach ($biaya_lainya as $value) {
											$i++;
											$tlainya =  $value['tarif'] + $tlainya;
											echo"
											<tr>
												<td>".$i."</td>
												<td>".$value['keterangan']."</td>
												<td>Rp ".$value['tarif']."</td>
												<td><a href='".base_url()."pembayaran/hapus_lainya?id=".$value['id']."&reg=".$value['noreg']."' class='btn btn-danger btn-xs selesai'><span class='fa fa-remove'> Hapus</span></a></td>
											</tr>";
										}
										$gtotal = $gtotal + $tlainya;
									?>
										<tr>
											<td colspan="2"><b>TOTAL</b></td>
											<td colspan="2"><b>Rp <?php echo $tlainya; ?></b></td>
										</tr>
									</tbody>
								</table>

								<!-- <table class="table table-bordered">
									<tbody>
										<tr>
											<td><b>Total Keseluruhan</b></td>
											<td><b>Rp <?php echo $gtotal; ?></b></td>
										</tr>

									</tbody>
								</table> -->
							</div>
						</div>
					</div>
				</div>



				<div class="col-md-12" style="padding:0; margin: 0px;">
					<div class="panel panel-default">
					  <div class="panel-body">
							<h4 id="s-title">Biaya Tindakan</h4>
							<div class="col-md-12" style="padding: 0 0 10px 0">
								<table class="table table-hover table-bordered table-striped table-striped">
									<thead>
										<th width="10">No.</th>
										<th>Tanggal</th>
										<th>Tindakan</th>
										<th>Tarif</th>
										<th>Qty</th>
										<th>Total</th>
									</thead>
									<tbody>
									<?php
										$i=0;
										$ttindakan = 0;
										foreach ($list_reg_tindakan as $value) {
										$i++;
										$tindakan = $this->detail_m->detail_tindakan($value['tindakan']);
						      			$dokter = $this->detail_m->detail_dokter($value['dokter']);
						      			$paramedis = $this->detail_m->detail_paramedis($value['paramedis']);
						      			$total = $value['tarif'] * $value['qty'];
						      			$ttindakan = $ttindakan + $total;
										echo"
										<tr>
											<td>".$i."</td>
											<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
											<td>".$tindakan['tindakan']."</td>
											<td>Rp ".$value['tarif']."</td>
											<td>".$value['qty']."</td>
											<td>Rp ".$total."</td>
										</tr>";
										}
										$gtotal = $gtotal + $ttindakan;
									?>
										<tr>
											<td colspan="5"><b>TOTAL</b></td>
											<td><b>Rp <?php echo $ttindakan; ?></b></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12" style="padding:0; margin: 0px;">
					<div class="panel panel-default">
					  <div class="panel-body">
							<h4 id="s-title">Biaya Obat</h4>
							<div class="col-md-12" style="padding: 0 0 10px 0">
								<table class="table table-hover table-bordered table-striped">
									<thead>
										<th width="10">No.</th>
										<th>Nama Obat</th>
										<th>Harga</th>
										<th>Jumlah</th>
										<th>Total</th>
									</thead>
									<tbody>
									<?php
										$i=0;
										$tobat = 0;
										foreach ($list_reg_obat as $value) {
											$i++;
											$total = $value['harga'] * $value['qty'];
											$tobat = $total + $tobat;
											$obat = $this->detail_m->detail_obat($value['idobat']);
											echo"
											<tr>
												<td>".$i."</td>
												<td>".$obat['nama']."</td>
												<td>".$value['harga']."</td>
												<td>".$value['qty']."</td>
												<td>Rp ".$total."</td>
											</tr>";
										}
										$gtotal = $gtotal + $tobat;
									?>
										<tr>
											<td colspan="4"><b>TOTAL</b></td>
											<td><b>Rp <?php echo $tobat; ?></b></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-12" style="padding:0; margin: 0px;">
					<div class="panel panel-default">
					  <div class="panel-body">
							<h4 id="s-title">Biaya Radiologi</h4>
							<div class="col-md-12" style="padding: 0 0 10px 0">
								<table class="table table-hover table-bordered table-striped">
									<thead>
										<th width="10">No.</th>
										<th>Nama pemeriksaan</th>
										<th>Tarif</th>
									</thead>
									<tbody>
									<?php
							      		$i=0;
							      		$tradio = 0;
							      		foreach ($list_reg_radio_items as $value) {
						      			$periksaradio = $this->detail_m->detail_periksaradio($value['idperiksa']);
						      			$tradio = $tradio + $periksaradio['tarif'];
							      		$i++;
							      		echo"
							      		<tr>
							      			<td>".$i."</td>
							      			<td>".$periksaradio['nama']."</td>
							      			<td>Rp ".$periksaradio['tarif']."</td>
							      		</tr>";
							      		}
							      		$gtotal = $gtotal + $tradio;
							      	?>
										<tr>
											<td colspan="2"><b>TOTAL</b></td>
											<td><b>Rp <?php echo $tradio; ?></b></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>



				<div class="col-md-12" style="padding:0; margin: 0px;">
					<div class="panel panel-default">
					  <div class="panel-body">
							<h4 id="s-title">Biaya Laboratorium</h4>
							<div class="col-md-12" style="padding: 0 0 10px 0">
								<table class="table table-hover table-bordered table-striped">
									<thead>
										<th width="10">No.</th>
										<th>Nama Pemeriksaan</th>
										<th>Tarif</th>
									</thead>
									<tbody>
									<?php
							      		$i=0;
							      		$tlab = 0;
							      		foreach ($list_reg_lab_items as $value) {
							      		$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
							      		$tlab = $tlab + $periksalab['tarif'];
							      		$i++;
							      		echo"
							      		<tr>
							      			<td>".$i."</td>
							      			<td>".$periksalab['nama']."</td>
							      			<td>Rp ".$periksalab['tarif']."</td>
							      		</tr>";
							      		}
							      		$gtotal = $gtotal + $tlab;
							      	?>
										<tr>
											<td colspan="2"><b>TOTAL</b></td>
											<td><b>Rp <?php echo $tlab; ?></b></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>



				
			</div>
		</div>
	</div>
</div>
			<!-- END MAIN CONTENT -->


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Biaya Lain</h4>
        </div>
        <div class="modal-body">
        	<?php echo form_open(base_url().'pembayaran/tambah_lainya?reg='.$this->input->get('reg')); ?>
	         	<div class="form-group">
	         		<label>Nama Biaya Lain</label>
	         		<input type="text" name="keterangan" required="" class="form-control">
	         	</div>
	         	<div class="form-group">
	         		<label>Harga/Tarif</label>
	         		<input type="number" name="tarif" required="" class="form-control">
	         	</div>
	         	<div class="form-group">
	         		<button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
	         	</div>
         	<?php echo form_close(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>


<script type="text/javascript">
	$("#bayar").change(function() {
		var tagihan = <?php echo $tagihan; ?> ;
		var kembali = $(this).val() - tagihan;
		if(kembali < 0){
			swal({
				title : "Perhatian",
				text : "Jumlah bayar harus sama atau lebih dari tagihan",
				icon : "warning",
			});
			$("#kembali").val('');
			$("#bayar").val('');
		}else{
			$("#kembali").val(kembali);
		}
	});

	<?php
		if($reg['statusbayar'] == "1"){
	?>
	function kondisi(){
		var lunas = <?php echo $reg['statusbayar'] ?>;
		if(lunas == "1"){
			$("#btn_bayar").attr('disabled','');
			$("#btn_cetak").removeAttr('disabled');
			$("#bayar").attr('disabled','');
			$("#kembali").attr('disabled','');
			$(".selesai").hide();
		}
	}
	kondisi();
	<?php } ?>

</script>