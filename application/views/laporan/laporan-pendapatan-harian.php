<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pendapatan - SIMRS</title>
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
	font-size: 15px;
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
	<h3>LAPORAN PENDAPATAN HARIAN</h3>
	<p><?php echo date_format(date_create($this->input->post('tanggal')),'d M Y'); ?></p>
</div>


<!-- BIAYA TINDAKAN -->
<div id="data">
	<table>
		<thead>
			<th width="20">No.</th>
			<th width="100">No. REG</th>
			<th width="100">No. RM</th>
			<th width="150">Nama Lengkap</th>
			<th width="100">Poli</th>
			<th width="100">Cara Bayar</th>
			<th width="100">Sub Total</th>
		</thead>
		<tbody>
		<?php
			
			$gtotal = 0;
			$i=0;
			foreach ($pembayaran as $value){
				$reg = $this->detail_m->detail_reg($value['noreg']);
				$pasien = $this->detail_m->detail_pasien($reg['norm']);
				$poliklinik = $this->detail_m->detail_poliklinik($reg['poli']);
				$i++;

				// Cek Tagihan
				$register = $value['noreg'];
				$tindakan = $this->proses_m->list_reg_tindakan($register);
				$obat = $this->pembayaran_m->list_reg_obat($register);
				$lainya = $this->pembayaran_m->list_biaya_lainya($register);
				$lab = $this->proses_m->list_reg_lab_items($register);
				$radio = $this->proses_m->list_reg_radio_items($register);
				$ttindakan = 0;
				$tobat = 0;
				$tlainya = 0;
				$tlab = 0;
				$tradio = 0;
				foreach ($tindakan as $value) {
					$ttindakan = ($value['tarif'] * $value['qty']) + $ttindakan;
				}
				foreach ($lainya as $value) {
					$tlainya = $value['tarif'] + $tlainya;
				}
				foreach ($obat as $value) {
					$tobat = ($value['harga'] * $value['qty']) + $tobat;
				}
				foreach ($lab as $value) {
					$periksalab = $this->detail_m->detail_periksalab($value['idperiksa']);
					$tlab = $periksalab['tarif'] + $tlab;
				}
				foreach ($radio as $value) {
					$periksaradio = $this->detail_m->detail_periksaradio($value['idperiksa']);
					$tradio = $periksaradio['tarif']  + $tradio;
				}
				$tagihan = $ttindakan + $tlainya + $tobat + $tlab + $tradio;
				
				// set grand Total
				$gtotal = $gtotal + $tagihan;	
				
				echo"
				<tr>
					<td>".$i."</td>
					<td>".$value['noreg']."</td>
					<td>".$reg['norm']."</td>
					<td>".$pasien['nama']."</td>
					<td>".$poliklinik['poliklinik']."</td>
					<td>".$reg['carabayar']."</td>
					<td>Rp ".$tagihan."</td>
				</tr>";
			}
		?>
		</tbody>
	</table>
</div>
<!-- END BIAYA TINDAKAN -->

<!-- TOTAL -->
<div id="data">
<table>
		<tbody>
			<tr>
				<td style="border-right: none;"><span id="grand-total">Grand Total</span></td>
				<td style="border-left: none;"><span id="grand-total-number">Rp. <?php echo $gtotal; ?></span></td>
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
    	window.history.back();
	});
</script>