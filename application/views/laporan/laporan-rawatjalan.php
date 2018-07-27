<!DOCTYPE html>
<html>
<head>
	<title>Laporan Rawat Jalan - SIMRS</title>
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

#data table {
	margin-top: 10px;
    width: 100%;
    font-size: 12px;
    border: 1px solid #000;
    table-layout: fixed;
    border-collapse: collapse;
}
#data table td, table th {
    border: 1px solid #000;
    text-align: left;
    padding: 3px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
#data #poli{
	background: #eee;
	font-weight: bold;
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
	</style>
</head>
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
	<h3>LAPORAN RAWAT JALAN</h3>
	<p><?php echo date_format(date_create($this->input->post('tanggaldari')),'d/m/Y'); ?></span> - <span><?php echo date_format(date_create($this->input->post('tanggalsampai')),'d/m/Y'); ?></span></p>
</div>

<div id="data">
	<table>
		<thead>
			<th width="30px">No.</th>
			<th width="14%">No. REG</th>
			<th width="10%">No. RM</th>
			<th width="10%">Nama</th>
			<th width="10%">Tanggal</th>
			<th width="10%">Jam</th>
			<th width="10%">Cara Bayar</th>
			<th width="20%">Diagnosa</th>
			<th width="10%">Poli</th>
			<th width="10%">Dokter</th>
		</thead>
		<tbody>
		<?php
			foreach ($list_group_poli as $value) {
				$poliklinik = $this->detail_m->detail_poliklinik($value['poli']);
				echo"
				<tr>
					<td colspan='10' id='poli'>Poli : <span>".$poliklinik['poliklinik']."</span></td>
				</tr>";
				$i=0;
				$reg = $this->poli_m->list_daftar_where_poli($value['poli']);
				foreach ($reg as $value2){
					$i++;
					$pasien = $this->detail_m->detail_pasien($value2['norm']);
					$dokter = $this->detail_m->detail_dokter($value2['dokter']);
					$poliklinik = $this->detail_m->detail_poliklinik($value2['poli']);
					
					$row_diagnosa = ""; 
					$diagnosa = $this->poli_m->list_reg_diagnosa($value2['noreg']);
					foreach($diagnosa as $row){
						$item = $this->detail_m->detail_diagnosa($row['diagnosa'])['diagnosa'];
						$row_diagnosa = $row_diagnosa . "<li>" . $item;
					}

					echo"
					<tr valign='top'>
						<td>".$i."</td>
						<td>".$value2['noreg']."</td>
						<td>".$value2['norm']."</td>
						<td>".$pasien['nama']."</td>
						<td>".date_format(date_create($value2['tanggal']),'d M Y')."</td>
						<td>".$value2['jam']."</td>
						<td>".$value2['carabayar']."</td>
						<td>".$row_diagnosa."</td>
						<td>".$poliklinik['poliklinik']."</td>
						<td>".$dokter['nama']."</td>
					</tr>";
				}
			}
		?>
		</tbody>
	</table>
</div>
</body>

<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script>
	jQuery(window).load(function () {
	   	window.print();
	   	window.location.href = "<?php echo base_url('laporan') ?>"; 
	});
</script>

</html>