<div class="container-fluid">
	<div class="panel panel-default">
		  <div class="panel-body">
		  	<div class="col-md-12 nopadding mg-bottom-10">
		  		<a href="#" class="btn green" data-toggle="modal" data-target="#myModal"><span class="icon-plus"></span> Tambah Data</a>
		  	</div>
		  	<table id="data" class="table table-striped table-hover">
				<thead>
					<th width="10">No.</th>
					<th width="1300">Nama Jabatan</th>
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
							<td>".$value['jabatan']."</td>
							<td>
								<a href='#' class='btn btn-primary btn-xs tooltips edit' data-original-title='Edit Data' value_id='".$value['id']."' value_jbt='".$value['jabatan']."' data-toggle='modal' data-target='#modaledit'><span class='icon-note'></span></a>
								<a href='#' class='btn btn-danger btn-xs tooltips hapus' data-original-title='Hapus Data' value_id='".$value['id']."' value_jbt='".$value['jabatan']."'><span class='icon-trash'></span></a>
							</td>
						</tr>";
					}
				?>
				</tbody>
			</table>	
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
				<h4 class="modal-title">Tambah Data Jabatan</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'jabatan/proses_tambah'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Jabatan</label>
							<input type="text" class="form-control" placeholder="Jabatan" name="jabatan" required="" autofocus>
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
				<h4 class="modal-title">Ubah Data Jabatan</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'jabatan/proses_edit'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Jabatan</label>
							<input type="hidden" class="form-control" id='id_input' value="" name="id"  readonly="true">
							<input type="text" class="form-control" id='jabatan_input' name="jabatan" value="" placeholder="Jabatan" required="true" autofocus>
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
		$("#jabatan_input").val($(this).attr('value_jbt'));
	});

	$(".hapus").click(function(){
		var jabatan = $(this).attr('value_jbt'); 
		var id = $(this).attr('value_id');
		var r = confirm("Yakin Ingin Menghapus Data Jabatan " + jabatan);
	    if (r == true) {
	    	window.location = "<?php echo base_url('jabatan/proses_hapus?id='); ?>" + id;
	    }
	});

</script>