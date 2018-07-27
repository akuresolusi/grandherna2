<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Ruangan</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="<?php echo base_url(); ?>ruangan/tambah" class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"> Tambah Ruangan</span></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="10px">No.</th>
								<th>Nama Ruangan</th>
								<th>Kelas</th>
								<th>Kategori</th>
								<th>No. Kamar</th>
								<th>No. TT</th>
								<th>Tarif</th>
								<th>Status Kamar</th>
								<th width="10"></th>
							</thead>
							<tbody>
								<?php
								$i=0;
								foreach($list as $value){
									$kelas = $this->detail_m->detail_kelasruangan($value['id_kelas']);
									$kategori = $this->detail_m->detail_kategoriruangan($value['id_kategoriruangan']);
									
									$status = $value['status_kamar'] ;
									if($status == 1){
										$status = "Terisi";
									}else{
										$status = "Tersedia";
									}

									$i++;
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['nm_ruangan']."</td>
										<td>".$kelas['kelasruangan']."</td>
										<td>".$kategori['kategoriruangan']."</td>
										<td>".$value['nokamar']."</td>
										<td>".$value['nott']."</td>
										<td>".$value['tarif']."</td>
										<td>".$status."</td>
										<td>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='".base_url()."ruangan/edit?id=".$value['id']."'><span class='fa fa-edit'></span> Edit Data</a></li>
										            <li><a href='".base_url()."ruangan/proses_hapus?id=".$value['id']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
										        </ul>
									    	</div>
										</td>
									</tr>";
								}
							?>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		

			<!-- END MAIN CONTENT -->