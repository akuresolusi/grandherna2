<div class="container-fluid">
	<div class="panel panel-default">
	    	<div class="panel-body">
				<?php echo form_open(base_url().'pasien/proses_edit') ?>
				  	<div class="form-group">
				  	<div class=" form-group col-md-6">
				  		<label>No. RM</label>
				  		<input type="text" class="form-control" name="norm" value="<?php echo $detail['norm'] ?>" readonly="">
				  	</div>
					<div class=" form-group col-md-6">
				  		<label>No. Indentitas</label>
				  		<input type="text" class="form-control" name="noidentitas" value="<?php echo $detail['noidentitas'] ?>">
				  	</div>
				    <div class="form-group col-md-6">
				    	<label>Nama Lengkap</label>
				      	<input type="text" class="form-control" value="<?php echo $detail['nama'] ?>" name="nama" placeholder="Nama Lengkap">
				    </div>
				    <div class="form-group col-md-3">
				    	<label>Jenis Kelamin</label>
				    	<select class="form-control" name="jeniskelamin">
					    	<?php
				    			$data_jenis = array('Laki-Laki','Perempuan');
				    			foreach ($data_jenis as $value) {
				    				if($detail['jeniskelamin'] == $value){
				    					echo "<option value='".$value."' selected>".$value."</option>";
				    				}else{
				    					echo "<option value='".$value."'>".$value."</option>";
				    				}
				    			}
				    		?>
					    </select>
				    </div>
				    <div class="form-group col-md-3">
				    	<label>Golongan Darah</label>
				    	<select class="form-control" name="goldarah">
				    		<?php
				    			$data_golongan = array('A','B','O','AB');
				    			foreach ($data_golongan as $value) {
				    				if($detail['golongandarah'] == $value){
				    					echo "<option value='".$value."' selected>".$value."</option>";
				    				}else{
				    					echo "<option value='".$value."'>".$value."</option>";
				    				}
				    			}
				    		?>
					    </select>
				    </div>
				    <div class="form-group col-md-6">
				    	<label>Tempat Lahir</label>
				    	<input type="text" class="form-control" value="<?php echo $detail['tempatlahir'] ?>" name="tempatlahir" placeholder="Tempat Lahir">
				    </div>

				    <div class="form-group col-md-6">
				    	<label>Tanggal Lahir</label>
				    	<input type="date" class="form-control" value="<?php echo $detail['tanggallahir'] ?>" name="tanggallahir" placeholder="Tanggal Lahir">
				    </div>
				    <div class="form-group col-md-6">
				    	<label>Nama Ibu</label>
				      	<input type="text" class="form-control" value="<?php echo $detail['namaibu'] ?>" name="namaibu" placeholder="Nama Ibu">
				    </div>
				    <div class="form-group col-md-6">
				    	<label>Agama</label>
				    	<select class="form-control" name="agama">
					    	<?php
				    			$data_agama = array('Islam','Kristen','Katolik','Budha','Hindu','Khongcu','dll');
				    			foreach ($data_agama as $value) {
				    				if($detail['agama'] == $value){
				    					echo "<option value='".$value."' selected>".$value."</option>";
				    				}else{
				    					echo "<option value='".$value."'>".$value."</option>";
				    				}
				    			}
				    		?>
					    </select>
				    </div>
				    <div class="form-group col-md-12">
				    	<label>Alamat</label>
				    	<textarea class="form-control" name="alamat" placeholder="Alamat"/><?php echo $detail['alamat'] ?></textarea>
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Telp/No Hp</label>
				    	<input type="text" class="form-control" value="<?php echo $detail['nohp'] ?>" name="nohp" placeholder="Telp/HP">
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Pekerjaan</label>
				    	<select class="form-control" name="pekerjaan">
					    	<?php
				    			$data_pekerjaan = array('Pelajar','PNS','Karyawan','Wiraswasta','dll');
				    			foreach ($data_pekerjaan as $value) {
				    				if($detail['pekerjaan'] == $value){
				    					echo "<option value='".$value."' selected>".$value."</option>";
				    				}else{
				    					echo "<option value='".$value."'>".$value."</option>";
				    				}
				    			}
				    		?>
					    </select>
				    </div>
				    <div class="form-group col-md-4">
				    	<label>Status</label>
				    	<select class="form-control" name="status">
					    	<?php
				    			$data_pernikahan = array('Menikah','Belum Menikah');
				    			foreach ($data_pernikahan as $value) {
				    				if($detail['statuskawin'] == $value){
				    					echo "<option value='".$value."' selected>".$value."</option>";
				    				}else{
				    					echo "<option value='".$value."'>".$value."</option>";
				    				}
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