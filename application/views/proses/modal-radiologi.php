<!-- RADIOLOGI MODAL -->
<div class="modal fade" id="radiologi" role="dialog">
<div class="modal-dialog modal-md">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Formulir Permintaan Radiologi</h4>
    </div>
    <div class="modal-body">
    	<?php echo form_open(base_url().'proses/tambah_periksaradio?noreg='.$this->input->get('reg')); ?>
    	<div class="form-group">
    		<label>Tanggal Pemintaan Radio</label>
          	<input type="date" name="tanggal" required="" value="<?php echo date('Y-m-d'); ?>" class="form-control">
        </div>
        <div class="form-group">
        	<label>Jenis Pemeriksaan</label>
        	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		    <!-- ================== -->
		    <?php
		    	$i=0;
		     	foreach ($list_periksaradio_kategori as $value) {
		     		$i++;
		     	 echo"
					<div class='panel panel-default'>
						<div class='panel-heading' role='tab' id='".$i."' style='padding: 5px 10px;''>
						    <span class='panel-title' style='font-size: 15px;''>
						        <a class='collapsed' data-toggle='collapse' data-parent='#accordion' href='#b".$i."' aria-expanded='false' aria-controls='b".$i."'>
						          ".$value['kategori']."</a>
						  	</span>
						</div>
						<div id='b".$i."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='".$i."'>
						    <div class='panel-body' style='padding: 5px 10px;'>";
						    $list_periksaradio = $this->proses_m->list_periksaradio($value['id']);
						    foreach ($list_periksaradio as $key => $value2) {
						    	echo"
						    	<div class='checkbox'>
							      	<label><input type='checkbox' name='periksaradio[]' value='".$value2['id']."'>".$value2['nama']."</label>
							    </div>";
						    }
							echo"    
						    </div>
						</div>
					</div>";
		     	} 
		    ?>

		    <!-- ================================= -->
        </div>
    </div>
    <div class="form-group">
    	<input type="submit" class="btn btn-success" value="Proses Permintaan">
    </div>
    <?php echo form_close(); ?>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
    </div>
  </div>
  
</div>
</div>
</div>