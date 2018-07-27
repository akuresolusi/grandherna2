<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-default panel-title">
				    	<div class="panel-body title-pos">
				    		<div class="col-md-6" style="padding: 0;">
					    		<span id="sub-title">Pasien</span>
					    		<h3 class="page-title"><?php echo $title; ?></h3>
				    		</div>
				    	</div>
				 	</div>
					<div class="panel panel-default">
					    	<div class="panel-body">
								<form>
								  	<div class="form-group">
								  	<div class="col-md-6">
								  		<label>Kode Pegawai</label>
								  		<input type="text" class="form-control" placeholder="" disabled>
								  	</div>
								    <div class="form-group col-md-6">
								    	<label>Nama Lengkap</label>
								      	<input type="text" class="form-control" placeholder="Nama Lengkap">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>NPWP</label>
								    	<input type="text" class="form-control" placeholder="NPWP">
								    </div>
								    <div class="form-group col-md-3">
								    	<label>Jenis Kelamin</label>
								    	<select class="form-control">
								    		<option>- Pilih Jenis Kelamin -</option>
									    	<option>Laki - Laki</option>
									    	<option>Perempuan</option>
									    </select>
								    </div>
								    <div class="form-group col-md-3">
								    	<label>Pendidikan</label>
								    	<select class="form-control">
								    		<option>- Pilih Jenjang Pendidikan -</option>
									    	<option>SD</option>
									    	<option>SMP</option>
									    </select>
								    </div>
								    
								    <div class="form-group col-md-6">
								    	<label>Tempat Lahir</label>
								    	<input type="text" class="form-control" placeholder="Tempat Lahir">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Tanggal Lahir</label>
								    	<input type="date" class="form-control" placeholder="Tanggal Lahir">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Telp/No Hp</label>
								    	<input type="text" class="form-control" placeholder="Telp/HP">
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Agama</label>
								    	<select class="form-control">
								    		<option>- Pilih Agama -</option>
									    	<option>Islam</option>
									    	<option>Kristen</option>
									    	<option>Katolik</option>
									    	<option>Budha</option>
									    	<option>Hindu</option>
									    	<option>Khonghucu</option>
									    	<option>Dll</option>
									    </select>
								    </div>
								    <div class="form-group col-md-12">
								    	<label>Alamat</label>
								    	<textarea name="#" class="form-control" placeholder="Alamat"/></textarea>
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Jabatan</label>
								    	<select class="form-control">
								    		<option>- Pilih Jabatan -</option>
								    		<option>-</option>
									    	<option>-</option>
									    </select>
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Jenjang</label>
								    	<select class="form-control">
								    		<option>- Pilih Jenjang -</option>
									    	<option>-</option>
									    	<option>-</option>
									    </select>
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Departemen</label>
								    	<select class="form-control">
								    		<option>- Pilih Departemen -</option>
									    	<option>-</option>
									    	<option>-</option>
									    </select>
								    </div>
								    <div class="form-group col-md-6">
								    	<label>Bidang</label>
								    	<select class="form-control">
								    		<option>- Pilih Bidang -</option>
									    	<option>-</option>
									    	<option>-</option>
									    </select>
								    </div>
								    <div  class="form-group col-md-6">
								    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
								    	<a href="<?php echo base_url(); ?>pegawai" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Pegawai</a>
								    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
									</form>
						    	</div>
							</div>
					  	</div>
					</div>
			<!-- END MAIN CONTENT -->