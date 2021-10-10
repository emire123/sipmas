<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<br>
	<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
	<hr>
	<br>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="float-right"><a href="<?= base_url('cetak'); ?>" target="_blank" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Print</a></div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">NIK</th>
							<th scope="col">Laporan</th>
							<th scope="col">Tanggal Terima</th>
							<th scope="col">Status</th>
							<th scope="col">Tanggapan</th>
							<th scope="col">Tanggal Respon</th>
						</tr>
					</thead>
					<tbody>

						<?php $no = 1; ?>
						<?php foreach ($laporan as $l) : ?>
							<tr>
								<th scope="row"><?= $no++; ?></th>
								<td><?= $l['nama'] ?></td>
								<td><?= $l['nik'] ?></td>
								<td><?= $l['isi_laporan'] ?></td>
								<td><?= $l['tgl_pengaduan'] ?></td>
								<td>
									<?php
									if ($l['status'] == '0') :
										echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
									elseif ($l['status'] == 'proses') :
										echo '<span class="badge badge-primary">Sedang di proses</span>';
									elseif ($l['status'] == 'selesai') :
										echo '<span class="badge badge-success">Selesai di kerjakan</span>';
									elseif ($l['status'] == 'tolak') :
										echo '<span class="badge badge-danger">Pengaduan di rujuk</span>';
									else :
										echo '-';
									endif;
									?>
								</td>
								<td><?= $l['tanggapan'] == null ? '-' : $l['tanggapan']; ?></td>
								<td><?= $l['tgl_tanggapan'] == null ? '-' : $l['tgl_tanggapan']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->