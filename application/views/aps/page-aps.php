<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Pendaftaran</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="<?php echo base_url(); ?>aps/tambah"><button class="btn btn-primary btn-action btn-add"><span class="fa fa-user-plus"> Tambah Pasien</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
							<table id="data" class="table table-striped table-bordered table-hover">
								<thead>
									<th width="10">No.</th>
									<th>Nama Lengkap</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Jaminan Pasien</th>
									<th>Tanggal Masuk</th>
									<th>Unit Tujuan</th>
									<th></th>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>M. Nurahman</td>
										<td>Laki - Laki</td>
										<td>20 Mar 2018</td>
										<td>Umum</td>
										<td>19 Mar 2018</td>
										<td>Radiologi</td>
										<td>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='barang/lihatdata'><span class='fa fa-eye'></span> Lihat Data</a></li>
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
</div>
			<!-- END MAIN CONTENT -->