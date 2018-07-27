
<style type="text/css">

  #hasilpencarian{ 
    padding: 0px; 
    display: none; 
    position: absolute; 
    max-height: 200px;
    width: 403px;
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


<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="panel panel-default panel-title">
	    	<div class="panel-body title-pos">
	    		<div class="col-md-6" style="padding: 0;">
		    		<span id="sub-title">Obat</span>
		    		<h3 class="page-title"><?php echo $title; ?></h3x>
	    		</div>

	    		<div class="col-md-6 add-data">
	    			<a href="#" class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#cari"><span class="fa fa-search"> Cari Supplier</span></a>
	    			<!-- <a href="#" class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#tambah" style="margin-right: 10px;"><span class="fa fa-user-plus"> Tambah Supplier</span></a> -->
	    		</div>
	    	</div>
	 	</div>
	 	<?php echo form_open(base_url().'pembelian/proses_tambah'); ?>
		<div class="panel panel-default">
	    	<div class="panel-body">
	    		<h4 id="s-title">Data Supplier</h4>
	    			<div class="form-group col-md-8" style="padding: 0 10px 0 0">
	    				<label>No Faktur</label>
	    				<input type="number" name="faktur" readonly="" class="form-control" value="<?php echo $faktur; ?>" >
	    			</div>
	    			<div class="form-group col-md-4" style="padding: 0 10px 0 0">
	    				<label>Tanggal</label>
	    				<input type="date" name="tanggal" class="form-control" value='<?php echo date('Y-m-d'); ?>'>
	    			</div>
	    			<div class="form-group col-md-4" style="padding: 0 10px 0 0">
	    				<label>Nama Supplier</label>
	    				<input type="hidden" id="idsupplier" name="supplier" >
	    				<input type="text" id="namasupplier" class="form-control" readonly="">
	    			</div>
	    			<div class="form-group col-md-4" style="padding: 0 10px 0 0">
	    				<label>Alamat</label>
	    				<input type="text" id="alamatsupplier" class="form-control" readonly="">
	    			</div>
	    			<div class="form-group col-md-4" style="padding: 0 10px 0 0">
	    				<label>Telp / No. HP</label>
	    				<input type="text" id="nohpsupplier" class="form-control" readonly="">
	    			</div>
	    	</div>
	    </div>

	    <div class="panel panel-default">
	    	<div class="panel-body">
	    		<h4 id="s-title">Pembelian Obat</h4>
	    		<table class="table table-hover table-striped">
	    			<thead>
	    				<th width="450">Nama Obat</th>
	    				<th width="100">Qty</th>
	    				<th width="200">Harga</th>
	    				<th width="200">Sub Total</th>
	    				<th ></th>
	    			</thead>
	    			<tbody>
	    				
	    				<tr>
	    					<td style="padding-left: 0">
	    						<input type="hidden" id="idbarang" name="idbarang">
	    						<input type="text" id="namabarang"  class="form-control">
	    						<div id="hasilpencarian"></div>
	    					</td>
	    					<td>
	    						<input type="number" name="qty" class="form-control"></td>
	    					<td>
	    						<input type="number" name="harga" class="form-control" placeholder="Rp" style="text-align: right;">
	    					</td>
	    					<td></td>
	    					<td><input type="submit" name="tambah-item" class="btn btn-success" value="Tambah"> </td>
	    				</tr>
	    				<?php
	    					$gtotal  =0;
	    					foreach ($list_items as $value) {
	    					$total = $value['qty'] * $value['harga'];
	    					$barang = $this->detail_m->detail_obat($value['idbarang']);
	    					$gtotal = $gtotal + $total;
	    					echo"
	    					<tr>
		    					<td style='padding-left: 0'><span>".$barang['nama']."</span></td>
		    					<td><span>".$value['qty']."</span></td>
		    					<td><span style='float: right;'><b>Rp. ".$value['harga']."</b></span></td>
		    					<td><span style='float: right;'><b>Rp. ".$total."</b></span></td>
		    					<td><a href='".base_url()."pembelian/hapus_item?id=".$value['id']."'><span class='lnr lnr-cross-circle' title='Hapus' style='font-size: 25px; cursor: pointer; float: right; color: red;''></span></a></td>
		    				</tr>";
	    					}
	    				?>

	    			</tbody>
	    		</table>
	    		<div class="col-md-6" style="padding: 0">
	    			<div class="form-group">
	    				<label>Catatan</label>
	    				<textarea class="form-control" placeholder="Catatan" style="height: 100px"></textarea>
	    			</div>
	    		</div>
	    		<div class="col-md-5" style="float: right;">
	    			<div class="row d">
		  				<span id="gt-title">TOTAL</span>	
		  				<span id="grand-total">
		  					<span style="color: #4183D7">Rp. <?php echo $gtotal; ?></span>
		  				</span>	
		  			</div>
	    		</div>
	    		<div class="col-md-12" style="padding: 0">
	    			<input type="submit" class="btn btn-info" value="Simpan">
	    			<a href="<?php echo base_url(); ?>pembelian" class="btn btn-warning"><span class="fa fa-list"></span> Daftar Pembelian</a>
	    			<a href="#" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</a>
	    		</div>
			</div>
		</div>
		<?php echo form_close(); ?>

