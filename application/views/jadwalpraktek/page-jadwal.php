<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Jadwal</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Tambah Jadwal</span></button></a>
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
					          <h4 class="modal-title">Tambah Jadwal Dokter</h4>
					        </div>
					        <div class="modal-body">
					          <div class="container-fluid">
					          	<form>
								  	<div class="form-group">
								  	<div class=" form-group">
								  		<label>Nama Dokter</label>
								  		<input type="text" class="form-control" placeholder="">
								  	</div>
								  	<div class=" form-group">
								  		<label>Hari</label>
								    	<select class="form-control">
								    		<option>- Pilih Hari -</option>
								    		<option>Senin</option>
									    	<option>Selasa</option>
									    	<option>Rabu</option>
									    	<option>Kamis</option>
									    	<option>Jum'at</option>
									    	<option>Sabtu</option>
									    </select>
								  	</div>
								  	<div class=" form-group">
								  		<label>Jam Mulai</label>
								  		<input type="time" class="form-control" placeholder="">
								  	</div>
								  	<div class=" form-group">
								  		<label>Jam Selesai</label>
								  		<input type="time" class="form-control" placeholder="">
								  	</div>
								  	<div class=" form-group">
								  		<label>Poliklinik</label>
								    	<select class="form-control">
								    		<option>- Pilih Poliklinik -</option>
								    		<option>-</option>
									    </select>
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
					<div class="table-responsive">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th width="10">No.</th>
									<th>Nama Dokter</th>
									<th>Hari</th>
									<th>Jam Mulai</th>
									<th>Jam Selesai</th>
									<th>Poliklink</th>
									<th width="10"></th>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>dr. Agus Setiawan</td>
										<td>Senin - Selasa - Rabu</td>
										<td>12.00</td>
										<td>15.00</td>
										<td>Bayi</td>
										<td>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='#' data-toggle='modal' data-target='#myModal'><span class='fa fa-eye'> Lihat Data</span></button></a></li>
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
		</div>
		

			<!-- END MAIN CONTENT -->