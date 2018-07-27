<div class="container-fluid">
	<div class="panel panel-default">
		  <div class="panel-body">
				<table id="data" class="table table-striped table-hover">
					<thead>
						<th width="10">No.</th>
						<th>No. REG</th>
						<th>No. RM</th>
						<th>Tanggal</th>
						<th>Nama</th>
						<th>Jenis Rawatan</th>
						<th>Pemeriksaan</th>
						<th width="50"></th>
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
							<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
							<td>".$pasien['nama']."</td>
							<td>".$poliklinik['poliklinik']."</td>
							<td>";
							$items = $this->lab_m->list_items_periksa($value['noreg']);
							foreach ($items as $value2) {
								$item = $this->detail_m->detail_periksalab($value2['idperiksa']);
								echo $item['nama'].", ";
							}
							echo"
							</td>
							<td>
								<a href='".base_url()."laboratorium/memproses_antrian?reg=".$value['noreg']."' class='btn btn-success btn-xs'><span class='icon-energy'></span> Proses</a>
							</td>
						</tr>";
					}
					?>
					</tbody>
				</table>	
			</div>
		</div>
	</div>
