<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Obat</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"> Tambah Kategori</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="10px">No.</th>
								<th>Nama Satuan</th>
								<th width="50px"></th>
							</thead>
							<tbody>
								<?php
								$i=0;
								foreach($list as $value){
									$i++;
									echo"
									<tr>
										<td>".$i.".</td>
										<td>".$value['satuan']."</td>
										<td>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            
									            <li><a href='#' class='edit' value_id='".$value['id']."' value_satuan='".$value['satuan']."' data-toggle='modal' data-target='#modaledit'><span class='fa fa-edit'></span> Edit Data</a></li>

									            <li><a href='#' class='hapus' value_id='".$value['id']."' value_satuan='".$value['satuan']."'  ><span class='fa fa-trash'></span> Hapus Data</a></li>
									           
									        </ul>
								    	</div>
									</td>
									</tr>";
								}
							?>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		
<!-- MODAL TAMBAH -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
					    
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Data Satuan</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'satuan/proses_tambah'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama satuan</label>
							<input type="text" class="form-control" placeholder="Satuan" name="satuan" required="" autofocus>
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
				<h4 class="modal-title">Ubah Data Satuan</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'satuan/proses_edit'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama satuan</label>
							<input type="hidden" class="form-control" id='id_input' value="" name="id"  readonly="true">
							<input type="text" class="form-control" id='satuan_input' name="satuan" value="" placeholder="Satuan" required="true" autofocus>
						</div>
						<div  class="form-group">
							<button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Ubah</button>
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

	$(".edit").click(function(){
		$("#id_input").val($(this).attr('value_id'));
		$("#satuan_input").val($(this).attr('value_satuan'));
	});

	$(".hapus").click(function(){
		var satuan = $(this).attr('value_satuan'); 
		var id = $(this).attr('value_id');
		var r = confirm("Yakin Ingin Menghapus Data satuan " + satuan);
	    if (r == true) {
	    	window.location = "<?php echo base_url('satuan/proses_hapus?id='); ?>" + id;
	    }
	});

</script>