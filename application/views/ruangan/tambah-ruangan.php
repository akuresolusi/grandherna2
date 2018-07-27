<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Ruangan</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
			    	<div class="panel-body">
						<?php echo form_open(base_url().'ruangan/proses_tambah') ?>
						  	<div class="form-group">
						  	<div class=" form-group col-md-4">
						  		<label>Nama Ruangan</label>
						  		<input type="text" class="form-control" name="nm_ruangan" placeholder="Nama Ruangan" required="">
						  	</div>
						  	<div class="form-group col-md-4">
						    	<label>Kelas</label> 
						    	<select class="form-control" name="id_kelas" required="">
							    	<?php
						    			foreach ($list_kelas as $value){
						    				echo "<option value='".$value['id']."'>".$value['kelasruangan']."</option>";
						    			}
						    		?>
							    </select>
						    </div>
						    <div class="form-group col-md-4">
						    	<label>Kategori</label> 
						    	<select class="form-control" name="id_kategoriruangan" required="">
							    	<?php
						    			foreach ($list_kategori as $value){
						    				echo "<option value='".$value['id']."'>".$value['kategoriruangan']."</option>";
						    			}
						    		?>
							    </select>
						    </div>
						    <div class=" form-group col-md-4">
						  		<label>No. Kamar</label>
						  		<input type="text" class="form-control" name="nokamar" placeholder="No. Kamar">
						  	</div>
						  	<div class=" form-group col-md-4">
						  		<label>No. Tempat Tidur</label>
						  		<input type="text" class="form-control" name="nott" placeholder="No. Tempat Tidur">
						  	</div>
						  	<div class=" form-group col-md-4">
						  		<label>Tarif</label>
						  		<input type="text" class="form-control" name="tarif" placeholder="Tarif">
						  	</div>
						  	<div class="form-group col-md-4">
						    	<label>Status Kamar</label> 
						    	<select class="form-control" name="status_kamar" required="">
							    	<option value="0">Tersedia</option>
							    	<option value="1">Terisi</option>
							    </select>
						    </div>
						    <div class="form-group col-md-12">
						    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
						    	<a href="<?php echo base_url(); ?>ruangan" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Ruangan</a>
						    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
							</div>
						  	</div>
							<?php echo form_close(); ?>
				    	</div>
					</div>
			  	</div>
			</div>
		</div>
	<!-- END MAIN CONTENT -->