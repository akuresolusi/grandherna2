
<style type="text/css">

  #hasilpencarian{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 200px;
    width: 314px;
    overflow: auto;
    border:1px solid #ddd;
    z-index: 1;
  }

  #daftar-autocomplete{ 
    list-style:none; 
    margin:0; 
    padding:0; 
    width:100%;
  }

  #daftar-autocomplete li{
    padding: 5px 10px 5px 10px; 
    background:#FAFAFA; 
    border-bottom:#ddd 1px solid;
  }

  #daftar-autocomplete li:hover, 
  #daftar-autocomplete li.autocomplete_active{ 
    background:#6bb9f0; 
    color:#fff; 
    cursor: pointer;
  }   

</style>

	<div class="container-fluid">
		<div class="panel panel-default">
	    	<div class="panel-body">
	    		<div class="col-md-12 nopadding mg-bottom-10">
		    		<a href="<?php echo base_url(); ?>obatpasien" class="btn btn-success btn-action btn-add"><span class="icon-check"> </span> Selesai</a>
		    	</div>
	    		<h4 id="sub-title">Data Pasien</h4>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase; margin-bottom: 10px;">
		    			<tbody>
		    				<tr>
									<td width="120"><b>No. REG</b></td>
									<td width="15">:</td>
									<td><?php echo $reg['noreg']; ?></td>
								</tr>
								<tr>
									<td><b>No. RM</b></td>
									<td>:</td>
									<td><?php echo $reg['norm']; ?></td>
								</tr>
								<tr>
									<td><b>Nama Lengkap</b></td>
									<td>:</td>
									<td><?php echo $pasien['nama']; ?></td>
								</tr>
								<tr>
									<td><b>Jenis Kelamin</b></td>
									<td>:</td>
									<td><?php echo $pasien['jeniskelamin']; ?></td>
								</tr>
		    			</tbody>
		    		</table>
	    		</div>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase;" width="100%">
		    			<tbody>
		    				<tr>
									<td width="120"><b>Tanggal Masuk</b></td>
									<td width="15">:</td>
									<td><?php echo date_format(date_create($reg['tanggal']),'d M Y'); ?></td>
								</tr>
								<tr>
									<td><b>Tanggal Lahir</b></td>
									<td>:</td>
									<td><?php echo date_format(date_create($pasien['tanggallahir']),'d M Y'); ?></td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td>:</td>
									<td><?php echo $pasien['alamat']; ?></td>
								</tr>
		    					<tr>
									<td width="130"><b>Poli</b></td>
									<td width="15">:</td>
									<td><?php
										echo $poliklinik = $this->detail_m->detail_poliklinik($reg['poli'])['poliklinik'];
									?></td>
								</tr>
		    			</tbody>
		    		</table>
	    		</div>
	    		<div class="col-md-4" style=" padding: 0;">
		    		<table style="font-size: 14px; text-transform: uppercase;" width="100%">
		    			<tbody>
		    					<tr>
									<td><b>Rawat Inap ?</b></td>
									<td>:</td>
									<td>
									<?php
										$inap = $reg['rawatinap'];
										if($inap == "1"){
											echo "Ya";
										}else{
											echo "Tidak";
										}
									?>
									</td>
								</tr>
								<tr>
									<td><b>Ruangan</b></td>
									<td>:</td>
									<td>
									<?php
										echo $ruangan = $this->detail_m->detail_ruangan($reg['idruangan'])['nm_ruangan'];
									?>
									</td>
								</tr>
		    			</tbody>
		    		</table>
	    		</div>
	    	</div>
	    </div>

	    <div class="panel panel-default">
	    	<div class="panel-body">
	    		<h4 id="sub-title">Data Obat</h4>
	    		<table class="table table-hover">
	    			<thead>
	    				<th width="150">ID</th>
	    				<th>Nama Obat</th>
	    				<th width="150">Harga</th>
	    				<th width="80">Qty</th>
	    				<th>Total</th>
	    				<th></th>
	    			</thead>
	    			<tbody>
		    			<tr>
		    				<?php echo form_open(base_url().'obatpasien/input_obat?reg='.$this->input->get('reg')); ?>
		    				<td style="padding-left: 0"><input type="text" name="obat" id="idobat" readonly required class="form-control"></td>
		    				<td>
		    					<input type="text" id="obat" required class="form-control">
		    					<div id="hasilpencarian"></div>
		    				</td>
		    				<td><input type="number" name="harga" id="hargajual" required class="form-control"></td>
		    				<td><input type="number" name="qty" id="qty" required class="form-control"></td>
		    				<td></td>
		    				<td style="float: right;"><button type="submit" class="btn btn-success"><span class="fa fa-save"> Simpan</span></td>
		    				<?php echo form_close(); ?>
		    			</tr>
		    		<?php
		    			foreach ($reg_obat as $value) {
		    				$total = $value['harga'] * $value['qty'];
		    				$obat = $this->detail_m->detail_obat($value['idobat']);
		    				echo"
		    				<tr>
		    					<td>".$value['idobat']."</td>
		    					<td>".$obat['nama']."</td>
		    					<td>".$value['harga']."</td>
		    					<td>".$value['qty']."</td>
		    					<td>".$total."</td>
		    					<td><a href='".base_url()."obatpasien/hapus_obat?id=".$value['id']."&reg=".$value['noreg']."' class='btn btn-danger btn-xs'>Hapus</a></td>
		    				</tr>";
		    			}
		    		?>
	    			</tbody>
	    		</table>
			</div>
		</div>
<!-- END MAIN CONTENT -->
<script type="text/javascript">
	$(document).on('keyup', '#obat', function(e){
		var keyword = $("#obat").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>obatpasien/cari_obat",
				type: "post",
				cache: false,
				data: "like=" + keyword,
				dataType: "json",
				success: function(json){
					if(json.status == 1){
						$("#hasilpencarian").show();
						$("#hasilpencarian").html(json.datanya);
					}
				}
			});       
		}else{
			$("#hasilpencarian").hide();      
		}
	});

	$(document).ready(function(){
		$(document).click(function(){
			$("#hasilpencarian").hide();
		});
	});

	$(document).on("click", "#daftar-autocomplete li", function(){
		var id = $(this).find("span#id").html();
		var nama = $(this).find("span#nama").html();
		var harga = $(this).find("span#harga").html();

		$("#idobat").val(id);
		$("#obat").val(nama);
		$("#hargajual").val(harga);
		$("#hasilpencarian").hide();
	});

</script>