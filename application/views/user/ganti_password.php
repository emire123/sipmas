<!-- Begin Page Content -->
<div class="container-fluid">

	<?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>') ?>
	<?= $this->session->flashdata('msg'); ?>

	<!-- Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800">Tambah Data obat</h1> -->
	<div class="col-lg-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
			</div>
			<div class="card-body">
				<?= form_open('Auth/ChangePasswordController') ?>
				<div class="form-group">
					<label for="current_password">Password Sekarang</label>
					<input type="password" class="form-control" id="current_password" name="current_password" placeholder="Masukkan Password Lama">

				</div>
				<div class="form-group">
					<label for="new_password">Password Baru</label>
					<input type="password" class="form-control" id="new_password" name="new_password" placeholder="Masukkan Password Baru">
				</div>
				<div class="form-group">
					<label for="confirm_password">Konfirmasi Password Baru</label>
					<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password Baru" aria-describedby="currentPasswordHelp">
					<small id="currentPasswordHelp" class="form-text text-muted">Jangan pernah beritahukan password
						kepada siapapun.</small>
				</div>
				<div class="custom-control custom-checkbox mb-2">
					<input type="checkbox" class="custom-control-input" id="check_confirmation_password" name="confirmation_password" value="agree">
					<label class="custom-control-label" for="check_confirmation_password">Anda yakin mengganti Password
						?</label>
				</div>
				<div class="float-right">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->