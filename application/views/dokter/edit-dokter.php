<div class="container-fluid">
<div class="panel panel-default">
    	<div class="panel-body">
			<?php echo form_open(base_url().'dokter/proses_edit') ?>
			  	<div class="form-group"> 	
			  	<div class=" form-group col-md-6">
			  		<label>ID Dokter</label>
			  		<input type="text" class="form-control" name="iddokter" value="<?php echo $detail['iddokter'] ?>">
			  	</div>
			    <div class="form-group col-md-6">
			    	<label>Nama Lengkap</label>
			      	<input type="text" class="form-control" name="nama" value="<?php echo $detail['nama'] ?>">
			    </div>

			    <div class="form-group col-md-3">
			    	<label>Jenis Kelamin</label>
			    	<select class="form-control" name="jeniskelamin" value="<?php echo $detail['jeniskelamin'] ?>">
			    		<option>- Jenis Kelamin -</option>
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
			    	<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir" value="<?php echo $detail['tempatlahir'] ?>">
			    </div>

			    <div class="form-group col-md-4">
			    	<label>Tanggal Lahir</label>
			    	<input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggallahir" value="<?php echo $detail['tanggallahir'] ?>">
			    </div>
			    <div class="form-group col-md-4">
			    	<label>Telp/No Hp</label>
			    	<input type="text" class="form-control" placeholder="Telp/HP" name="nohp" value="<?php echo $detail['nohp'] ?>">
			    </div>
			    <div class="form-group col-md-4">
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
			    	<label>Spesialis</label>
			    	<select class="form-control" name="spesialis">
			    		<?php
			    			// $data_spesialis = array('Anak','Jantung','Bedah');
			    			// foreach ($data_spesialis as $value) {
			    			// 	if($detail['spesialis'] == $value){
			    			// 		echo "<option value='".$value."' selected>".$value."</option>";
			    			// 	}else{
			    			// 		echo "<option value='".$value."'>".$value."</option>";
			    			// 	}
			    			// }

			    			foreach ($list_spesialis as $value) {
			    				if($detail['spesialis'] == $value['id']){
			    					echo "<option value='".$value['id']."' selected>".$value['spesialis']."</option>";
			    				}else{
				    				echo "<option value='".$value['id']."'>".$value['spesialis']."</option>";
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
			    <div class="form-group col-md-4">
			    	<label>No Izin Praktek</label>
			    	<input type="text" class="form-control" placeholder="No Izin Praktek" name="noizin" value="<?php echo $detail['noizinpraktek'] ?>">
			    </div>
			    <div class="form-group col-md-12">
			    	<label>Alumni</label>
			    	<input type="text" class="form-control" placeholder="Alumni" name="alumni" value="<?php echo $detail['alumni'] ?>">
			    </div>
			    <div  class="form-group col-md-6">
			    	<button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
			    	<a href="<?php echo base_url(); ?>dokter" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Pasien</a>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close(); ?>
	    	</div>
		</div>
  	</div>
</div>
			<!-- END MAIN CONTENT -->