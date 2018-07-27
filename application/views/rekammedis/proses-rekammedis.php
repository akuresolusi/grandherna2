<div class="container-fluid">
		<div class="panel panel-default">
	    	<div class="panel-body">
	    		<h4 id="sub-title">Data Pasien</h4>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">
		    			<tbody>
		    				<tr>
		    					<td width="130"><b>No. Rekam Medis</b></td>
		    					<td width="15">:</td>
		    					<td><?php echo $pasien['norm'] ?></td>
		    				</tr>
		    				<tr>
		    					<td width="130"><b>No. KTP</b></td>
		    					<td width="15">:</td>
		    					<td><?php echo $pasien['noidentitas'] ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Nama</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['nama'] ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Jenis Kelamin</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['jeniskelamin'] ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Golongan Darah</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['golongandarah'] ?></td>
		    				</tr>
		    			</tbody>
		    		</table>
	    		</div>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">
		    			<tbody>
		    				<tr>
		    					<td width="130"><b>Tempat Lahir</b></td>
		    					<td width="15">:</td>
		    					<td><?php echo $pasien['tempatlahir'] ?></td>
		    				</tr>
		    				<tr>
		    					<td width="130"><b>Tanggal Lahir</b></td>
		    					<td width="15">:</td>
		    					<td><?php echo $pasien['tanggallahir'] ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Nama Ibu</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['namaibu'] ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Agama</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['agama'] ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Status</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['statuskawin'] ?></td>
		    				</tr>
		    			</tbody>
		    		</table>
	    		</div>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">
		    			<tbody>
		    				<tr>
		    					<td width="130"><b>Telp / No.HP</b></td>
		    					<td width="15">:</td>
		    					<td><?php echo $pasien['nohp'] ?></td>
		    				</tr>
		    				<tr>
		    					<td width="130"><b>Pekerjaan</b></td>
		    					<td width="15">:</td>
		    					<td><?php echo $pasien['pekerjaan'] ?></td>
		    				</tr>
		    				<tr>
		    					<td><b>Alamat</b></td>
		    					<td>:</td>
		    					<td><?php echo $pasien['alamat'] ?></td>
		    				</tr>
		    			</tbody>
		    		</table>
	    		</div>
	    	</div>
	    </div>

	    <div class="panel panel-default">
	    	<div class="panel-body">
	    		<div class="col-md-12" style="margin-top:15px;">
				<div class="tabbable-panel">
					<div class="tabbable-line">
	    			<ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#tab1">Rawat Inap</a></li>
					    <li><a data-toggle="tab" href="#tab2">Rawat Jalan</a></li>
					</ul>


					 
					  <div class="tab-content">
					  	<!-- RAWAT INAP -->
					    <div id="tab1" class="tab-pane fade in active" style="padding: 20px 0 0 0">
					      	<table id="data" class="table table-striped table-hover">
								<thead>
									<tr>
										<th width="10">No.</th>
										<th>Tanggal</th>
										<th>Ruangan</th>
										<th>Kelas</th>
										<th>No. Kamar</th>
										<th>Dokter</th>
										<th>Diagnosa</th>
										<th>Biaya</th>
										<th>Detail</th>
									</tr>
								</thead>
								<tbody>
								
								</tbody>
							</table>
					    </div>
					    <!-- END RAWAT INAP -->

					    <!-- RAWAT JALAN -->
					    <div id="tab2" class="tab-pane fade" style="padding: 20px 0 0 0">
					    	<table id="data2" class="table table-striped table-hover">
								<thead>
									<tr>
										<th width="10">No.</th>
										<th>Tanggal</th>
										<th>Poli</th>
										<th>Dokter</th>
										<th>Diagnosis</th>
										<th>Detail</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
										<td>-</td>
										<td></td>
									</tr>
								</tbody>
							</table>
					    </div>
					    <!-- END RAWAT JALAN -->
						</div>
					</div>
	    		</div>
		    </div>
		</div>
<!-- END MAIN CONTENT -->

<!-- DATA TABLES -->
<script>
$(document).ready(function() {
    $('#data2').DataTable({
        "oLanguage": {
            "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
            "sLengthMenu": "_MENU_ &nbsp;&nbsp;",
            "sInfoFiltered": "(difilter dari _MAX_ total data)",
            "sZeroRecords": "Pencarian tidak ditemukan",
            "sEmptyTable": "Data kosong",
            "sLoadingRecords": "Harap Tunggu...",
            "oPaginate": {
                "sPrevious": "Prev",
                "sNext": "Next"
            }
        }
    });
});
</script>
<!-- END DATA TABLES -->
