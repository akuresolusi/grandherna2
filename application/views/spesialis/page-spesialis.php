<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Spesialis</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"> Tambah Spesialis</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
						<table id="data" class="table table-striped table-hover">
							<thead>
								<th width="10px">No.</th>
								<th>Nama Spesialis</th>
								<th width="50px"></th>
							</thead>
							<tbody>
								<?php
								$i=0;
								foreach($list as $value){
									$i++;
									echo"
									<tr>
										<td>".$i."</td>
										<td>".$value['spesialis']."</td>
										<td>
											<div class='dropdown'>
										        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
										        <ul class='dropdown-menu pull-right'>
										            <li><a href='#' class='edit' value_id='".$value['id']."' value_spesialis='".$value['spesialis']."' data-toggle='modal' data-target='#modaledit'><span class='fa fa-edit'></span> Edit Data</a></li>
										            <li><a href='#' class='hapus' value_id='".$value['id']."' value_spesialis='".$value['spesialis']."' ><span class='fa fa-trash'></span> Hapus Data</a></li>
										           
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
				<h4 class="modal-title">Tambah Data Spesialis</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'spesialis/proses_tambah'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Spesialis</label>
							<input type="text" class="form-control" placeholder="Spesialis" name="spesialis" required="" autofocus>
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
				<h4 class="modal-title">Ubah Data Spesialis</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'spesialis/proses_edit'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Spesialis</label>
							<input type="hidden" class="form-control" id='id_input' value="" name="id"  readonly="true">
							<input type="text" class="form-control" id='spesialis_input' name="spesialis" value="" placeholder="Spesialis" required="true" autofocus>
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
		$("#spesialis_input").val($(this).attr('value_spesialis'));
	});

	$(".hapus").click(function(){
		var spesialis = $(this).attr('value_spesialis'); 
		var id = $(this).attr('value_id');
		var r = confirm("Yakin Ingin Menghapus Data Spesialis " + spesialis);
	    if (r == true) {
	    	window.location = "<?php echo base_url('spesialis/proses_hapus?id='); ?>" + id;
	    }
	});

</script>