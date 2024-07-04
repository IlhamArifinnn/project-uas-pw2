<?php

require_once"layout/head.php";
require_once"layout/navbar.php";
require_once"layout/sidebar.php";

?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
				<div class="btn-group">
					<a button type="button" class="btn btn-info" href="type_vehicles.php">Tambah Data </button></a>
				</div>
				
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th width="3%">ID</th>
                      <th width="15%">Name</th>
                      <th width="20%">Description</th>
                      <th width="10%">Price Hour</th>
					            <th width="10%">Action</th>
                    </tr>
                  </thead>

                  <tr>
                    <td>0001</td>
                    <td>Truck</td>
                    <td>Hondaa brioo</td>
                    <td>Rp150.000</td>
                    <td>
                        <a class="fas fa-eye"></a> 
                        <a class="fas fa-edit"></a>
                        <a class="fas fa-trash"></a>
                    </td>
                   </tr>

                </table>
              </div>
</div>
</div>
</div>
</section>

<?php
include "layout/js.php";
?>
