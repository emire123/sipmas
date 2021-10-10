<div class="container">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
  <hr />

  <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-6">
        <div class="p-3">
          <?= form_open('Admin/PetugasController/edit/'.$petugas['id_petugas']); ?>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama"
              value="<?= $petugas['nama_petugas'] ?>">
          </div>


          <div class="form-group">
            <label for="telp">Telp</label>
            <input type="text" class="form-control" id="telp" placeholder="" name="telp"
              value="<?= $petugas['telp'] ?>">
          </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="level" id="petugas" value="petugas"
                <?= $petugas['level'] == 'petugas' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="petugas">Petugas</label>
            </div>
          </div>

          <div class="float-right">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <?= form_close(); ?>
        </div>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>

</div>