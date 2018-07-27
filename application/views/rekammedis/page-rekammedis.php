<div class="container-fluid">
	<div class="panel panel-default">
		  <div class="panel-body">
				<table id="data" class="table table-striped table-hover">
					<thead>
						<th>No RM</th>
						<th>Nama Pasien</th>
						<th>Jenis Kelamin</th>
						<th>Gol Darah</th>
						<th>Tanggal Lahir</th>
						<th>Telp/No Hp</th>
						<th>Status Menikah</th>
						<th width="10"></th>
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
									<div class='dropdown'>
								        <a href='".base_url()."rekammedis/lihat?norm=".$value['norm']."' class='btn btn-success btn-xs' title='Action'><span class='fa fa-eye'></span> Lihat</a>
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