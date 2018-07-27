<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Supplier</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Tambah Supplier</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">

				  	<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Tambah Data Supplier</h4>
					        </div>
					        <div class="modal-body">
					          <div class="container-fluid">
					          	<?php echo form_open(base_url().'supplier/proses_tambah'); ?>
								  	<div class=" form-group">
								  		<label>Nama Supplier</label>
								  		<input type="text" class="form-control" name="nama">
								  	</div>
								  	<div class="form-group">
								  		<label>Alamat</label>
								  		<textarea placeholder="Alamat" class="form-control" name="alamat">
								  		</textarea>
								  	</div>
								  	<div class=" form-group">
								  		<label>No Telp.</label>
								  		<input type="text" class="form-control" name="no_telp">
								  	</div>
								    <div  class="form-group">
								    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
								    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
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
							<table id="data" class="table table-striped table-hover">
								<thead>
									<th width="10">No.</th>
									<th>Nama Supplier</th>
									<th>Alamat</th>
									<th>No Telp.</th>
									<th width="10"></th>
								</thead>
								<tbody>
									<?php
									$i=0;
									foreach($list as $value){
									$i++;
									?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $value['nama']; ?></td>
										<td><?php echo $value['alamat']; ?></td>
										<td><?php echo $value['no_telp']; ?></td>
										<td>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='#' onclick='edit(<?php echo $value['id'] ?>)'><span class='fa fa-edit'></span> Edit Data</a></li>
										            <li><a href='#' class='hapus' value_id="<?php echo $value['id']; ?>" value_supplier="<?php echo $value['nama']; ?>" ><span class='fa fa-trash'></span> Hapus Data</a></li>
										           
										        </ul>
									    	</div>
										</td>
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>	
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
          <h4 class="modal-title">Edit Data Supplier</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
          	<?php echo form_open(base_url().'supplier/proses_edit'); ?>  	
			  	<div class=" form-group">
			  		<label>Nama Obat</label>
			  		<input type="hidden" class="form-control" placeholder="" name="id" id="id">
			  		<input type="text" class="form-control" placeholder="" name="nama" id="nama">
			  	</div>
			  	<div class="form-group">
			  		<label>Alamat</label>
			  		<textarea placeholder="Alamat" class="form-control" name="alamat" id="alamat"></textarea>
			  	</div>
			  	<div class="form-group">
			  		<label>Nomor Telp</label>
			  		<input type="text" class="form-control" placeholder="" name="no_telp" id="no_telp">
			  	</div>
			    <div  class="form-group">
			    	<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
			    	<button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
				</div>
			<?php echo form_close(); ?>
			</div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
  </div>


		


<script>
  	function edit(id){
  		$('#modaledit').modal();
  		$.ajax({
        url : "<?php echo site_url('supplier/getData')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[id="id"]').val(data[0].id);
            $('[id="nama"]').val(data[0].nama);
            $('[id="alamat"]').val(data[0].alamat);
            $('[id="no_telp"]').val(data[0].no_telp);
           

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });

  	}
	$(".hapus").click(function(){
		var supplier = $(this).attr('value_supplier'); 
		var id = $(this).attr('value_id');
		var r = confirm("Yakin Ingin Menghapus Data Obat " + supplier);
	    if (r == true) {
	    	window.location = "<?php echo base_url('supplier/proses_hapus?id='); ?>" + id;
	    }
	});

	$('.modal').on('hidden.bs.modal', function(){
    $(this).find('form')[0].reset();
});

</script>
			<!-- END MAIN CONTENT -->