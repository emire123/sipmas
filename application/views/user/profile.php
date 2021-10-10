<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/profile/' . $user['foto_profile']) ?>" class="card-img" alt="img user">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">Username : <?= $user['username']; ?></h5>
                    <p class="card-text">Telepon : <?= $user['telp']; ?></p>
                    <br>
                    <?php if ($this->session->userdata('level') == 'admin' or $this->session->userdata('level') == 'petugas') : ?>
                        <a href="<?= base_url('User/ProfileController/edit'); ?>" class="btn btn-success">Ganti Foto</a>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('level') == NULL) : ?>
                        <a href="<?= base_url('User/ProfileController/edit'); ?>" class="btn btn-success">Ganti Foto</a>
                    <?php endif; ?>
                    <a href="<?= base_url('Auth/ChangePasswordController');  ?>" class="btn btn-success">Ganti
                        Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid