<div class="container-fluid">
			<div class="panel panel-default">
				  <div class="panel-body">
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th>No</th>
									<th>No. REG</th>
									<th>No RM</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal</th>
									<th>Poli</th>
									<th>Dokter</th>
									<th>Cara Bayar</th>
									<th width="50"></th>
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
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='".base_url()."poli/detail_registrasi?reg=".$value['noreg']."'><span class='fa fa-eye'> Lihat Data</span></button></a></li>
									            <li><a href='".base_url()."poli/hapus_registrasi?noreg=".$value['noreg']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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
	</div>
</div>
<!-- END MAIN CONTENT -->