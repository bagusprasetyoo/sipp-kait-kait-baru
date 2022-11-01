<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->

    <div class="card card-outline card-success">
      <div class="card-header text-center">
        <a href="<?= base_url(); ?>" class="h1 font-weight-bold text-green">LOGIN</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan login</p>

        <?= $this->session->flashdata('message'); ?>

        <form action="<?= base_url('auth/login'); ?>" method="post">
          <div class="form-group mb-3">
            <div class="input-group">
              <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : null ?>" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <?= form_error('nik', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
          <div class="input-group mb-3">
            <div class="input-group">
              <input type="password" class="form-control <?= form_error('nik') ? 'is-invalid' : null ?>" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error('password', '<small class="text-danger pl-2">', '</small>') ?>
          </div>
          <div class="row">
            <div class="col">
              <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
            </div>
          </div>
          <div class="row">
            <div class="col mt-2">
              <a href="<?= base_url(); ?>" class="btn btn-default btn-block">Batalkan</a>
            </div>
          </div>

        </form>
        <hr>
        <p class="mb-1">
          <a href="forgot-password.html">Lupa password</a>
        </p>
        <p class="mb-0">
          Belum memiliki akun? <a href="<?= base_url('auth/registration'); ?>" class="text-center">Silahkan registrasi</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->