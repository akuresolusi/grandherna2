<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Pasien</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="<?php echo base_url(); ?>pegawai/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-user-plus"> Tambah Pegawai</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="10">No.</th>
								<th>Nama Pegawai</th>
								<th>NPWP</th>
								<th>Jabatan</th>
								<th>Departemen</th>
								<th>Bidang</th>
								<th width="10"></th>
							</thead>
							<tbody>
								<tr>
									<td>1.</td>
									<td>Agus Setiawan</td>
									<td>123</td>
									<td>Suster</td>
									<td>BPJS</td>
									<td>Kasir</td>
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
	</div>
</div>
			<!-- END MAIN CONTENT -->