<footer class="main-footer footer-dark p-0">
  <div class="container-fluid text-center py-3 bg-dark mb-0">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <img src="<?= base_url('assets/'); ?>/img/logoTala.svg" alt="Tanah Laut Logo" width="50px">
          <h5 class="text-green font-weight-bold">DESA KAIT-KAIT BARU</h5>
        </div>

      </div>
      <div class="row mx-auto">
        <div class="col-6 col-sm-4">
          <h5 class="font-weight-bold">Alamat</h5>
          <ul class="list-unstyled text-small text-justify">
            <li><i class="fa-solid fa-location-dot"></i> Jl. Penghijauan Rt 03 Rw 02, Kec. Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan
              Kode Pos 70852</li>
          </ul>
        </div>
        <div class="col-6 col-sm-4">
          <h5 class="font-weight-bold">Jelajahi</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="<?= base_url('landingpage/layanan'); ?>">Layanan</a></li>
            <li><a class="text-light" href="<?= base_url('landingpage/visimisi'); ?>">Profil</a></li>
            <li><a class="text-light" href="<?= base_url('landingpage/kontak'); ?>">Kontak</a></li>
          </ul>
        </div>
        <div class="col-6 col-sm-4">
          <h5 class="font-weight-bold">Kontak</h5>
          <ul class="list-unstyled text-small ">
            <li><i class="fa-solid fa-phone"></i> +6288776543211</li>
            <li><a class="text-light" href="#"><i class="fa-solid fa-envelope"></i> kaitkaitbaru@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center py-2 mb-0" style="background-color: #000">
    <strong>Copyright &copy; 2022.</strong> All rights reserved.
  </div>
</footer>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>

<!-- Script Menampilkan Menu active -->
<script>
  $(function() {
    var url = window.location;
    $('ul.navbar-nav a').filter(function() {
      return this.href == url;
    }).addClass('active');
  })
</script>
</body>

</html>