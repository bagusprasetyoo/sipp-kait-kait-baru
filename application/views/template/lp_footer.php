</div>
<!-- /.content-wrapper -->
<footer class="main-footer text-dark text-center mb-0">
  <div class="container my-3">
    <div class="row mx-auto">
      <div class="col-4 col-md">
        <h5>Alamat</h5>
        <ul class="list-unstyled text-small text-justify">
          <li><a>Jl. Penghijauan Rt 03 Rw 02, Kec. Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan
              Kode Pos 70852</a></li>
  
        </ul>
      </div>
      <div class="col-4 col-md ">
        <h5>Jelajahi</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="<?= base_url('landingpage'); ?>">Layanan</a></li>
          <li><a class="text-muted" href="<?= base_url('landingpage'); ?>">Profil</a></li>
          <li><a class="text-muted" href="<?= base_url('landingpage'); ?>">Kontak</a></li>
        </ul>
      </div>
      <div class="col-4 col-md">
        <h5>Kontak</h5>
        <ul class="list-unstyled text-small ">
          <li><a class="text-muted" href="#">+6288776543211</a></li>
          <li><a class="text-muted" href="#">kaitkaitbaru@gmail.com</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<!-- Main Footer -->
<footer class="main-footer text-center"style="background-color: #000">
      <strong>Copyright &copy; 2022.</strong> All rights reserved.
</footer>
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