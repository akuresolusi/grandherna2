
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>

<link href="<?php echo base_url(); ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo base_url(); ?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo base_url(); ?>assets/layouts/layout/css/custom.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>

<!-- MAIN CONTENT -->

<div class="panel-body" style="background: #fff;>
	<?php echo form_open(base_url().'pasien/proses_tambah2') ?>
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
	    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
		</div>
	  	</div>
		<?php echo form_close(); ?>
	</div>
</div>

	<!-- END MAIN CONTENT -->


<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>