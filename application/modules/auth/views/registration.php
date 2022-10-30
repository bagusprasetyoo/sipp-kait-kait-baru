<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-success">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1 font-weight-bold text-green">REGISTRASI</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Registrasi untuk pengguna baru</p>

        <form action="<?= base_url('auth/registration') ?>" method="post">
          <div class="form-group mb-3">
            <div class="input-group">
              <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : null ?>" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <?= form_error('nik') ?>
          </div>
          <div class="input-group mb-3">
            <div class="input-group">
              <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : null ?>" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <?= form_error('email') ?>
          </div>

          <div class="input-group mb-3">
            <div class="input-group">
              <input type="text" class="form-control <?= form_error('nohp') ? 'is-invalid' : null ?>" id="nohp" name="nohp" placeholder="No Handphone" value="<?= set_value('nohp'); ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
            <?= form_error('nohp') ?>
          </div>
          <div class="input-group mb-3">
            <div class="input-group">
              <input type="password" class="form-control <?= form_error('password1') ? 'is-invalid' : null ?>" id="password1" name="password1" placeholder="Password" value="<?= set_value('password1'); ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error('password1') ?>
          </div>
          <div class="input-group mb-3">
            <div class="input-group">
              <input type="password" class="form-control <?= form_error('password2') ? 'is-invalid' : null ?>" id="password2" name="password2" placeholder="Tulis ulang password" value="<?= set_value('password2'); ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error('password2') ?>
          </div>

          <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-success btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
            <div class="col mt-2">
              <a href="<?= base_url(); ?>" class="btn btn-default btn-block">Batalkan</a>
            </div>
          </div>
        </form>
        <hr>
        <p>
          Sudah memiliki akun? <a href="<?= base_url('auth/login/'); ?>">Login</a>
        </p>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->