<div class="container-fluid">
	<div class="panel panel-default">
		  <div class="panel-body">
			  	<div class="col-md-12 nopadding mg-bottom-10">
			  		<a href="#" class="btn green" data-toggle="modal" data-target="#myModal"><span class="icon-plus"></span> Tambah Data</a>
			  	</div>
					<table id="data" class="table table-striped table-hover">
						<thead>
							<th width="10">No.</th>
							<th>Nama Obat</th>
							<th>Jenis Obat</th>
							<th>Satuan</th>
							<th>stok</th>
							<th>Harga Jual</th>
							<th width="70"></th>
						</thead>
						<tbody>
						<?php
						$i=0;
						foreach($list as $value){
							$i++;
							echo"
							<tr>
								<td>".$i."</td>
								<td>".$value['nama']."</td>
								<td>".$value['kategori']."</td>
								<td>".$value['satuan']."</td>
								<td>".$value['stok']."</td>
								<td>Rp ".$value['hargajual']."</td>
								<td align='right'>
									<a href='#' class='btn btn-primary btn-xs tooltips edit' data-original-title='Edit Data' onclick='edit(".$value['idobat'].")'><span class='icon-note'></span></a>
									<a href='#' class='btn btn-danger btn-xs tooltips hapus' data-original-title='Hapus Data' value_id='".$value['id']."' value_obat='".$value['nama']."'><span class='icon-trash'></span></a>
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

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data Obat & Alkes</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
          	<?php echo form_open(base_url().'obat/proses_tambah'); ?>
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Nama Obat</label>
			  		<input type="text" class="form-control" placeholder="" name="nama">
			  	</div>
			  	<div class=" form-group">
			  		<label>Kategori Obat</label>
			    	<select class="form-control" name="kategori">
			    		<option>- Pilih Kategori -</option>
			    		<?php foreach($listKategori as $value){ ?>
			    			<option value="<?php echo $value['id']; ?>"><?php echo $value['kategori']; ?></option>
			    		<?php }	?>
				    </select>
			  	</div>
			  
			  	<div class=" form-group">
			  		<label>Satuan</label>
			    	<select class="form-control" name="satuan">
			    		<option>- Pilih Satuan -</option>
			    		<?php foreach($listSatuan as $value){ ?>
			    			<option value="<?php echo $value['id']; ?>"><?php echo $value['satuan']; ?></option>
			    		<?php }	?>
				    </select>
			  	</div>
			  	
			  	<div class=" form-group">
			  		<label>Harga</label>
			  		<input type="text" class="form-control" placeholder="Harga" name="hargajual">
			  	</div>

			  	<div class="form-group">
			    	<label>Expire</label>
			    	<input type="date" class="form-control" placeholder="Tanggal Lahir" name="expire">
				</div>

				<div class="form-group">
			    	<label>Aturan Pakai</label>
			    	<textarea class="form-control" placeholder="Aturan Pakai" name="aturanpakai" /></textarea>
				</div>

			    <div  class="form-group">
			    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close(); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>




  <div class="modal fade" id="modaledit" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Data Obat & Alkes</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
          	<?php echo form_open(base_url().'obat/proses_edit'); ?>
          	<input type="hidden" class="form-control" placeholder="" name="id" id="id">
			  	<div class="form-group">
			  	<div class=" form-group">
			  		<label>Nama Obat</label>
			  		<input type="text" class="form-control" placeholder="" name="nama" id="nama">
			  	</div>
			  	<div class=" form-group">
			  		<label>Kategori Obat</label>
			    	<select class="form-control" name="kategori" id="kategori">
			    		<option>- Pilih Kategori -</option>
			    		<?php foreach($listKategori as $value){ ?>
			    			<option value="<?php echo $value['id']; ?>"><?php echo $value['kategori']; ?></option>
			    		<?php }	?>
				    </select>
			  	</div>
			  
			  	<div class=" form-group">
			  		<label>Satuan</label>
			    	<select class="form-control" name="satuan" id="satuan">
			    		<option>- Pilih Satuan -</option>
			    		<?php foreach($listSatuan as $value){ ?>
			    			<option value="<?php echo $value['id']; ?>"><?php echo $value['satuan']; ?></option>
			    		<?php }	?>
				    </select>
			  	</div>
			  	
			  	<div class=" form-group">
			  		<label>Harga</label>
			  		<input type="text" class="form-control" placeholder="Harga" name="hargajual" id="hargajual">
			  	</div>

			  	<div class="form-group">
			    	<label>Expire</label>
			    	<input type="date" class="form-control" placeholder="Tanggal Lahir" name="expire" id="expire">
				</div>

				<div class="form-group">
			    	<label>Aturan Pakai</label>
			    	<textarea class="form-control" placeholder="Aturan Pakai" name="aturanpakai" id="aturanpakai" /></textarea>
				</div>

			    <div  class="form-group">
			    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			  	</div>
				<?php echo form_close(); ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>

  <script>
  	function edit(id){
  		$('#modaledit').modal();
  		$.ajax({
        url : "<?php echo site_url('obat/getData')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[id="id"]').val(data[0].id);
            $('[id="nama"]').val(data[0].nama);
            $('[id="hargajual"]').val(data[0].hargajual);
            $('[id="expire"]').val(data[0].expire);
            $('[id="aturanpakai"]').val(data[0].aturanpakai);
            $('#kategori option[value="' + data[0].jenisobat + '"]').prop('selected', true);
            $('#satuan option[value="' + data[0].satuan + '"]').prop('selected', true);

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });

  	}
	$(".hapus").click(function(){
		var obat = $(this).attr('value_obat'); 
		var id = $(this).attr('value_id');
		var r = confirm("Yakin ingin menghapus data ? " + obat);
	    if (r == true) {
	    	window.location = "<?php echo base_url('obat/proses_hapus?id='); ?>" + id;
	    }
	});

	$('.modal').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset();
});

</script>