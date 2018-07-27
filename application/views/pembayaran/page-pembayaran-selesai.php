<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Pembayaran</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<tr>
									<th width="10">No</th>
									<th>No REG</th>
									<th>No RM</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal</th>
									<th>Poli</th>
									<th>Dokter</th>
									<th>Cara Bayar</th>
									<th width="10"></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$i=0;
									foreach ($list_reg as $value) {
									$i++;
									$pasien = $this->detail_m->detail_pasien($value['norm']);
									$dokter = $this->detail_m->detail_dokter($value['dokter']);
									$poliklinik = $this->detail_m->detail_poliklinik($value['poli']);
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['noreg']."</td>
										<td>".$value['norm']."</td>
										<td>".$pasien['nama']."</td>
										<td>".$pasien['jeniskelamin']."</td>
										<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
										<td>".$poliklinik['poliklinik']."</td>
										<td>".$dokter['nama']."</td>
										<td>".$value['carabayar']."</td>
										<td>
											<a href='".base_url()."pembayaran/detail_pembayaran?reg=".$value['noreg']."' class='btn btn-primary btn-xs'><span class='fa fa-check'> Lihat</span></a>
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
	</div>
</div>
			<!-- END MAIN CONTENT -->