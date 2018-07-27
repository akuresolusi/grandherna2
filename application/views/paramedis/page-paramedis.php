<div class="container-fluid">
	<div class="panel panel-default">
		  <div class="panel-body">
		  	<div class="col-md-12 nopadding mg-bottom-10">
		  		<a href="#" class="btn green" data-toggle="modal" data-target="#myModal"><span class="icon-plus"></span> Tambah Data</a>
		  	</div>
			<table id="data" class="table table-striped table-hover">
				<thead>
					<th width="10px">No.</th>
					<th>Nama Lengkap</th>
					<th>Spesialis</th>
					<th>Telp</th>
					<th width="70"></th>
				</thead>
				<tbody>
					<?php
					$i=0;
					foreach($list as $value){
						$spesialis = $this->detail_m->detail_spesialis($value['idspesialis']);
						$i++;
						echo"
						<tr>
							<td>".$i.".</td>
							<td>".$value['nama']."</td>
							<td>".$spesialis['spesialis']."</td>
							<td>".$value['telp']."</td>
							<td>
								<a href='#' class='btn btn-primary btn-xs tooltips edit' data-original-title='Edit Data' value_id='".$value['id']."' 
							            value_nama='".$value['nama']."' 
							            value_spesialis='".$value['idspesialis']."' 
							            value_telp='".$value['telp']."' data-toggle='modal' data-target='#modaledit'><span class='icon-note'></span></a>
								<a href='#' class='btn btn-danger btn-xs tooltips hapus' data-original-title='Hapus Data' value_id='".$value['id']."' value_nama='".$value['nama']."' value_spesialis='".$value['idspesialis']."' value_telp='".$value['telp']."'><span class='icon-trash'></span></a>
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
				<h4 class="modal-title">Tambah Data Para Medis</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<?php echo form_open(base_url().'paramedis/proses_tambah'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required="" autofocus>
						</div>
						<div class="form-group">
					    	<label>Spesialis</label> 
					    	<select class="form-control" name="idspesialis" required="">
						    	<?php
					    			foreach ($list_spesialis as $value){
					    				echo "<option value='".$value['id']."'>".$value['spesialis']."</option>";
					    			}
					    		?>
						    </select>
						</div>
						<div class=" form-group">
							<label>Telp</label>
							<input type="text" class="form-control" placeholder="Telp" name="telp" required="" autofocus>
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
					<?php echo form_open(base_url().'paramedis/proses_edit'); ?>
					<div class="form-group">
						<div class=" form-group">
							<label>Nama Lengkap</label>
							<input type="hidden" class="form-control" id='id_input' value="" name="id"  readonly="true">
							<input type="text" class="form-control" id='nama_input' name="nama" value="" placeholder="Nama Lengkap" required="true" autofocus>
						</div>
						<div class="form-group">
					    	<label>Spesialis</label> 
					    	<select class="form-control" name="idspesialis" id="spesialis_input" required="">
						    	<?php
					    			foreach ($list_spesialis as $value){
					    				if($detail['idspesialis'] == $value['id']){
					    					echo "<option value='".$value['id']."' selected>".$value['spesialis']."</option>";
					    				}else{
					    					echo "<option value='".$value['id']."'>".$value['spesialis']."</option>";
					    				}
					    				
					    			}
					    		?>
						    </select>
					    </div>
					    <div class=" form-group">
							<label>Telp</label>
							<input type="text" class="form-control" id='telp_input' name="telp" value="" placeholder="Telp" required="true" autofocus>
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
		$("#nama_input").val($(this).attr('value_nama'));
		$("#spesialis_input").val($(this).attr('value_spesialis'));
		$("#telp_input").val($(this).attr('value_telp'));
	});

	$(".hapus").click(function(){
		var paramedis = $(this).attr('value_nama'); 
		var id = $(this).attr('value_id');
		var r = confirm("Yakin ingin menghapus data ? " + paramedis);
	    if (r == true) {
	    	window.location = "<?php echo base_url('paramedis/proses_hapus?id='); ?>" + id;
	    }
	});

</script>