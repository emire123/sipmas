<!-- Begin Page Content -->
<div class="container-fluid">

  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= form_open('Admin/TanggapanController/tambah_tanggapan'); ?>
  <div class="row">
    <div class="col-lg-8">
      <div class="card shadow mb-4">
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data_pengaduan['id_pengaduan']; ?>">
            <label for="">Status Tanggapan</label>
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status-setuju" value="proses" checked="">
                <label class="form-check-label" for="status-setuju">Diterima</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status-tolak" value="tolak">
                <label class="form-check-label" for="status-tolak">Dirujuk</label>
              </div>
            </div>
            <div class="form-group">
              <label for="tanggapan">Tanggapan</label>
              <textarea name="tanggapan" class="form-control" id="tanggapan" cols="30" rows="10" required></textarea>
            </div>
            <div class="float-right">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <?= form_close(); ?>
          </form>
          
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Pengaduan</h6>
        </div>
        <div class="card-body">
          <?=anchor('assets/uploads/'.$data_pengaduan['foto'], 'Lihat File')?>
          <br>
          <a href="<?php echo base_url('assets/uploads/' . $data_pengaduan['foto']) ?>" download>Download File</a>
          <!-- <img src="<?= base_url('assets/uploads/' . $data_pengaduan['foto']) ?>" width="100%" class="img-thumbnail"> -->
          <hr>
          <p class="card-title">Tanggal Pengaduan : <?= $data_pengaduan['tgl_pengaduan']; ?></p>
          <p class="card-text">Status : <?= $data_pengaduan['status'] == 0 ? 'Belum di verifikasi' : ''; ?></p>
          <p class="card-text">Laporan : <?= $data_pengaduan['isi_laporan'] ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->