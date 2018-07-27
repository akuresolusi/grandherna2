<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
	    	<div class="panel-body title-pos">
	    		<div class="col-md-6" style="padding: 0;">
		    		<span id="sub-title">Poli/IGD</span>
		    		<h3 class="page-title"><?php echo $title; ?></h3>
	    		</div>
	    		<div class="col-md-6 add-data">
	    			<a href="<?php echo base_url(); ?>poli/cetak_detail_registrasi?reg=<?php echo $reg['noreg'] ?>" target="_blank" class="btn btn-primary btn-action btn-add"><span class="fa fa-print"> Cetak</span></a>
	    			<a onclick="goBack()" class="btn btn-warning btn-action btn-add" style="margin-right: 10px;"><span class="fa fa-chevron-left"> Kembali</span></a>
	    		</div>
	    	</div>
	 	</div>
	 	<div class="col-md-12" style="padding:0; margin: 0px;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="s-title">Data Pasien</h4>
					<div class="col-md-4" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="130"><b>No. Registrasi</b></td>
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
							</tbody>
						</table>
					</div>
					<div class="col-md-4" style="padding: 0 10px 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="130"><b>Tempat Lahir</b></td>
									<td width="10">:</td>
									<td><?php echo $pasien['tempatlahir']; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Lahir</b></td>
									<td>:</td>
									<td><?php echo date_format(date_create($pasien['tanggallahir']),'d M Y'); ?></td>
								</tr>
								<tr>
									<td><b>Golongan Darah</b></td>
									<td>:</td>
									<td><?php echo $pasien['golongandarah']; ?></td>
								</tr>
								<tr>
									<td ><b>Agama</b></td>
									<td >:</td>
									<td><?php echo $pasien['agama']; ?></td>
								</tr>
								<tr>
									<td><b>Pekerjaan</b></td>
									<td>:</td>
									<td><?php echo $pasien['pekerjaan']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
						<div class="col-md-4" style="padding: 0 0 10px 0">
							<table style="font-size: 14px; text-transform: uppercase;">
								<tbody>
									<tr>
										<td width="130"><b>Status Menikah</b></td>
										<td width="10">:</td>
										<td><?php echo $pasien['statuskawin']; ?></td>
									</tr>
									<tr>
										<td><b>Telp / No. Hp</b></td>
										<td>:</td>
										<td><?php echo $pasien['nohp']; ?></td>
									</tr>
									<tr>
										<td><b>Alamat</b></td>
										<td>:</td>
										<td><?php echo $pasien['alamat']; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
				    </div>
				</div>
			</div>

		<div class="col-md-4" style="padding: 0; padding-right: 20px;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="s-title">Data Penanggung Jawab</h4>
					<div class="col-md-12" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="130"><b>Nama Lengkap</b></td>
									<td width="10">:</td>
									<td><?php echo $reg['namap']; ?></td>
								</tr>
								<tr>
									<td><b>Hubungan</b></td>
									<td>:</td>
									<td><?php echo $reg['hubunganp']; ?></td>
								</tr>
								<tr>
									<td><b>Telp / No. HP</b></td>
									<td>:</td>
									<td><?php echo $reg['telpp']; ?></td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td>:</td>
									<td><?php echo $reg['alamatp']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
			    </div>
			</div>
	  	</div>

	  	<div class="col-md-8" style="padding: 0;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="s-title">Data Pendaftaran</h4>
					<div class="col-md-6" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="130"><b>Cara Masuk</b></td>
									<td width="10">:</td>
									<td><?php echo $reg['caramasuk']; ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Masuk</b></td>
									<td>:</td>
									<td><?php echo date_format(date_create($reg['tanggal']),'d M Y'); ?></td>
								</tr>
								<tr>
									<td><b>Jam Masuk</b></td>
									<td>:</td>
									<td><?php echo $reg['jam']; ?></td>
								</tr>
								<tr>
									<td><b>Poli</b></td>
									<td>:</td>
									<td><?php
									$poliklinik = $this->detail_m->detail_poliklinik($reg['poli']);
									 echo $poliklinik['poliklinik']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="130"><b>Kunjungan</b></td>
									<td width="10">:</td>
									<td><?php echo $reg['kunjungan']; ?></td>
								</tr>
								<tr>
									<td><b>Dokter</b></td>
									<td>:</td>
									<td><?php echo $dokter['nama']; ?></td>
								</tr>
								<tr>
									<td><b>Cara Bayar</b></td>
									<td>:</td>
									<td><?php echo $reg['carabayar']; ?></td>
								</tr>
								<tr>
									<td><b>Keterangan</b></td>
									<td>:</td>
									<td><?php echo $reg['keterangan']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					
			    </div>
			</div>
	  	</div>


	 <?php
	 	$cek_tindakan = count($list_reg_tindakan);
	 	if($cek_tindakan > 0){
	 ?>

	  	<div class="col-md-12" style="padding: 0;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="s-title">Tindakan</h4>
					<div class="col-md-12" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;" class="table table-hovered">
							<thead>
								<th width="10">No.</th>
								<th>Nama Tindakan</th>
								<th>Tanggal</th>
								<th>Dokter</th>
								<th>Perawat</th>
								<th>Tarif</th>
								<th>Qty</th>
								<th>Total</th>
							</thead>
							<tbody>

							<?php
								$i=0;
								foreach ($list_reg_tindakan as $value) {
								$i++;
								$tindakan = $this->detail_m->detail_tindakan($value['tindakan']);
				      			$dokter = $this->detail_m->detail_dokter($value['dokter']);
				      			$paramedis = $this->detail_m->detail_paramedis($value['paramedis']);
				      			$total = $value['tarif'] * $value['qty'];
								echo"
								<tr>
									<td>".$i."</td>
									<td>".$tindakan['tindakan']."</td>
									<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
									<td>".$dokter['nama']."</td>
									<td>".$paramedis['nama']."</td>
									<td>".$value['tarif']."</td>
									<td>".$value['qty']."</td>
									<td>".$total."</td>
								</tr>";
								}
							?>
							</tbody>
						</table>
					</div>
			    </div>
			</div>
	  	</div>

	  	<?php } ?>

		<?php
			$cek_diagnosa = count($list_reg_diagnosa);
			if($cek_diagnosa > 0){
		?>

	  	<div class="col-md-12" style="padding: 0;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="s-title">Diagnosa</h4>
					<div class="col-md-12" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;" class="table table-hovered">
							<thead>
								<th width="10">No.</th>
								<th>Kode Diagnosa</th>
								<th>Diagnosa</th>
								<th>Tanggal</th>
								<th>Status</th>
							</thead>
							<tbody>
							<?php
					      		$i=0;
					      		foreach ($list_reg_diagnosa as $value) {
					      			$i++;
					      			$diagnosa = $this->detail_m->detail_diagnosa($value['diagnosa']);
					      			echo"
					      			<tr>
					      				<td>".$i."</td>
						      			<td>".$diagnosa['kode']."</td>
						      			<td>".$diagnosa['diagnosa']."</td>
						      			<td>".$value['tanggal']."</td>
						      			<td>".$value['status']."</td>
						      		</tr>";
					      		}
					      	?>
							</tbody>
						</table>
					</div>
			    </div>
			</div>
	  	</div>

	  	<?php } ?>

	  	<?php
			$cek_lab = count($list_reg_lab_items);
			if($cek_lab > 0){
		?>

	  	<div class="col-md-12" style="padding: 0;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="s-title">Laboratorium</h4>
					<div class="col-md-12" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;" class="table table-hovered">
							<thead>
								<th width="10">No.</th>
								<th>Pemeriksaan</th>
								<th>Nilai Normal</th>
								<th>Hasil</th>
								<th>Keterangan</th>
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
					      			<td>".$value['nilainormal']."</td>
					      			<td>".$value['hasil']."</td>
					      			<td>".$value['keterangan']."</td>
					      		</tr>";
					      		}
						      ?>
							</tbody>
						</table>
					</div>
			    </div>
			</div>
	  	</div>

	  	<?php } ?>

	  	<?php
			$cek_radio = count($list_reg_radio_items);
			if($cek_radio > 0){
		?>

	  	<div class="col-md-12" style="padding: 0;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="s-title">Radiologi</h4>
					<div class="col-md-12" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;" class="table table-hovered">
							<thead>
								<th width="10">No.</th>
								<th>Pemeriksaan</th>
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
					      		</tr>";
					      		}
					      	?>
							</tbody>
						</table>
					</div>
			    </div>
			</div>
	  	</div>

	  	<?php } ?>

	</div>
</div>
<!-- END MAIN CONTENT -->


<script>
	function goBack() {
	    window.history.back();
	}
</script>