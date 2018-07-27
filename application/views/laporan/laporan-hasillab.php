
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Hasil Laboratorium - SIMRS</title>
</head>
<style type="text/css">
	body{
	margin: auto;
	width: 98%;
}
.head{
	width: auto;
	padding: 20px 10px 5px 0px; 
	margin-bottom: 20px;
}	
	.head .logo{
		float: left;
		width: 90px;
	}
	.head .logo img{
		width: 80px;
	}
	.head .brand{
		padding-left: 20px;
		padding-top: 0px;
		width: 350px;
	}
	.head h2{
		text-align: center;
		margin: 20px 0 0 0;
	}
	.head h3{
		text-align: left;
		margin: 0;
	}

.title h3{
	font-size: 20px;
	text-align: center;
	margin: 10px 10px 0 10px;
	font-weight: bold;
}
.title p{
	text-align: center;
	margin: 0;
	font-size: 13px;
}

#data #lab{
	background: #eee;
	font-weight: bold;
	font-size: 15px;
	border-bottom: 2px solid #000;
}

.data{
	text-transform: uppercase;
	margin-top: 10px;
	border: 1px solid #000;
	padding: 5px;
	font-size: 13px;
}
 .data #d{
 	width: 25%;
 	display: inline;
 }
#data table {
	margin-top: 10px;
	width: 100%;
	font-size: 13px;
	table-layout: fixed;
	border-collapse: collapse;
}
#data table thead{
	font-size: 16px;
	border:1px solid #000;
	text-transform: uppercase;
}
#data table th{
	padding: 5px;	
}
#data table td {
	border-bottom: 1px solid #000;
    text-align: left;
    padding: 5px 10px 5px 10px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.sign{
	width: auto;
	float: right;
	text-align: center;
	margin-top: 20px;
}
	.sign #name{
		margin-top: 80px;
		text-align: center;
	}
</style>
<body>
<div class="head">
	<div class="logo">
		<img src="<?php echo base_url(); ?>assets/img/logo.png">
	</div>
	<div class="brand">
		<h3>RSU. GRAND HERNA</h3>
		<span>Jalan Pasar 3 8, Sunggal, Medan Sunggal, Kota Medan, Sumatera Utara 20128</span><br>
		<span>Telepon : (061) 8459900</span>
	</div>
</div>

<div class="title">
	<h3>HASIL PEMERIKSAAN LABORATORIUM</h3>
</div>

<div class="data">
	<div id="d">
		<table>
			<tbody>
				<tr>
					<td><b>NO REGISTRASI</b></td>
					<td>:</td>
					<td width="300"><?php echo $reg['noreg']; ?></td>
					
					<td><b>Jenis Kelamin</b></td>
					<td>:</td>
					<td><?php echo $pasien['jeniskelamin']; ?></td>
				</tr>
				<tr>
					<td><b>NO REKAM MEDIS</b></td>
					<td>:</td>
					<td><?php echo $reg['norm']; ?></td>
					
					<td><b>Tanggal Periksa</b></td>
					<td>:</td>
					<td><?php echo date_format(date_create($reg_lab['tanggal']),'d M Y'); ?></td>
					
				</tr>
				<tr>
					<td><b>NAMA PASIEN</b></td>
					<td>:</td>
					<td><?php echo $pasien['nama']; ?></td>

					<td><b>Umur</b></td>
					<td>:</td>
					<td><?php echo $umur; ?> Tahun</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div id="data">
	<table>
		<thead>
			<th width="30">No.</th>
			<th width="300">Pemeriksaan</th>
			<th width="180">Hasil</th>
			<th width="80">Satuan</th>
			<th width="180">Nilai Normal</th>
			<th width="180">Keterangan</th>
		</thead>
		<tbody>
			<tr>
				<td colspan="6" id="lab">LABORATORIUM</td>
			</tr>
			<?php
				$i=0;
				foreach ($list_items as $value){
					$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
					$i++;
					echo"
					<tr>
						<td>".$i."</td>
						<td>".$periksalab['nama']."</td>
						<td>".$value['hasil']."</td>
						<td>".$periksalab['satuan']."</td>
						<td>".$value['nilainormal']."</td>
						<td>".$value['keterangan']."</td>
					</tr>";
				}
			?>
		</tbody>
	</table>
</div>


<div class="data">
	<div id="d">
		<table>
			<tbody>
				<tr>
					<td style="text-align: justify;"><b>Keterangan/Kesimpulan :</b>  <?php echo $reg_lab['kesimpulan']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="sign">
	<p><b>UNIT LABORATORIUM</b></p>
	<p id="name">( &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; )</p>
</div>
</body>
</html>
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script>
	jQuery(window).load(function () {
	   	window.print();
    	self.close(); 
	});
</script>