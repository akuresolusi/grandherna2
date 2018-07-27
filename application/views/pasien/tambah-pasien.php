<div class="container-fluid">
		<div class="panel panel-default">
		    	<div class="panel-body">
					<?php echo form_open(base_url().'pasien/proses_tambah') ?>
					  	<div class="form-group">
					  	<div class=" form-group col-md-6">
					  		<label>No. RM</label>
					  		<input type="text" class="form-control" name="norm" value="<?php echo $norm; ?>" readonly="">
					  	</div>
					  	<div class=" form-group col-md-6">
					  		<label>No. Indentitas</label>
					  		<input type="text" class="form-control" name="noidentitas" placeholder="KTP/NPWP" required="">
					  	</div>
					  	<div class="col-md-12"></div>
					    <div class="form-group col-md-6">
					    	<label>Nama Lengkap</label>
					      	<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="">
					    </div>
					    <div class="form-group col-md-3">
					    	<label>Jenis Kelamin</label> 
					    	<select class="form-control" name="jeniskelamin" required="">
					    		<option>- Jenis Kelamin -</option>
						    	<?php
					    			$data_jenis = array('Laki-Laki','Perempuan');
					    			foreach ($data_jenis as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="form-group col-md-3">
					    	<label>Golongan Darah</label>
					    	<select class="form-control" name="goldarah" required="">
					    		<option>- Pilih Golongan Darah -</option>
					    		<?php
					    			$data_golongan = array('A','B','O','AB');
					    			foreach ($data_golongan as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="form-group col-md-6">
					    	<label>Tempat Lahir</label>
					    	<input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir" required="">
					    </div>

					    <div class="form-group col-md-6">
					    	<label>Tanggal Lahir</label>
					    	<input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir" required="">
					    </div>
					    <div class="form-group col-md-6">
					    	<label>Nama Ibu</label>
					      	<input type="text" class="form-control" name="namaibu" placeholder="Nama Ibu" required="">
					    </div>
					    <div class="form-group col-md-6">
					    	<label>Agama</label>
					    	<select class="form-control" name="agama" required="">
					    		<option>- Pilih Agama -</option>
						    	<?php
					    			$data_agama = array('Islam','Kristen','Katolik','Budha','Hindu','Khongcu','dll');
					    			foreach ($data_agama as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="form-group col-md-12">
					    	<label>Alamat</label>
					    	<textarea class="form-control" name="alamat" placeholder="Alamat" required="" /></textarea>
					    </div>
					    <div class="form-group col-md-4">
					    	<label>Telp/No Hp</label>
					    	<input type="text" class="form-control" name="nohp" placeholder="Telp/HP required">
					    </div>
					    <div class="form-group col-md-4">
					    	<label>Pekerjaan</label>
					    	<select class="form-control" name="pekerjaan" required="">
						    	<?php
					    			$data_pekerjaan = array('Pelajar','PNS','Karyawan','Wiraswasta','dll');
					    			foreach ($data_pekerjaan as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="form-group col-md-4">
					    	<label>Status</label>
					    	<select class="form-control" name="status" required="">
						    	<?php
					    			$data_pernikahan = array('Menikah','Belum Menikah');
					    			foreach ($data_pernikahan as $value) {
					    				echo "<option value='".$value."'>".$value."</option>";
					    			}
					    		?>
						    </select>
					    </div>
					    <div class="form-group col-md-6">
					    	<button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
					    	<a href="<?php echo base_url(); ?>pasien" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Pasien</a>
					    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
						</div>
					  	</div>
						<?php echo form_close(); ?>
			    	</div>
				</div>
		  	</div>
		</div>