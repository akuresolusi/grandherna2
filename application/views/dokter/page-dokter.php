<div class="container-fluid">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-12 nopadding mg-bottom-10">
		  		<a href="<?php echo base_url(); ?>dokter/tambah" class="btn btn-success"><span class="icon-plus"></span> Tambah Data</a>
		  	</div>
			<table id="data" class="table table-striped table-bordered table-hover">
				<thead>
					<th>ID Dokter.</th>
					<th>Nama Dokter</th>
					<th>Jenis Kelamin</th>
					<th>No. Hp</th>
					<th>Spesialis</th>
					<th>Alamat</th>
					<th width="100"></th>
				</thead>
				<tbody>
					<?php
					foreach($list as $value){
						$spesialis = $this->spesialis_m->detail_spesialis($value['spesialis']);
						echo"
						<tr>
							<td>".$value['iddokter']."</td>
							<td>".$value['nama']."</td>
							<td>".$value['jeniskelamin']."</td>
							<td>".$value['nohp']."</td>
							<td>".$spesialis['spesialis']."</td>
							<td>".$value['alamat']."</td>
							<td align='right'>
								<a href='#' class='btn btn-success btn-xs tooltips' data-original-title='Lihat Data'><span class='icon-eye'></span></a>
								<a href='".base_url()."dokter/edit?id=".$value['iddokter']."' class='btn btn-primary btn-xs tooltips' data-original-title='Edit Data'><span class='icon-note'></span></a>
								<a href='".base_url()."dokter/delete?id=".$value['iddokter']."' class='btn btn-danger btn-xs tooltips' data-original-title='Hapus Data'><span class='icon-trash'></span></a>
							</td>
						</tr>";
					}
				?>
				</tbody>
			</table>
			</div>	
		</div>
	</div>
			<!-- END MAIN CONTENT -->