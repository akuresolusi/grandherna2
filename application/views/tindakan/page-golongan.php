<!-- MAIN CONTENT -->
<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-default panel-title">
		    	<div class="panel-body title-pos">
		    		<div class="col-md-6" style="padding: 0;">
			    		<span id="sub-title">Tindakan</span>
			    		<h3 class="page-title"><?php echo $title; ?></h3>
		    		</div>
		    		<div class="col-md-6 add-data">
		    			<a href="#"><button class="btn btn-primary btn-action btn-add" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"> Tambah golongan</span></button></a>
		    		</div>
		    	</div>
		 	</div>
			<div class="panel panel-default">
				  <div class="panel-body">
					<table id="data" class="table table-striped table-hover">
						<thead>
							<th width="10px">No.</th>
							<th>Golongan</th>
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
									<td>".$value['golongan']."</td>
									<td>
										<div class='dropdown'>
									        <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
									        <ul class='dropdown-menu pull-right'>
									            <li><a href='#' class='edit' value_id='".$value['id']."' value_golongan='".$value['golongan']."' data-toggle='modal' data-target='#modaledit'><span class='fa fa-edit'></span> Edit Data</a></li>
									            
									            <li><a href='#' class='hapus' value_id='".$value['id']."' value_golongan='".$value['golongan']."'  ><span class='fa fa-trash'></span> Hapus Data</a></li>
									           
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
				<h4 class="modal-title">Tambah Data Golongan</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'tindakan/proses_tambah_golongan'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Golongan</label>
							<input type="text" class="form-control" placeholder="Golongan" name="golongan" required="" autofocus>
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
				<h4 class="modal-title">Ubah Data golongan</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'tindakan/proses_edit_golongan'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama golongan</label>
							<input type="hidden" class="form-control" id='id_input' value="" name="id"  readonly="true">
							<input type="text" class="form-control" id='golongan_input' name="Golongan" value="" placeholder="golongan" required="true" autofocus>
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
		$("#golongan_input").val($(this).attr('value_golongan'));
	});

	$(".hapus").click(function(){
		var tindakan = $(this).attr('value_golongan'); 
		var id = $(this).attr('value_id');
		var r = confirm("Anda yakin ingin menghapus data Golongan " + tindakan);
	    if (r == true) {
	    	window.location = "<?php echo base_url('tindakan/proses_hapus_golongan?id='); ?>" + id;
	    }
	});

</script>