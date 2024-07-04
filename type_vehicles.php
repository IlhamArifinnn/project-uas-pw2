

<?php

require_once "layout/head.php";
require_once "layout/navbar.php";
require_once "layout/sidebar.php";

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Type</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
				    <form action="data_vehicles.php" method="POST">

                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" name="id" class="form-control" id="id" placeholder="ID">
                  </div>
				  
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input type="name" name="decsription" class="form-control" id="decsription" placeholder="Description">
                  </div>
				          
                  <div class="form-group">
                    <label for="price_hour">Price Hour</label>
                    <input type="name" name="price_hour" class="form-control" id="price_hour" placeholder="Price Hour">
                  </div>

                  <!-- <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                   <select id="gender" name="gender" class="custom-select" placeholder="Jenis Kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                  </div> -->
				
                </div>
                <div class="card-footer">
                  
				        <input type="submit" name="proses" type="submit" class="btn btn-primary"/>
				
                </div>
              </form>
            </div>
			</div>
			</div>
			</div>
			
			</section>
			</div>
			
			
<?php
include "layout/js.php";
include "layout/footer.php";
?>