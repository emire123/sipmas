<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Data obat</h1> -->
  <div class="col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Petugas</h6>
      </div>
      <div class="card-body">
        <?= form_open('Admin/PetugasController'); ?>

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?= set_value('nama') ?>">
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?= set_value('username') ?>">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="">
        </div>
        <div class="form-group">
          <label for="telp">Telp</label>
          <input type="text" class="form-control" id="telp" placeholder="" name="telp" value="<?= set_value('telp') ?>">
        </div>

        <label for="">Level</label>
        <div class="form-group">
         
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas" checked="">
            <label class="form-check-label" for="petugas">Petugas</label>
          </div>
        </div>

        <div class="float-right">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->