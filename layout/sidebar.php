  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index2php" class="nav-link active">
                  <p>Dashboard v2</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="vechiles/list_vehicles.php" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Vehicles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="type_vehicles.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data_vehicles.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>Parkings</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="home.php"class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
