<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">FORM PROFILE RUMAH SAKIT</h3>
					<div class="panel panel-default">
					    	<div class="panel-body" style="margin-top:10px;">
								<form> 	
								  	<div class=" form-group col-md-6" >
								  		<label>No. Kode RS</label>
								  		<input type="text" class="form-control" placeholder="" disabled>
								  	</div>
								  	<div class=" form-group col-md-6">
								  		<label>Tanggal Registasi</label>
								  		<input type="date" class="form-control">
								  	</div>
								    <div class="form-group col-md-6">
								    	<label>Nama Rumah Sakit</label>
								      	<input type="text" class="form-control" placeholder="Nama Rumah Sakit" style="text-transform: uppercase;">
								    </div>
								    <div class="form-group col-md-3">
								    	<label>Jenis Rumah Sakit</label>
								    	<select class="form-control" name="#">
								    		<option>- Pilih Rumah Sakit -</option>
								    		<?php
								    			$data_golongan = array('RSU','RS Jiwa','RS Bersalin','RS Mata','RS Kanker','RS Tuberkulosa Paru','RS Kusta','RS Penyakit Infeksi','RS Ortopedi','RSK Penyakit Dalam','RSK Bedah','RS Jantung','RSK THT','RS Stroke','RS Anak & Bunda','RS Ibu & Anak','RS Anak','RSK Syarat','RSK Ginjal','RSK Gigi & Mulut');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								    <div class="form-group col-md-3">
								    	<label>Kelas Rumah Sakit</label>
								    	<select class="form-control">
								    	<option>- Pilih Kelas Rumah Sakit -</option>
										  <optgroup label="Kemenkes, Pemprov, Dll">
										    <?php
								    			$data_golongan = array('A','B','C','D','Belum Ditetapkan');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
										  </optgroup>
										  <optgroup label="TNI/POLRI">
										    <?php
								    			$data_golongan = array('A','B','C','D','Belum Ditetapkan');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
										  </optgroup>
										</select> 
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Nama Direktur</label>
								      	<input type="text" class="form-control" placeholder="Nama Direktur Rumah Sakit" style="text-transform: uppercase;">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Nama Penyelenggara</label>
								      	<input type="text" class="form-control" placeholder="Nama Penyelenggara Rumah Sakit" style="text-transform: uppercase;">
								    </div>
								    <div class="form-group col-md-12">
								    	<label>Alamat</label>
								    	<textarea class="form-control" name="alamat" placeholder="Alamat Rumah Sakit"/></textarea>
								    </div>
								    <div class="col-md-2"></div>
								    <div class="form-group col-md-5">
								    	<label>Kab/Kota</label>
								      	<input type="text" class="form-control" placeholder="Kabupaten/Kota">
								    </div>
								    <div class="form-group col-md-5">
								    	<label>Kode POS</label>
								      	<input type="text" class="form-control" placeholder="Kode POS">
								    </div>
								    <div class="col-md-2"></div>
								    <div class="form-group col-md-5">
								    	<label>Telepon</label>
								      	<input type="text" class="form-control" placeholder="Telepon">
								    </div>
								    <div class="form-group col-md-5">
								    	<label>FAX</label>
								      	<input type="text" class="form-control" placeholder="FAX">
								    </div>
								    <div class="col-md-2"></div>
								    <div class="form-group col-md-5">
								    	<label>Email</label>
								      	<input type="text" class="form-control" placeholder="Email">
								    </div>
								    <div class="form-group col-md-5">
								    	<label>No Telp Bag. Umum/Humas</label>
								      	<input type="text" class="form-control" placeholder="No Telp">
								    </div>
								    <div class="col-md-2"></div>
								    <div class="form-group col-md-5">
								    	<label>Website</label>
								      	<input type="text" class="form-control" placeholder="Website">
								    </div>
								    <div class="col-md-12">
								    <fieldset>
								    <legend style="font-size: 18px; font-weight: 600;">Luas Rumah Sakit</legend>
								    <div class="form-group col-md-6">
								    	<label>Tanah</label>
								      	<input type="text" class="form-control" placeholder="Tanah">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Bangunan</label>
								      	<input type="text" class="form-control" placeholder="Bangunan">
								    </div>
									</fieldset>
									</div>
								    <div class="col-md-12">
								    <fieldset>
										<legend style="font-size: 18px; font-weight: 600;">Surat izin / Penetapan</legend>
										<div class="form-group col-md-6">
								    	<label>Nomor</label>
								      	<input type="text" class="form-control" placeholder="Nomor">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Tanggal</label>
								      	<input type="date" class="form-control">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Oleh</label>
								      	<input type="text" class="form-control" placeholder="Oleh">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Sifat</label>
								      	<input type="text" class="form-control" placeholder="Sifat">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Masa Berlaku</label>
								      	<input type="text" class="form-control" placeholder="Masa Berlaku">
								    </div>
									</fieldset>
									</div>
								    
								    <div class="col-md-12" style="margin-bottom: 20px;">
								    <fieldset>
								    	<legend style="font-size: 18px; font-weight: 600;">Akreditasi</legend>
								    <div class="form-group col-md-6">
								    	<label>Akreditasi Rumah Sakit</label>
								    	<select class="form-control" name="#">
								    		<option>- Pilih Akreditas -</option>
								    		<?php
								    			$data_golongan = array('Sudah','Belum');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Pentahapan</label>
								      	<select class="form-control">
								    	<option>- Pilih Pentahapan -</option>
										  <optgroup label="Pelayanan">
										    <?php
								    			$data_golongan = array('5','12','16','Akreditasi Internasional');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
										  </optgroup>
										</select> 
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Status</label>
								      	<select class="form-control">
								    	<option>- Pilih Status -</option>
										    <?php
								    			$data_golongan = array('Penuh','Bersyarat','Gagal');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
										</select> 
								    </div>
								    <div class=" form-group col-md-6">
								  		<label>Tanggal Akreditasi</label>
								  		<input type="date" class="form-control">
								  	</div>
								  	</fieldset>
								  	</div>

								  	<div class="form-group col-md-6">
								    	<label>Jumlah Tempat Tidur</label>
								      	<input type="text" class="form-control" placeholder="Jumlah Tempat Tidur">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Status Penyelenggara Swasta</label>
								    	<select class="form-control" name="#">
								    		<option>- Pilih Status -</option>
								    		<?php
								    			$data_golongan = array('Islam','Katalik','Protestan','Hindu','Budha','Organisasi Sosial','Perusahaan','Perorangan');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Logo Rumah Sakit</label>
								      	<input type="file" class="form-control">
								    </div>
								    <div  class="form-group col-md-12">
								    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
								    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
									</form>
						    	</div>
							</div>
					  	</div>
					</div>
			<!-- END MAIN CONTENT -->