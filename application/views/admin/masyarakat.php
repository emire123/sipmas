<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-lg-12">
        <br>
        <h1 class="h3 mb-2 text-gray-800">Daftar Akun Masyarakat</h1>
        <hr>
        <br>

        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table table-bordered" id="dataTable">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telepon</th>
                  
                        <!-- <th scope="col">Aksi</th> -->
                    </tr>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data_masyarakat as $dm) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $dm['nik']; ?></td>
                                <td><?= $dm['nama']; ?></td>
                                <td><?= $dm['username']; ?></td>
                                <td><?= $dm['alamat']; ?></td>
                                <td><?= $dm['telp']; ?></td>
                                                                   
                               
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->