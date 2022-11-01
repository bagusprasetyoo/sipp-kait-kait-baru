</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer text-center bg-dark">
    <!-- Default to the left -->
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