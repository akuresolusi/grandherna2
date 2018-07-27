<div class="container-fluid">
	<div class="panel panel-default">
	  	<div class="panel-body">
		  	<div class="col-md-12 nopadding mg-bottom-10">
		  		<a href="<?php echo base_url(); ?>pasien/tambah" class="btn btn-success btn-action btn-add"><span class="icon-plus"></span> Tambah Data</a>
		  	</div>
					<table id="data" class="table table-striped  table-hover">
						<thead>
							<th>No RM</th>
							<th>Nama Pasien</th>
							<th>Jenis Kelamin</th>
							<th>Gol Darah</th>
							<th>Tanggal Lahir</th>
							<th>Telp/No Hp</th>
							<th>Status Menikah</th>
							<th width="70"></th>
						</thead>
						<tbody>
						<?php
							foreach($list as $value){
								echo"
								<tr>
									<td>".$value['norm']."</td>
									<td>".$value['nama']."</td>
									<td>".$value['jeniskelamin']."</td>
									<td>".$value['golongandarah']."</td>
									<td>".$value['tanggallahir']."</td>
									<td>".$value['nohp']."</td>
									<td>".$value['statuskawin']."</td>
									<td>
										<a href='".base_url()."pasien/edit?norm=".$value['norm']."' class='btn btn-primary btn-xs tooltips' data-original-title='Edit Data''><span class='icon-note'></span></a>
										<a href='#' class='btn btn-danger btn-xs tooltips' data-original-title='Lihat Data'><span class='icon-eye'></span></a>
									</td>
								</tr>";
							}
						?>
						</tbody>
					</table>
					<!-- Details -->
					<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Detail Pasien</h4>
					        </div>
					        <div class="modal-body">
					          <div class="container-fluid">
					          	<div class="table-responsive">
					          		<table class="table table-bordered">
					          			<tr>
					          				<td><label>No.RM</label></td>
					          				<td>das</td>
					          				<td><label>No.Identitas</label></td>
					          				<td>das</td>
					          			</tr>
					          			<tr>
					          				<td><label>Nama</label></td>
					          				<td>das</td>
					          				<td><label>Jenis Kelamin</label></td>
					          				<td>das</td>
					          			</tr>
					          			<tr>
					          				<td><label>Golongan Darah</label></td>
					          				<td>das</td>
					          				<td><label>Tempat Lahir</label></td>
					          				<td>das</td>
					          			</tr>	
					          			<tr>
					          				<td><label>Tanggal Lahir</label></td>
					          				<td>das</td>
					          				<td><label>Nama Ibu</label></td>
					          				<td>das</td>
					          			</tr>
					          			<tr>
					          				<td><label>Alamat</label></td>
					          				<td>das</td>
					          				<td><label>Agama</label></td>
					          				<td>das</td>
					          			</tr>
					          			<tr>
					          				<td><label>Status Kawin</label></td>
					          				<td>das</td>
					          				<td><label>No Hp</label></td>
					          				<td>das</td>
					          			</tr>
					          			<tr>
					          				<td><label>Pekerjaan</label></td>
					          				<td>das</td>
					          			</tr>
					          		</table>
					          	</div>
					          </div>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
					        </div>
					      </div>
					    </div>
					  </div>	
				</div>
			</div>
		</div>