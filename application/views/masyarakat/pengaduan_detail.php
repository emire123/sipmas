<!-- Begin Page Content -->
<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Data obat</h1> -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="foto_lama" value="<?= base_url('assets/uploads/'.$data_pengaduan['foto']) ?>">
                        <div class="form-group">
                            <label for="laporan">Laporan</label>
                            <input type="text" value="<?= $data_pengaduan['isi_laporan'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="status">Status &nbsp;</label>
                            <?php 
						if ($data_pengaduan['status'] == '0') :
							echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
						elseif ($data_pengaduan['status'] == 'proses') :
							echo '<span class="badge badge-primary">Sedang di proses</span>';
						elseif ($data_pengaduan['status'] == 'selesai') :
							echo '<span class="badge badge-success">Selesai di kerjakan</span>';
						elseif ($data_pengaduan['status'] == 'tolak') :
							echo '<span class="badge badge-danger">Pengaduan di rujuk</span>';
						else :
							echo '-';
						endif;
						?>
                        </div>
                        <div class="form-group">
                            <label for="tanggapan">Tanggapan</label>
                            <input type="text" value="<?= $data_pengaduan['tanggapan'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tgl_pengaduan">Tanggal Pengaduan</label>
                            <input type="text" value="<?= $data_pengaduan['tgl_pengaduan'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tgl_tanggapan">Tanggal Tanggapan</label>
                            <input type="text"  value="<?= $data_pengaduan['tgl_tanggapan'] ?>" class="form-control" readonly>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Foto</h6>
                </div>
                <div class="card-body">
                <img src="<?= base_url('assets/uploads/'.$data_pengaduan['foto']) ?>" width="100%" class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
