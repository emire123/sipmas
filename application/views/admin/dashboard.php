        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <?php if ($this->session->userdata('level') == 'admin') : ?>
              <a href="<?= base_url('Admin/LaporanController') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            <?php endif; ?>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Petugas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($petugas) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Semua Pengaduan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($pengaduan) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengaduan diproses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($pengaduan_proses) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-signature fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Selesai
                        dikerjakan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($pengaduan_selesai) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-archive fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-lg">
              <div class="card shadow">
                <div class="card-header"><strong>User Sedang Login</strong></div>
                <div class="card-body">
                  <strong>Username : </strong><br>
                  <input type="text" value="<?= $this->session->userdata['username'] ?>" readonly class="form-control mt-2 mb-2">
                  <strong>Level : </strong><br>
                  <input type="text" value="<?= $this->session->userdata['level'] ?>" readonly class="form-control mt-2 mb-2">
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->