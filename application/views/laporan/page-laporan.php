<style type="text/css">
	h4{
		font-weight: bold;
	}
</style>
<div class="container-fluid">
	<div class="panel panel-default">
		 <div class="panel-body">
		 	<div class="row">
				<div class="col-md-4">
					<h4>Rawat Jalan</h4>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#rj">Laporan Pasien Rawat Jalan</a></li>
					</ul>

					<h4 style="margin-top: 20px;">Rawat Inap</h4>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#ri">Laporan Rawat Inap</a></li>
					</ul>
					<h4 style="margin-top: 20px;">Diagnosis</h4>
					<ul>
						<li><a href="#">Laporan Penyakit Teratas</a></li>
					</ul>
					<h4 style="margin-top: 20px;">Penunjang</h4>
					<ul>
						<li><a href="#">Laboratorium</a></li>
						<li><a href="#">Radiologi</a></li>
					</ul>
					<h4 style="margin-top: 20px;">Stok Obat & Alkes</h4>
					<ul>
						<li><a href="<?php echo base_url(); ?>laporan/cetak_data_obat" target="_blank">Obat & Alkes</a></li>
						<li><a href="#">Gudang</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>Distrubusi Obat & Alkes</h4>
					<ul>
						<li><a href="#">Laporan Distrubusi Obat & Alkes</a></li>
					</ul>
					<h4 style="margin-top: 20px;">Retur Obat & Alkes</h4>
					<ul>
						<li><a href="#">Laporan Retur Obat & Alkes</a></li>
					</ul>
					<h4 style="margin-top: 20px;">Pembelian Obat & Alkes</h4>
					<ul>
						<li><a href="#">Laporan Pembelian Obat & Alkes</a></li>
					</ul>
					<h4 style="margin-top: 20px;">Penjualan Obat & Alkes</h4>
					<ul>
						<li><a href="#">Laporan Penjualan Obat & Alkes</a></li>
					</ul>
					<h4 style="margin-top: 20px;">Laporan Pendapatan</h4>
					<ul>
						<li><a href="#">Periksa Dokter</a></li>
						<li><a href="#">Pendapatan Lab</a></li>
						<li><a href="#">Konsul Dokter via Telp</a></li>
						<li><a href="#">Visit Dokter</a></li>
						<li><a href="#" data-toggle="modal" data-target="#pendapatan">Pendapatan Harian</a></li>
						
					</ul>
				</div>		
			</div>
		</div>
	</div>
</div>


<!-- MODAL PENDAPATAN HARIAN -->

  <div class="modal fade" id="pendapatan" role="dialog">
    <div class="modal-dialog modal-sm">
  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Filter Pendapatan Harian</h4>
	    </div>
	    <div class="modal-body">
	    <?php echo form_open(base_url().'laporan/cetak_pendapatan_harian'); ?>
		    <div class="form-group">
		      <label>Pilih Tanggal</label>
		    <input type="date" name="tanggal" required="" value="<?php echo date('Y-m-d'); ?>" class="form-control">
		      </div>
	      	<div class="form-group">
	      		<button type="submit" class="btn btn-success"><span class="fa fa-filter"> Filter</span></button>
	      	</div>
	     <?php echo form_close(); ?>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	</div>
</div>
<!-- END MODAL PENDAPATAN HARIAN -->


<!-- MODAL LAPORAN RAWAT JALAN -->
  <div class="modal fade" id="rj" role="dialog">
    <div class="modal-dialog modal-sm">
  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Filter Laporan Rawat Jalan</h4>
	    </div>
	    <div class="modal-body">
	    <?php echo form_open(base_url().'laporan/cetak_rawat_jalan'); ?>
		    <div class="form-group">
		      <label>Dari Tanggal</label>
		    <input type="date" name="tanggaldari" required="" value="<?php echo date('Y-m-d'); ?>" class="form-control">
		    </div>
		    <div class="form-group">
		      <label>Ke Tanggal</label>
		    <input type="date" name="tanggalsampai" required="" value="<?php echo date('Y-m-d'); ?>" class="form-control">
		    </div>
	      	<div class="form-group">
	      		<button type="submit" class="btn btn-success"><span class="fa fa-filter"> Filter</span></button>
	      	</div>
	     <?php echo form_close(); ?>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	</div>
</div>
<!-- END MODAL LAPORAN RAWAT JALAN -->


<!-- MODAL LAPORAN RAWAT INAP -->
  <div class="modal fade" id="ri" role="dialog">
    <div class="modal-dialog modal-sm">
  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Filter Laporan Rawat Inap</h4>
	    </div>
	    <div class="modal-body">
	    <?php echo form_open(base_url().'laporan/cetak_rawat_inap'); ?>
		    <div class="form-group">
		      <label>Dari Tanggal</label>
		    <input type="date" name="tanggaldari" required="" value="<?php echo date('Y-m-d'); ?>" class="form-control">
		    </div>
		    <div class="form-group">
		      <label>Ke Tanggal</label>
		    <input type="date" name="tanggalsampai" required="" value="<?php echo date('Y-m-d'); ?>" class="form-control">
		    </div>
	      	<div class="form-group">
	      		<button type="submit" class="btn btn-success"><span class="fa fa-filter"> Filter</span></button>
	      	</div>
	     <?php echo form_close(); ?>
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
	    </div>
	  </div>
	</div>
</div>
<!-- END MODAL LAPORAN RAWAT JALAN -->