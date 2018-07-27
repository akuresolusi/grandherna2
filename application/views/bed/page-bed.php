<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Bed</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Tambah Data</span></button></a>
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
					          <h4 class="modal-title">Tambah Tempat Tidur</h4>
					        </div>
					        <div class="modal-body">
					          <div class="container-fluid">
					          	<form>
								  	<div class="form-group">
								  	<div class=" form-group">
								  		<label>Kode Tempat Tidur</label>
								  		<input type="text" class="form-control" placeholder="Kode Tempat Tidur">
								  	</div>
								  	<div class=" form-group">
								  		<label>Kode Ruang Rawat Inap</label>
								  		<select class="form-control" name="goldarah" required="">
								    		<option>- Pilih Ruang Rawat Inap -</option>
								    		<?php
								    			$data_golongan = array('-');
								    			foreach ($data_golongan as $value) {
								    				echo "<option value='".$value."'>".$value."</option>";
								    			}
								    		?>
									    </select>
								  	</div>
								  	<div class=" form-group">
								  		<label>Status</label>
								  		<input type="text" class="form-control" value="Kosong" readonly="">
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
								<th>Kode Tempat Tidur</th>
								<th width="200">Nama Ruangan</th>
								<th width="200">Nama Gedung</th>
								<th>Status</th>
								<th width="10"></th>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>001</td>
									<td>Ruang Mawar</td>
									<td>Gedung Melati</td>
									<td>Kosong</td>
									<td>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='#' data-toggle='modal' data-target='#myModal'><span class='fa fa-eye'> Lihat Data</span></button></a></li>
									            <li><a href='".base_url()."pasien/edit?norm=".$value['norm']."'><span class='fa fa-edit'></span> Edit Data</a></li>
									            <li><a href='".base_url()."pasien/delete?norm=".$value['norm']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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