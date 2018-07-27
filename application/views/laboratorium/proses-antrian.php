<div class="container-fluid">
	<div class="col-md-12" style="padding:0; margin: 0px;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="sub-title">Data Pasien</h4>
					<div class="col-md-4" style="padding: 0 0 10px 0">
						<table style="font-size: 15px; text-transform: uppercase;">
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
						<table style="font-size: 15px; text-transform: uppercase;">
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

		<div class="col-md-12" style="padding: 0;">
			<div class="panel panel-default">
		    	<div class="panel-body">
					<h4 id="sub-title">Hasil Tes Laboratorium</h4>
					<?php echo form_open(base_url().'laboratorium/simpan_proses_lab?noreg='.$this->input->get('reg')); ?>
						<div class="form-group col-md-6" style="padding: 0">
							<label>Tanggal</label>
							<input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control">
						</div>
						<div class="form-group col-md-6" style="padding-right: 0;">
							<label>Jam</label>
							<input type="time" name="jam" value="<?php echo date('H:i:s'); ?>" class="form-control">
						</div>
						<div class="form-group">
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
											<td><input type='hidden' name='id[]' value='".$value['id']."'>
												<input type='text' name='hasil[]' required value='".$value['hasil']."' class='form-control'>
											</td>
											<td>".$periksalab['satuan']."</td>
											<td><input type='text' name='normal[]' required value='".$value['nilainormal']."' class='form-control'></td>
											<td><input type='text' name='keterangan[]' required value='".$value['keterangan']."' class='form-control'></td>
										</tr>";
									}
								?>
								</tbody>
							</table>
						</div>
						<div class="form-group">
							<label>Kesimpulan</label>
							<textarea class="form-control" name="ket"><?php echo $reg_lab['kesimpulan']; ?></textarea>
						</div>
						<div class="col-md-12" style="padding: 0;">
							<button class="btn btn-success"><span class="fa fa-save"> Simpan</span></button>
						</div>
					<?php echo form_close(); ?>
			    </div>
			</div>
	  	</div>
	</div>
<!-- END MAIN CONTENT -->