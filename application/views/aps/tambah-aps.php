<style type="text/css">
	label{
		text-align: right;
	}
</style>
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
	    	<div class="panel-body title-pos">
	    		<div class="col-md-12" style="padding: 0;">
		    		<span id="sub-title">Pendaftaran</span>
		    		<h3 class="page-title"><?php echo $title; ?></h3>
	    		</div>
	    	</div>
	 	</div>
		<div class="panel panel-default">
		    	<div class="panel-body">
		    		<form>
			    		<div class="form-group">
			    			<div class="col-md-12"><h4 id="title-group" style="margin-top: -10px;">Data Pasien</h4></div>
			    			<div class="form-group col-md-4">
			    				<label>Nama Lengkap</label>
			    				<input type="text" name="" class="form-control" placeholder="Nama Lengkap">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Jenis Kelamin</label>
			    				<select class="form-control">
			    					<option>Laki - Laki</option>
			    					<option>Perempuan</option>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Tanggal Lahir</label>
			    				<input type="date" name="" class="form-control">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Jaminan Pasien</label>
			    				<select class="form-control">
			    					<option>-</option>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Telp / No. HP</label>
			    				<input type="text" name="" class="form-control" placeholder="Suku">
			    			</div>
			    			<div class="form-group col-md-12">
			    				<label>Alamat</label>
			    				<textarea class="form-control"></textarea>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Kelurahan</label>
			    				<input type="text" name="" class="form-control" placeholder="Kelurahan">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Kecamatan</label>
			    				<input type="text" name="" class="form-control" placeholder="Kecamatan">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Kota</label>
			    				<input type="text" name="" class="form-control" placeholder="Kota">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Provinsi</label>
			    				<input type="text" name="" class="form-control" placeholder="Provinsi">
			    			</div>

			    			<div class="col-md-12"><h4 id="title-group" style="margin-top: 0px;">#</h4></div>
			    			<div class="form-group col-md-4">
			    				<label>Tanggal Masuk</label>
			    				<input type="date" name="" class="form-control" placeholder="Nama Lengkap">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Jam Masuk</label>
			    				<input type="time" name="" class="form-control" placeholder="Nama Lengkap">
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Unit Tujuan</label>
			    				<select class="form-control">
			    					<option>Radiologi</option>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-4">
			    				<label>Cara Bayar</label>
			    				<select class="form-control">
			    					<option>Umum</option>
			    				</select>
			    			</div>
			    			<div class="form-group col-md-8">
			    				<label>Keterangan</label>
			    				<textarea class="form-control"></textarea>
			    			</div>
			    		</div>
			    		<hr>
		    		</form>
					
						<hr>
						<div class="col-md-12">
							<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
							<a href="<?php echo base_url(); ?>aps" class="btn btn-warning"><span class="fa fa-list"> Daftar Pasien</span></a>
							<a href="#" class="btn btn-success"><span class="fa fa-print"> Cetak Struk</span></a>
							<a href="#" class="btn btn-success"><span class="fa fa-print"> Cetak Data Pasien</span></a>
						</div>
						</form>
			    	</div>
				</div>
		  	</div>
		</div>
<!-- END MAIN CONTENT -->