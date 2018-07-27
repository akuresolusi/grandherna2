<!-- RADIOLOGI MODAL -->
<div class="modal fade" id="ruangan" role="dialog">
	<div class="modal-dialog modal-lg">
	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Pilih Ruangan</h4>
	    </div>
	    <div class="modal-body">
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
								foreach($list_ruangan as $value){
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
											<a class='btn btn-primary btn-xs pilihruangan' data-dismiss='modal' 
											id='".$value['id']."' 
											nm_ruangan='".$value['nm_ruangan']."' 
											><span class='fa fa-check'> Pilih</span></a>
										</td>
									</tr>";
								}
							?>
							</tbody>
						</table>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	  
	</div>
</div>