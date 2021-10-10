<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('user/ProfileController/update_foto'); ?>
            <div class="form-group row">
                <label for="nama_petugas" class="col-sm-2 col-form-label">Username</label>
                <?php if ($this->session->userdata('level') == 'admin' or $this->session->userdata('level') == 'petugas') : ?>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" readonly>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->userdata('level') == NULL) : ?>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" readonly>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/profile/') . $user['foto_profile']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto_profile" name="foto_profile">
                                <label class="custom-file-label" for="foto_profile">Choose file</label>
                                <label for="foto">*Jenis file : JPG ,JPEG, PNG. (Max 5 MB)</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">OK</button>
                    </div>
                </div>
            </div>


            </form>


        </div>
    </div>
</div>
<!-- /.container-fluid
    