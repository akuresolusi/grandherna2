<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Gedung</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Tambah Gedung</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="10px">No.</th>
								<th width="1300">Nama Gedung</th>
								<th width="100"></th>
							</thead>
							<tbody>
								<?php
								$i=0;
								foreach($list as $value){
									$i++;
									echo"
									<tr>
										<td>".$i.".</td>
										<td>".$value['gedung']."</td>
										<td>
											<a href='#' class='btn btn-primary btn-xs tooltips edit' data-original-title='Edit Data' value_id='".$value['id']."' value_gedung='".$value['gedung']."' data-toggle='modal' data-target='#modaledit'><span class='icon-note'></span></a>
											<a href='#' class='btn btn-danger btn-xs tooltips hapus' data-original-title='Hapus Data' value_id='".$value['id']."' value_gedung='".$value['gedung']."'><span class='icon-trash'></span></a>
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
				<h4 class="modal-title">Tambah Data Gedung</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'gedung/proses_tambah'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Gedung</label>
							<input type="text" class="form-control" placeholder="Gedung" name="gedung" required="" autofocus>
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
				<h4 class="modal-title">Ubah Data Gedung</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'gedung/proses_edit'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Gedung</label>
							<input type="hidden" class="form-control" id='id_input' value="" name="id"  readonly="true">
							<input type="text" class="form-control" id='gedung_input' name="gedung" value="" placeholder="Gedung" required="true" autofocus>
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
		$("#gedung_input").val($(this).attr('value_gedung'));
	});

	$(".hapus").click(function(){
		var gedung = $(this).attr('value_gedung'); 
		var id = $(this).attr('value_id');
		var r = confirm("Yakin Ingin Menghapus Data gedung " + gedung);
	    if (r == true) {
	    	window.location = "<?php echo base_url('gedung/proses_hapus?id='); ?>" + id;
	    }
	});

</script>