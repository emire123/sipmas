<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Data obat</h1> -->
  <div class="col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buat Pengaduan</h6>
      </div>
      <div class="card-body">
        <?= form_open_multipart('Masyarakat/PengaduanController'); ?>
        <div class="form-group">
          <label for="isi_laporan">Isi Laporan</label>
          <textarea name="isi_laporan" id="isi_laporan" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <label for="foto">Upload File</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="foto" name="foto">
            <label class="custom-file-label" for="foto">Choose file</label>
            <small for="foto">*Jenis file : PDF , JPG ,JPEG, PNG. (Max 5 MB)</small>
          </div>
        </div>
        <br>

        <div class="float-right">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <?php form_close(); ?>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->