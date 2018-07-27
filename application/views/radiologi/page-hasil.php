<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Radiologi</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<tr>
									<th>No</th>
									<th>No Reg</th>
									<th>No RM</th>
									<th>Nama</th>
									<th>Tanggal</th>
									<th>Jenis Rawatan</th>
									<th>Pemeriksaan</th>
									<th width="10"></th>
								</tr>
							</thead>
							<tbody>
							<?php
							$i=0;
							foreach ($list as $value) {
								$i++;
								$reg = $this->detail_m->detail_reg($value['noreg']);
								$pasien = $this->detail_m->detail_pasien($reg['norm']);
								$poliklinik = $this->detail_m->detail_poliklinik($reg['poli']);
								echo"
								<tr>
									<td>".$i."</td>
									<td>".$value['noreg']."</td>
									<td>".$reg['norm']."</td>
									<td>".$pasien['nama']."</td>
									<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
									<td>".$poliklinik['poliklinik']."</td>
									<td>";
									$items = $this->radio_m->list_items_periksa($value['noreg']);
									foreach ($items as $value2) {
										$item = $this->detail_m->detail_periksaradio($value2['idperiksa']);
										echo $item['nama'].", ";
									}
									echo"
									</td>
									<td><a href='".base_url()."radiologi/view_hasil_periksa?reg=".$value['noreg']."' class='btn btn-primary btn-xs'><span class='fa fa-check'></span> Lihat</a></td>
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