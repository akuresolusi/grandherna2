<div class="container-fluid">
	<div class="panel panel-default">
	    	<div class="panel-body">
				<?php echo form_open(base_url().'dokter/proses_tambah') ?>
				  	<div class=" form-group col-md-6">
				  		<label>ID Dokter</label>
				  		<input type="text" class="form-control" name="iddokter" required="">
				  	</div>
				    <div class="form-group col-md-6">
				    	<label>Nama Lengkap</label>
				      	<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required="">
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
				    	<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir" required="">
				    </div>

				    <div class="form-group col-md-4">
				    	<label>Tanggal Lahir</label>
				    	<input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggallahir" required="">
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Telp/No Hp</label>
				    	<input type="text" class="form-control" placeholder="Telp/HP" name="nohp" required="">
				    </div>
				    <div class="form-group col-md-4">
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
				    	<textarea name="alamat" class="form-control" placeholder="Alamat" required="" /></textarea>
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Spesialis</label>
				    	<select class="form-control" name="spesialis" required="">
				    		<option>- Pilih Spesialis -</option>
					    	<?php
				    			// $data_spesialis = array('Anak','Jantung','Bedah');
				    			// foreach ($data_spesialis as $value) {
				    			// 	echo "<option value='".$value."'>".$value."</option>";
				    			// }

					    		foreach ($list_spesialis as $value) {
					    			echo "<option value='".$value['id']."'>".$value['spesialis']."</option>";
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
				    <div class="form-group col-md-4">
				    	<label>No Izin Praktek</label>
				    	<input type="text" class="form-control" placeholder="No Izin Praktek" name="noizin" required="">
				    </div>
				    <div class="form-group col-md-12">
				    	<label>Alumni</label>
				    	<input type="text" class="form-control" placeholder="Alumni" name="alumni" required="">
				    </div>
				    <div  class="form-group col-md-6">
				    	<button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
				    	<a href="<?php echo base_url(); ?>dokter" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Pasien</a>
				    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
					</div>
				  	</div>
					</form>
		    	</div>
			</div>
	  	</div>
	</div>
			<!-- END MAIN CONTENT -->