<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
  <hr />

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="float-right">
      </div>
    </div>

    <div class="table-responsive">
      <div class="card-body">
        <table class="table table-bordered" id="dataTable">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Tgl Melapor</th>
            <th scope="col">File</th>
            <th scope="col">Status</th>
            <th scope="col">Lihat Detail</th>
          </tr>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_pengaduan as $dp) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $dp['nama']; ?></td>
              <td><?= $dp['isi_laporan']; ?></td>
              <td><?= $dp['tgl_pengaduan']; ?></td>
              <td>
                <img width="100" src="<?= base_url() ?>assets/uploads/<?= $dp['foto']; ?>" alt="">
              </td>
              <td>
                <?php
            if ($dp['status'] == '0') :
              echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
            elseif ($dp['status'] == 'proses') :
              echo '<span class="badge badge-primary">Sedang di proses</span>';
            elseif ($dp['status'] == 'selesai') :
              echo '<span class="badge badge-success">Selesai di kerjakan</span>';
            elseif ($dp['status'] == 'tolak') :
              echo '<span class="badge badge-danger">Pengaduan di rujuk</span>';
            else :
              echo '-';
            endif;
            ?>
              </td>
              <td class="text-center">
                <a href="<?= base_url('Masyarakat/PengaduanController/pengaduan_detail/'.$dp['id_pengaduan']) ?>"
                  class="btn btn-success"><i class="fas fa-fw fa-eye"></i></a>
              </td>

  
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>


    </div>
    <!-- /.container-fluid -->