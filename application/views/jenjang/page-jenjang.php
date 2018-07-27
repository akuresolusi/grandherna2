<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-primary">
				<div class="panel-heading page-title">
				<h3>DATA JENJANG</h3>
				</div>
				  <div class="panel-body">
				  	<a href="#"><button class="btn btn-info btn-action" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"> Tambah</span></button></a>
				  	<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Data Jenjang</h4>
					        </div>
					        <div class="modal-body">
					          <div class="container-fluid">
					          	<form>
								  	<div class="form-group">
								  	<div class=" form-group">
								  		<label>Kode Jenjang</label>
								  		<input type="text" class="form-control" placeholder="" readonly="">
								  	</div>
								  	<div class=" form-group">
								  		<label>Nama Jejang</label>
								  		<input type="text" class="form-control" placeholder="">
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
					<a href="#"><button class="btn btn-danger btn-action"><span class="fa fa-refresh"> Refresh</span></button></a>
					<div class="table-responsive">
							<table id="data" class="table table-striped table-bordered table-hover">
								<thead>
									<th>No.</th>
									<th>Kode Jejang</th>
									<th width="500">Nama Jejang</th>
									<th></th>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>J1</td>
										<td>Jejang 1</td>
										<td>
											<button class="btn btn-info btn-xs" ><span class="fa fa-eye"></span></button>
											<button class="btn btn-warning btn-xs"><span class="fa fa-edit"></span></button>
											<button class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></button>
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