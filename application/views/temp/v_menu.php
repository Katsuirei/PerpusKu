<?php 
  if ($this->session->userdata('level') == 'Administrator') { ?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>PerpusKu</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_lengkap') ?></a>
          <sub class="text-success"><?= $this->session->userdata('level') ?></sub>
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
            <a href="<?= base_url() ?>index.php/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>
          </li>
          <li class="nav-header">MAIN MENU</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/peminjaman" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Peminjaman Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/koleksi" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Koleksi Pribadi
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/ulasan" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ulasan Buku
              </p>
            </a>
          </li>
          
          
          <li class="nav-header">MAIN DATA</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/data_buku" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/pengguna" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/kategori" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Kategori Buku
              </p>
            </a>
          </li>

          <li class="nav-header">MAIN REPORT</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/laporan/peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/pengembalian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengembalian Buku</p>
                </a>
              </li>
              
            </ul>
          </li>
          <br><br><br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<?php  } elseif($this->session->userdata('level') == 'Petugas') { ?>


  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>PerpusKu</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_lengkap') ?></a>
          <sub class="text-success"><?= $this->session->userdata('level') ?></sub>
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
            <a href="<?= base_url() ?>index.php/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>
          </li>
          <li class="nav-header">MAIN MENU</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/peminjaman" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Peminjaman Buku
              </p>
            </a>
          </li>
          
          
          <li class="nav-header">MAIN DATA</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/data_buku" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Buku
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?= base_url() ?>index.php/pengguna" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/kategori" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Kategori Buku
              </p>
            </a>
          </li>

          <li class="nav-header">MAIN REPORT</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="<?= base_url() ?>index.php/laporan/peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman Buku</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/pengembalian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengembalian Buku</p>
                </a>
              </li>
              
            </ul>
          </li>
          <br><br><br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<?php } else{ ?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>PerpusKu</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama_lengkap') ?></a>
          <sub class="text-success"><?= $this->session->userdata('level') ?></sub>
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
            <a href="<?= base_url() ?>index.php/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas "></i>
              </p>
            </a>
          </li>
          <li class="nav-header">MAIN MENU</li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/peminjaman" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Peminjaman Buku
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/koleksi" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Koleksi Pribadi
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?= base_url() ?>index.php/ulasan" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Ulasan Buku
              </p>
            </a>
          </li>
          
          
        

          <!-- <li class="nav-header">MAIN REPORT</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/laporan/peminjaman" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peminjaman Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>index.php/pengembalian" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengembalian Buku</p>
                </a>
              </li>
              
            </ul>
          </li> -->
          <br><br><br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<?php 
}
?>