<!-- END MAIN CONTENT -->

<!-- MODAL TAMBAH SUPPLIER -->
  <div class="modal fade" id="tambah" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-user-plus"> Tambah Supplier</span></h4>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
<!-- END MODAL TAMBAH SUPPLIER -->

<!-- MODAL CARO SUPPLIER -->
  <div class="modal fade" id="cari" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-search"> Cari Supplier</span></h4>
        </div>
        <div class="modal-body">
          <table class="table table-hover" id="data">
          	<thead>
          		<th width="10">No.</th>
          		<th>Nama Supplier</th>
          		<th>Alamat</th>
          		<th>Telp / No.HP</th>
          		<th width="10"></th>
          	</thead>
          	<tbody>
          		<tr>
          		<?php
          			$i=0;
          			foreach ($list_supplier as $value) {
          				$i++;
          				echo"
          				<tr>
          					<td>".$i."</td>
          					<td>".$value['nama']."</td>
          					<td>".$value['alamat']."</td>
          					<td>".$value['no_telp']."</td>
          					<td>
          					<a
          						id='".$value['id']."'
          						nama='".$value['nama']."'
          						alamat='".$value['alamat']."'
          						no_telp='".$value['no_telp']."'
          					class='btn btn-primary btn-xs pilih-supplier' data-dismiss='modal'> <span class='fa fa-check'> Pilih</span></a></td>
          				</tr>";
          			}
          		?>
          		</tr>
          	</tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
<!-- END MODAL CARI SUPPLIER -->


<script type="text/javascript">

	$(".pilih-supplier" ).click(function() {
		$("#idsupplier").val($(this).attr('id'));
		$("#namasupplier").val($(this).attr('nama'));
		$("#alamatsupplier").val($(this).attr('alamat'));
		$("#nohpsupplier").val($(this).attr('no_telp'));
	});

	$(document).on('keyup', '#namabarang', function(e){
		var keyword = $("#namabarang").val();
		if(keyword !== ""){
			var charcode = e.which || e.keyCode;
			$.ajax({
				url: "<?php echo base_url(); ?>pembelian/cari_barang",
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

	$(document).on("click", "#daftar-autocomplete li", function(){
		var id= $(this).find("span#id").html();
		var nama = $(this).find("span#nama").html();

		$("#idbarang").val(id);
		$("#namabarang").val(nama);
	});

	$(document).ready(function(){
		$(document).click(function(){
			$("#hasilpencarian").hide();
		});
	});


</script>