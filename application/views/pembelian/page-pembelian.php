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
               <a href="<?php echo base_url(); ?>pembelian/tambah" class="btn btn-primary btn-action btn-add"><span class="fa fa-plus"> Tambah Pembelian</span></a>
            </div>
      </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-body">
         <table id="data" class="table table-striped table-hover">
               <thead>
                  <th width="10">No.</th>
                  <th>Nama Supplier</th>
                  <th>Alamat</th>
                  <th>Telp / No. Hp</th>
                  <th>Tanggal Pembelian</th>
                  <th width="10"></th>
               </thead>
               <tbody>
               <?php
                  $i=0;
                  foreach ($list as $value) {
                     $i++;
                     $supplier = $this->detail_m->detail_supplier($value['idsupplier']);
                     echo"
                     <tr>
                        <td>".$i."</td>
                        <td>".$supplier['nama']."</td>
                        <td>".$supplier['alamat']."</td>
                        <td>".$supplier['no_telp']."</td>
                        <td>".date_format(date_create($value['tanggal']),'d M Y')."</td>
                        <td>
                           <div class='dropdown'>
                                <a href='#' class='btn btn-primary btn-xs' data-toggle='dropdown' class='dropdown-toggle' role='button' aria-haspopup='true' aria-expanded='false' title='Action'>Tindakan <span class='caret'></span></a>
                                <ul class='dropdown-menu pull-right'>
                                    <li><a href='#'><span class='fa fa-eye'></span> Lihat Data</a></li>
                                    <li><a href='".base_url()."pembelian/hapus?faktur=".$value['faktur']."'><span class='fa fa-trash'></span> Hapus Data</a></li>
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
