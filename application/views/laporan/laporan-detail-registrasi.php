<!DOCTYPE html>
<html>
<head>
	<title>Laporan Registrasi - SIMRS</title>
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
		padding-left: 10px;
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
	#data #title2{
		text-transform: uppercase;
		font-size: 18px;
		padding: 5px 0 5px 8px;
		margin-top: 10px;
		border: 1px solid #000;
		border-bottom: none;
		margin-bottom: -10px;
	}

.data{
	text-transform: uppercase;
	margin-top: 10px;
	border: 1px solid #000;
	font-size: 13px;
}
	.data #title{
		font-size: 18px;
		padding: 5px 0 5px 8px;
		margin: 0;
		border-bottom: 1px solid #000;
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
	border-top: none;
	border: 1px solid #000;
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
	<h3>LAPORAN REGISTRASI HARIAN</h3>
</div>

<div class="data">
	<h3 id="title">Data Pasien</h3>
	<div id="d">
		<table style="padding: 5px;">
			<tbody>
				<tr>
					<td><b>NO REGISTRASI</b></td>
					<td>:</td>
					<td width="150"><?php echo $reg['noreg']; ?></td>

					<td><b>Tempat Lahir</b></td>
					<td>:</td>
					<td width="150"><?php echo $pasien['tempatlahir']; ?></td>

					<td><b>Status</b></td>
					<td>:</td>
					<td<?php echo $pasien['statuskawin']; ?></td>
					
				</tr>
				<tr>
					<td><b>NO REKAM MEDIS</b></td>
					<td>:</td>
					<td><?php echo $reg['norm']; ?></td>
					
					<td><b>Tanggal Lahir</b></td>
					<td>:</td>
					<td><?php echo date_format(date_create($pasien['tanggallahir']),'d M Y'); ?></td>

					<td><b>Telp/No.Hp</b></td>
					<td>:</td>
					<td><?php echo $pasien['nohp']; ?></td>
				</tr>
				<tr>
					<td><b>NO. KTP</b></td>
					<td>:</td>
					<td><?php echo $pasien['noidentitas']; ?></td>

					<td><b>Golongan Darah</b></td>
					<td>:</td>
					<td><?php echo $pasien['golongandarah']; ?></td>

					<td><b>Pekerjaan</b></td>
					<td>:</td>
					<td><?php echo $pasien['pekerjaan']; ?></td>
				</tr>
				<tr>
					<td><b>NAMA PASIEN</b></td>
					<td>:</td>
					<td><?php echo $pasien['nama']; ?></td>

					<td><b>Agama</b></td>
					<td>:</td>
					<td><?php echo $pasien['agama']; ?></td>
				</tr>
				<tr>
					<td><b>Jenis Kelamin</b></td>
					<td>:</td>
					<td><?php echo $pasien['jeniskelamin']; ?></td>

					<td><b>Alamat</b></td>
					<td>:</td>
					<td><?php echo $pasien['alamat']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="data">
	<h3 id="title">Data Penanggung Jawab</h3>
	<div id="d">
		<table style="padding: 5px;">
			<tbody>
				<tr>
					<td><b>Nama Lengkap</b></td>
					<td>:</td>
					<td width="150"><?php echo $reg['namap']; ?></td>

					<td><b>Telp / No. HP</b></td>
					<td>:</td>
					<td width="150"><?php echo $reg['telpp']; ?></td>
					
				</tr>
				<tr>
					<td><b>Hubungan</b></td>
					<td>:</td>
					<td><?php echo $reg['hubunganp']; ?></td>
					
					<td><b>Alamat</b></td>
					<td>:</td>
					<td><?php echo $reg['alamatp']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div class="data">
	<h3 id="title">Data Pendaftaran</h3>
	<div id="d">
		<table style="padding: 5px; margin-top: 0;">
			<tbody>
				<tr>
					<td><b>Cara Masuk</b></td>
					<td>:</td>
					<td width="150"><?php echo $reg['caramasuk']; ?></td>

					<td><b>Poli</b></td>
					<td>:</td>
					<td width="150">
					<?php
						$poliklinik = $this->detail_m->detail_poliklinik($reg['poli']);
						echo $poliklinik['poliklinik'];
					?>				 	
					</td>

					<td><b>Cara Bayar</b></td>
					<td>:</td>
					<td><?php echo $reg['carabayar']; ?></td>
				</tr>
				<tr>
					<td><b>Tanggal Masuk</b></td>
					<td>:</td>
					<td><?php echo date_format(date_create($reg['tanggal']),'d M Y'); ?></td>
					
					<td><b>Kunjungan</b></td>
					<td>:</td>
					<td><?php echo $reg['kunjungan']; ?></td>

					<td><b>Keterangan</b></td>
					<td>:</td>
					<td><?php echo $reg['keterangan']; ?></td>
				</tr>
				<tr>
					<td><b>Jam Masuk</b></td>
					<td>:</td>
					<td><?php echo $reg['jam']; ?></td>

					<td><b>Dokter</b></td>
					<td>:</td>
					<td><?php echo $dokter['nama']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php
 	$cek_tindakan = count($list_reg_tindakan);
 	if($cek_tindakan > 0){
?>

<!-- TINDAKAN -->
<div id="data">
	<h3 id="title2">Tindakan</h3>
	<table>
		<thead>
			<th width="20">No.</th>
			<th width="150">Nama Tindakan</th>
			<th width="80">Tanggal</th>
			<th width="140">Dokter</th>
			<th width="140">Perawat</th>
			<th >Tarif</th>
			<th>Qty</th>
			<th>Total</th>
		</thead>
		<tbody>
		<?php
			$i=0;
			foreach ($list_reg_tindakan as $value) {
			$i++;
			$tindakan = $this->detail_m->detail_tindakan($value['tindakan']);
  			$dokter = $this->detail_m->detail_dokter($value['dokter']);
  			$paramedis = $this->detail_m->detail_paramedis($value['paramedis']);
  			$total = $value['tarif'] * $value['qty'];
			echo"
			<tr>
				<td>".$i."</td>
				<td>".$tindakan['tindakan']."</td>
				<td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
				<td>".$dokter['nama']."</td>
				<td>".$paramedis['nama']."</td>
				<td>Rp ".$value['tarif']."</td>
				<td>".$value['qty']."</td>
				<td>Rp ".$total."</td>
			</tr>";
			}
		?>
		</tbody>
	</table>
</div>
<!-- END TINDAKAN -->
 
<?php } ?>

<?php
	$cek_diagnosa = count($list_reg_diagnosa);
	if($cek_diagnosa > 0){
?>

<!-- DIAGNOSA -->
<div id="data">
	<h3 id="title2">Diagnosa</h3>
	<table>
		<thead>
			<th width="20">No.</th>
			<th width="80">Kode Diagnosa</th>
			<th width="300">Diagnosa</th>
			<th width="100">Tanggal</th>
			<th width="130">Status</th>
		</thead>
		<tbody>
		<?php
      		$i=0;
      		foreach ($list_reg_diagnosa as $value) {
      			$i++;
      			$diagnosa = $this->detail_m->detail_diagnosa($value['diagnosa']);
      			echo"
      			<tr>
      				<td>".$i."</td>
	      			<td>".$diagnosa['kode']."</td>
	      			<td>".$diagnosa['diagnosa']."</td>
	      			<td>".$value['tanggal']."</td>
	      			<td>".$value['status']."</td>
	      		</tr>";
      		}
      	?>
		</tbody>
	</table>
</div>
<!-- END DIAGNOSA -->

<?php } ?>

<?php
	$cek_lab = count($list_reg_lab_items);
	if($cek_lab > 0){
?>

<!-- LABORATORIUM -->
<div id="data">
	<h3 id="title2">Laboratorium</h3>
	<table>
		<thead>
			<th width="20">No.</th>
			<th width="280">Pemeriksaan</th>
			<th width="120">Nilai Normal</th>
			<th width="80">Hasil</th>
			<th width="80">Status</th>
		</thead>
		<tbody>
		<?php
      		$i=0;
      		foreach ($list_reg_lab_items as $value) {
      		$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
      		$i++;
      		echo"
      		<tr>
      			<td>".$i."</td>
      			<td>".$periksalab['nama']."</td>
      			<td>".$value['nilainormal']."</td>
      			<td>".$value['hasil']."</td>
      			<td>".$value['keterangan']."</td>
      		</tr>";
      		}
	      ?>
		</tbody>
	</table>
</div>
<!-- END LABORATORIUM -->

<?php } ?>

<?php
	$cek_radio = count($list_reg_radio_items);
	if($cek_radio > 0){
?>

<!-- RADIOLOGI -->
<div id="data">
	<h3 id="title2">Radiologi</h3>
	<table>
		<thead>
			<th width="20">No.</th>
			<th width="300">Pemeriksaan</th>
		</thead>
		<tbody>
		<?php
      		$i=0;
      		foreach ($list_reg_radio_items as $value) {
  			$periksaradio = $this->detail_m->detail_periksaradio($value['idperiksa']);
      		$i++;
      		echo"
      		<tr>
      			<td>".$i."</td>
      			<td>".$periksaradio['nama']."</td>
      		</tr>";
      		}
      	?>
		</tbody>
	</table>
</div>
<!-- END RADIOLOGI -->
<?php } ?>
<br/>
</body>


<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script>
	jQuery(window).load(function () {
	   	window.print();
    	self.close(); 
	});
</script>

</html>