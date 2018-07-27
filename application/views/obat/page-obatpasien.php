<div class="container-fluid">
	<div class="panel panel-default">
		<div class="panel-body">
			<table id="data" class="table table-striped table-hover">
				<thead>
					<tr>
						<th width="10">No.</th>
						<th>No. REG</th>
						<th>No. RM</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal</th>
						<th>Rawat Inap ?</th>
						<th>Cara Bayar</th>
						<th width="50"></th>
					</tr>
				</thead>
				<tbody>
				<?php
					$i=0;
					foreach ($list as $value) {
						$i++;
						$ranap = $value['rawatinap'];
						if($ranap == 1){
							$ranap = "YA";
						}else{
							$ranap = "Tidak";
						}
						$pasien = $this->detail_m->detail_pasien($value['norm']);
						echo"
						<tr>
							<td>".$i."</td>
							<td>".$value['noreg']."</td>
							<td>".$value['norm']."</td>
							<td>".$pasien['nama']."</td>
							<td>".$pasien['jeniskelamin']."</td>
							<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
							<td>".$ranap."</td>
							<td>".$value['carabayar']."</td>
							<td>
								<a href='".base_url()."obatpasien/proses?reg=".$value['noreg']."' class='btn btn-success btn-xs'><span class='icon-energy'> Proses</span</a>
							</td>
						</tr>";
					}
				?>
				</tbody>
			</table>  
		</div>
	</div>
</div>
