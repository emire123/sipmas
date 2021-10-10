<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <div class="sidebar-brand-icon">
        <img src="<?= base_url() ?>/assets/utama/images/sipmas1.png"  width="155" height="40" class="rounded" alt="...">
      </div>
       
    </a>

    <?php if ($this->session->userdata('level') == 'admin' or $this->session->userdata('level') == 'petugas') : ?>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Admin/DashboardController') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
    <?php endif; ?>

    <?php if ($this->session->userdata('level') == NULL) : ?>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-edit"></i>
          <span>Pengaduan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengaduan:</h6>
            <a class="collapse-item" href="<?= base_url('Masyarakat/PengaduanController'); ?>">Tulis Pengaduan</a>
            <a class="collapse-item" href="<?= base_url('Masyarakat/lihatlaporan'); ?>">Lihat Pengaduan</a>
          </div>
        </div>
      </li>
    <?php endif; ?>

    <?php if ($this->session->userdata('level') == 'petugas') : ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-user"></i>
          <span>Data Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">user</h6>
            <a class="collapse-item" href="<?= base_url('Admin/PetugasController'); ?>">Petugas</a>
            <a class="collapse-item" href="<?= base_url('Admin/MasyarakatController'); ?>">Masyarakat</a>
          </div>
        </div>
      </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php // dropdown admin hanya oleh akun admin dan petugas 
    ?>
    <?php if ($this->session->userdata('level') == 'admin' or $this->session->userdata('level') == 'petugas') : ?>
      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-clipboard-list"></i>
          <span>Pengaduan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">MENU </h6>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController'); ?>">Pengaduan Masuk</a>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController/tanggapan_proses'); ?>">Pengaduan
              Diproses</a>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController/tanggapan_tolak'); ?>">Pengaduan
              Dirujuk</a>
            <a class="collapse-item" href="<?= base_url('Admin/TanggapanController/tanggapan_selesai'); ?>">Pengaduan
              Selesai</a>
            <div class="collapse-divider"></div>

          </div>
        </div>
      </li>
    <?php endif; ?>
    <?php // end dropdown admin hanya oleh akun admin dan petugas 
    ?>


    <?php // generate laporan akses admin 
    ?>
    <?php if ($this->session->userdata('level') == 'petugas') : ?>
      <!-- Nav Item - Generate Laporan -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/LaporanController'); ?>">
          <i class="fas fa-file-pdf"></i>
          <span>Daftar Pengaduan</span></a>
      </li>
    <?php endif; ?>
    <?php // end generate laporan akses admin 
    ?>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Auth/LogoutController'); ?>">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->