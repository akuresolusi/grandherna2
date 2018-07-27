<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Spesialis</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Tambah Spesialis</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
				  	<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Ruang Inap</h4>
					        </div>
					        <div class="modal-body">
					          <div class="container-fluid">
					          	<form>
								  	<div class="form-group">
								  	<div class=" form-group">
								  		<label>Nama Ruangan</label>
								  		<input type="text" class="form-control" placeholder="Nama Ruangan">
								  	</div>
								  	<div class="form-group">
								    	<label>Gedung Rawat Inap</label> 
								    	<select class="form-control" name="jeniskelamin" required="">
								    		<option>- Pilih Gedung -</option>
									    	<?php
								    			$data_jenis = array('Gedung 1','Gedung 2');
								    			foreach ($data_jenis as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								  	<div class="form-group">
								    	<label>Kelas</label> 
								    	<select class="form-control" name="jeniskelamin" required="">
								    		<option>- Pilih Kelas -</option>
									    	<?php
								    			$data_jenis = array('VIP','Umum','Ekonomi');
								    			foreach ($data_jenis as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								    </div>
								  	<div class=" form-group">
								  		<label>Tarif</label>
								  		<input type="text" class="form-control" placeholder="Tarif">
								  	</div>
								    <div  class="form-group">
								    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
								    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
									</div>
								  	</div>
									</form>
					          </div>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					        </div>
					      </div>
					      
					    </div>
					  </div>
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="10">No.</th>
								<th>Nama Ruangan</th>
								<th>Gedung</th>
								<th>Kelas</th>
								<th>Tarif</th>
								<th width="10"></th>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Melati</td>
									<td>Cendrawasih</td>
									<td>VIP</td>
									<td>Rp. 20.000</td>
									<td>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='#'><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='#'><span class='fa fa-trash'></span> Hapus Data</a></li>
									        </ul>
								    	</div>
									</td>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->