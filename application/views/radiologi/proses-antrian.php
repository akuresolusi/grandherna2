<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
	    	<div class="panel-body title-pos">
	    		<div class="col-md-6" style="padding: 0;">
		    		<span id="sub-title">Radiologi</span>
		    		<h3 class="page-title"><?php echo $title; ?></h3>
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
									<td width="120"><b>No. REG</b></td>
									<td width="15">:</td>
									<td><?php echo $reg['noreg']; ?></td>
								</tr>
								<tr>
									<td><b>No. RM</b></td>
									<td>:</td>
									<td><?php echo $reg['norm']; ?></td>
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
					<div class="col-md-4" style="padding: 0 0 10px 0">
						<table style="font-size: 14px; text-transform: uppercase;">
							<tbody>
								<tr>
									<td width="120"><b>Tanggal Masuk</b></td>
									<td width="15">:</td>
									<td><?php echo date_format(date_create($reg['tanggal']),'d M Y'); ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Lahir</b></td>
									<td>:</td>
									<td><?php echo date_format(date_create($pasien['tanggallahir']),'d M Y'); ?></td>
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
						<table style="font-size: 14px; text-transform: uppercase;">
							<tbody>
								
								<tr>
									<td width="130"><b>Poli</b></td>
									<td width="15">:</td>
									<td><?php
										echo $poliklinik = $this->detail_m->detail_poliklinik($reg['poli'])['poliklinik'];
									?></td>
								</tr>
								<tr>
									<td><b>Rawat Inap ?</b></td>
									<td>:</td>
									<td>
									<?php
										$inap = $reg['rawatinap'];
										if($inap == "1"){
											echo "Ya";
										}else{
											echo "Tidak";
										}
									?>
									</td>
								</tr>
								<tr>
									<td><b>Ruangan</b></td>
									<td>:</td>
									<td>
									<?php
										echo $ruangan = $this->detail_m->detail_ruangan($reg['idruangan'])['nm_ruangan'];
									?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
			    </div>
			</div>
		</div>
		<div class="col-md-12" style="padding:0; margin: 0px;">
			<div class="panel panel-default">
				<?php echo form_open(base_url().'radiologi/simpan_proses_radio?noreg='.$this->input->get('reg')); ?>
		    	<div class="panel-body">
					<h4 id="s-title">Hasil Pemeriksaan Radiologi</h4>
					<div class="form-group col-md-4" style="padding: 0 10px 0 0">
						<label>Tanggal</label>
						<input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control"/>
					</div>
					<div class="form-group col-md-4" style="padding: 0 10px 0 0">
						<label>Jam</label>
						<input type="time" name="jam" value="<?php echo date('H:i:s'); ?>" class="form-control"/>
					</div>
					<div class="form-group col-md-12">
						<label>Pemeriksaan</label>
						<table class="table table-hovered">
							<thead>
								<th width="10px">No</th>
								<th>Pemeriksaan</th>
							</thead>
							<tbody>
							<?php
								$i=0;
								foreach ($list_items as $value){
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
					<div class="form-group col-md-12" style="padding: 0">
						<label>Keterangan</label>
						<textarea class="form-control" name="ket" rows="17"></textarea> 
					</div>
					<div class="form-group col-md-12" style="padding: 0">
						<button class="btn btn-success"> <span class="fa fa-save"> Simpan</span></button> 
						<a href="#" class="btn btn-warning"> <span class="fa fa-print"> Cetak</span></a>
					</div>
					<?php echo form_close(); ?>		    
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END MAIN CONTENT -->
<script>
	$(document).ready(function() {
		$("#txtEditor").Editor();
	});
</script>
