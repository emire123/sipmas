<!-- Begin Page Content -->
<div class="container-fluid">

 
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Data obat</h1> -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label>nama</label>
                            <input type="hidden" name="nik" class="form-control" value="<?= $user['nik'] ?>">
                            <input type="text" name="nama" class="form-control" value="<?php echo $user->nama ?>" readonly>

                        </div>
                       
                        <div class="form-group">
                            <label for="tanggapan">nik</label>
                            <input type="text" value="<?= $user['nik'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tlp">Alamat</label>
                            <input type="text" value="<?= $user['alamat'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tlp">telpon</label>
                            <input type="text" value="<?= $user['tlp'] ?>" class="form-control" readonly>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <!-<div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Foto</h6>
                </div>
                <div class="card-body">
                    <img src="<?= base_url('assets/uploads/' . $user['foto_profile']) ?>" width="100%" class="img-thumbnail">
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- /.container-fluid -->