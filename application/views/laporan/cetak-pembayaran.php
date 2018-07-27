<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembayaran - SIMRS</title>
</head>
<style type="text/css">
	body{
	margin: auto;
	width: 99%;
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
#grand-total{
	font-size: 20px; text-transform: uppercase; font-weight: bold;
}
#grand-total-number{
	font-size: 20px; font-weight: bold; float: right;
}
#total-obat{
	font-size: 15px; font-weight: bold; text-transform: uppercase;
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
	<h3>BUKTI PEMBAYARAN</h3>
</div>

<div class="data">
	<h3 id="title">Data Pasien</h3>
	<div id="d">
		<table style="padding: 5px;">
			<tbody>
				<tr>
					<td><b>NO REGISTRASI</b></td>
					<td>:</td>
					<td width="250"><?php echo $reg['noreg']; ?></td>

					<td><b>Tanggal</b></td>
					<td>:</td>
					<td><?php echo date_format(date_create($reg['tanggal']),'d M Y'); ?> |
						<?php echo $reg['jam']; ?>
					</td>
					
				</tr>
				<tr>
					<td><b>NO REKAM MEDIS</b></td>
					<td>:</td>
					<td><?php echo $reg['norm']; ?></td>
					
					<td><b>Poli</b></td>
					<td>:</td>
					<td>
						<?php
							$poliklinik = $this->detail_m->detail_poliklinik($reg['poli']);
						 	echo $poliklinik['poliklinik']; 
						 ?>
					</td>
					
				</tr>
				<tr>
					<td><b>NO. KTP</b></td>
					<td>:</td>
					<td><?php echo $pasien['noidentitas']; ?></td>

					<td><b>Dokter</b></td>
					<td>:</td>
					<td><?php echo $dokter=$this->detail_m->detail_dokter($reg['dokter'])['nama']; ?></td>
					
				</tr>
				<tr>
					<td><b>NAMA Lengkap</b></td>
					<td>:</td>
					<td><?php echo $pasien['nama']; ?></td>

					<td><b>Tgl Keluar</b></td>
					<td>:</td>
					<td>
						<?php echo date_format(date_create($reg['tanggalkeluar']),'d M Y'); ?> |
						<?php echo $reg['jamkeluar']; ?>
					</td>
				</tr>

				<tr>
					<td><b>Jenis Kelamin</b></td>
					<td>:</td>
					<td width="150"><?php echo $pasien['jeniskelamin']; ?></td>

					<td><b>Rawat Inap ?</b></td>
					<td>:</td>
					<td>
						<?php
							if($reg['rawatinap'] == "1"){
								echo "Ya";
							}else{ echo "Tidak"; }
						?>
					</td>
					
				</tr>
				<tr>
					<td><b>Alamat</b></td>
					<td>:</td>
					<td width="150"><?php echo $pasien['alamat']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>



<?php
	$jlh = count($list_reg_tindakan);
	if($jlh >= 1){
?>
<!-- BIAYA TINDAKAN -->
<div id="data">
	<h3 id="title2">Biaya Tindakan</h3>
	<table>
		<tbody>
			<?php
				foreach ($list_reg_tindakan as $value) {
				$tindakan = $this->detail_m->detail_tindakan($value['tindakan']);
      			$dokter = $this->detail_m->detail_dokter($value['dokter']);
      			$paramedis = $this->detail_m->detail_paramedis($value['paramedis']);
      			$total = $value['tarif'] * $value['qty'];
				echo"
				<tr>
					<td>".$tindakan['tindakan']."</td>
					<td>Rp ".$value['tarif']."</td>
					<td>".$value['qty']."</td>
					<td width='150px'>Rp ".$total."</td>
				</tr>";
				}
			?>
		</tbody>
	</table>
</div>
<!-- END BIAYA TINDAKAN -->

<?php } ?>


<?php
	$jlh = count($list_reg_obat);
	if($jlh >= 1){
?>
<!-- BIAYA OBAT -->
<div id="data">
	<h3 id="title2">Biaya Obat</h3>
	<table>
		<tbody>
		<?php
			foreach ($list_reg_obat as $value) {
				$total = $value['harga'] * $value['qty'];
				$obat = $this->detail_m->detail_obat($value['idobat']);
				echo"
				<tr>
					<td>".$obat['nama']."</td>
					<td>Rp ".$value['harga']."</td>
					<td>".$value['qty']."</td>
					<td width='150px'>Rp ".$total."</td>
				</tr>";
			}
		?>
		</tbody>
	</table>
</div>
<!-- END BIAYA OBAT -->
<?php } ?>


<?php
	$jlh = count($biaya_lainya);
	if($jlh >= 1){
?>
<!-- BIAYA LAIN -->
<div id="data">
	<h3 id="title2">Biaya Lain</h3>
	<table>
		<tbody>
			<?php
				foreach ($biaya_lainya as $value) {
					echo"
					<tr>
						<td>".$value['keterangan']."</td>
						<td width='150px'>Rp ".$value['tarif']."</td>
					</tr>";
				}
			?>
		</tbody>
	</table>
</div>
<!-- END BIAYA LAIN -->
<?php } ?>

<?php
	$jlh = count($biaya_lab);
	if($jlh >= 1){
?>
<!-- BIAYA LAIN -->
<div id="data">
	<h3 id="title2">Biaya Laboratorium</h3>
	<table>
		<tbody>
			<?php
				foreach ($biaya_lab as $value) {
					$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
					echo"
					<tr>
						<td>".$periksalab['nama']."</td>
						<td width='150px'>Rp ".$periksalab['tarif']."</td>
					</tr>";
				}
			?>
		</tbody>
	</table>
</div>
<!-- END BIAYA LAIN -->
<?php } ?>


<?php
	$jlh = count($biaya_radio);
	if($jlh >= 1){
?>
<!-- BIAYA LAIN -->
<div id="data">
	<h3 id="title2">Biaya Radiologi</h3>
	<table>
		<tbody>
			<?php
				foreach ($biaya_radio as $value) {
					$periksaradio = $this->detail_m->detail_periksaradio($value['idperiksa']);
					echo"
					<tr>
						<td>".$periksaradio['nama']."</td>
						<td width='150px'>Rp ".$periksaradio['tarif']."</td>
					</tr>";
				}
			?>
		</tbody>
	</table>
</div>
<!-- END BIAYA LAIN -->
<?php } ?>




<!-- TOTAL -->
<div id="data">
<table>
		<tbody>
			<tr>
				<td style="border-right: none;"><span id="grand-total">Grand Total</span></td>
				<td style="border-left: none;"><span id="grand-total-number">Rp. <?php  echo $tagihan;?></span></td>
			</tr>
			<tr>
				<td style="text-align: right;" colspan="2">
					Medan, <?php echo date('d M Y'); ?><br/><br/><br/><br/>
					(&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp;)
				</td>
			</tr>
		</tbody>
	</table>
</div>
<!-- END TOTAL -->
</html>


<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script>
	jQuery(window).load(function () {
	   	window.print();
    	self.close(); 
	});
</script>