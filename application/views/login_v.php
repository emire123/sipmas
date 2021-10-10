

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">


    <div class="col-lg-6">

      <div class="card o-hidden border-0 shadow-lg my-5" style="width: 90%">
        <div class="row justify-content-center mt-5">
             <img src="<?= base_url() ?>/assets/utama/sohib.png" widht="150" height="150" class="rounded" alt="..."></div>
        <div class="card-body p-0">

          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-5"><b>LOGIN SIPMAS</b></h1>
                </div>

                <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>') ?>

                <?= $this->session->flashdata('msg'); ?>
                
                <?= form_open('Auth/LoginController', 'class="user"'); ?>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autofocus value="<?= set_value('username') ?>">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('Auth/RegisterController') ?>">Belum Punya Akun? Daftar disini!</a>
                  <br>
                  <br>
                  <a class="small" href="<?= base_url('utama') ?>">Kembali ke home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
