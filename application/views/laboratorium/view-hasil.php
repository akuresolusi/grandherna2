	<div class="container-fluid">
	 	<div class="col-md-12" style="padding:0; margin: 0px;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="sub-title">Data Pasien</h4>
					<div class="col-md-4" style="padding: 0 0 10px 0">
						<table style="font-size: 15px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="130"><b>No. REG</b></td>
									<td width="10">:</td>
									<td><?php echo $reg['noreg']; ?></td>
								</tr>
								<tr>
									<td><b>No. RM</b></td>
									<td>:</td>
									<td><?php echo $reg['norm']; ?></td>
								</tr>
								<tr>
									<td width="130"><b>Nama Lengkap</b></td>
									<td width="10">:</td>
									<td><?php echo $pasien['nama']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4" style="padding: 0 0 10px 0">
						<table style="font-size: 15px; text-transform: uppercase;">
							<tbody>
								
								<tr>
									<td><b>Jenis Kelamin</b></td>
									<td>:</td>
									<td><?php echo $pasien['jeniskelamin']; ?></td>
								</tr>
								<tr>
									<td width="130"><b>Tanggal Masuk</b></td>
									<td width="10">:</td>
									<td><?php echo date_format(date_create($reg['tanggal']),'d M Y'); ?></td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td>:</td>
									<td><?php echo $pasien['alamat']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4" style="padding: 0 0 10px 0">
						<table style="font-size: 15px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="130"><b>Tempat Lahir</b></td>
									<td width="10">:</td>
									<td><?php echo $pasien['tempatlahir']; ?></td>
								</tr>
								<tr>
									<td width="130"><b>Tanggal Lahir</b></td>
									<td width="10">:</td>
									<td><?php echo date_format(date_create($pasien['tanggallahir']),'d M Y'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
			    </div>
			    </div>
			</div>
		</div>

		<div class="col-md-12">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="sub-title">Hasil Tes Laboratorium</h4>
					
						<div class="form-group col-md-3" style="padding: 0">
							<label>Tanggal Hasil Lab</label>
							<p><?php echo date_format(date_create($reg_lab['tanggalselesai']),'d M Y'); ?></p>
						</div>
						<div class="form-group col-md-3" style="padding: 0">
							<label>Jam Hasil Lab</label>
							<p><?php echo $reg_lab['jamselesai']; ?></p>
						</div>
						<div class="form-group col-md-12" style="padding: 0">
							<label>Pemeriksaan</label>
							<table class="table table-hovered">
								<thead>
									<th width="10px">No</th>
									<th>Pemeriksaan</th>
									<th width="150">Hasil</th>
									<th width="10">Satuan</th>
									<th width="150">Nilai Normal</th>
									<th width="200">Keterangan</th>
								</thead>
								<tbody>
								<?php
									$i=0;
									foreach ($list_items as $value){
										$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
										$i++;
										echo"
										<tr>
											<td>".$i."</td>
											<td>".$periksalab['nama']."</td>
											<td>".$value['hasil']."</td>
											<td>".$periksalab['satuan']."</td>
											<td>".$value['nilainormal']."</td>
											<td>".$value['keterangan']."</td>
										</tr>";
									}
								?>
								</tbody>
							</table>
						</div>
						<div class="form-group col-md-12" style="padding: 0;">
							<label>Keterangan</label>
							<p><?php echo $reg_lab['kesimpulan']; ?></p>
						</div>
						<div class="col-md-12" style="padding: 0;">
							<a onclick="goBack()" class="btn btn-warning"><span class="fa fa-chevron-left"> Kembali</span></a>
							<script>
							function goBack() {
							    window.history.back();
							}
							</script>
							<a href="<?php echo base_url(); ?>laboratorium/cetak_hasil_lab?reg=<?php echo $this->input->get('reg'); ?>" class="btn btn-success" target="_blank"><span class="fa fa-print" > Cetak</span></a>
						</div>
			    </div>
			</div>
	  	</div>
	</div>
</div>
<!-- END MAIN CONTENT -->