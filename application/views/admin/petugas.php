<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="col-lg-12">
    <br>
    <h1 class="h3 mb-2 text-gray-800">Daftar Akun Petugas</h1>
    <hr>
    <br>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <div class="float-right"><a href="<?= base_url('Admin/PetugasController/tambah/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a></div>
      </div>
      <div class="card-body">
        <table class="table table-bordered" id="dataTable">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telp</th>
            <th scope="col">Level</th>
            <th scope="col">Aksi</th>
          </tr>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_petugas as $dp) : ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $dp['nama_petugas']; ?></td>
                <td><?= $dp['telp']; ?></td>
                <td><?= $dp['level']; ?></td>
                <td>
                  <?php if ($dp['username'] == $this->session->userdata('username')) : ?>
                    <small>Tidak ada aksi</small>
                  <?php else : ?>
                    <a href="<?= base_url('Admin/PetugasController/delete/' . $dp['id_petugas']) ?>" class="btn btn-warning">Hapus</a>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->