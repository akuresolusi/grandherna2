<!-- MAIN CONTENT -->
<div class="main-content">
   <div class="container-fluid">
      <div class="panel panel-default panel-title">
         <div class="panel-body title-pos">
            <div class="col-md-6" style="padding: 0;">
               <span id="sub-title">Tarif</span>
               <h3 class="page-title"><?php echo $title; ?></h3>
            </div>
         </div>
      </div>
      <div class="panel panel-default">
         <div class="panel-body">
            <table id="data" class="table table-striped table-hover">
               <thead>
                  <th width="10">No.</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Tarif</th>
                  <th width="10"></th>
               </thead>
               <tbody>
                  <tr>
                     <td>1.</td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>
                        <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#input"><span class="fa fa-check"> Input Harga</span></a>
                     </td>
                  </tr>
               </tbody>
            </table> 
         </div>
      </div>
   </div>
</div>

<!-- MODAL INPUT HARGA -->
  <div class="modal fade" id="input" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Tarif Radiologi</h4>
        </div>
        <div class="modal-body">
         <div class="container-fluid">
            <div class="form-group">
            <div class=" form-group">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="nama" disabled="">
            </div>
            <div class="form-group">
                <label>Kategori</label> 
                <select class="form-control" name="idkategori"  disabled="">
                  <optgroup>-</optgroup>
                </select>
            </div>
            <div class=" form-group">
              <label>Tarif</label>
              <input type="text" class="form-control" placeholder="Tarif" name="tarif" required="" autofocus>
            </div>
            <div  class="form-group">
              <button type="submit" class="btn btn-info"><span class="fa fa-save"></span> Simpan</button>
              <button type="reset" class="btn btn-danger"><span class="fa fa-remove"></span> Batal</button>
            </div>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- END MODAL INPUT HARGA -->

