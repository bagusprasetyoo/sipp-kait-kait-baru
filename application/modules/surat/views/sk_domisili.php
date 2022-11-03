<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('message'); ?>
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('surat/sk_domisili') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>NIK</label>
                                <select name="nik" class="select2 form-control custom-select" required>
                                    <?php
                                    foreach ($penduduk as $penduduk) : {
                                    ?>
                                            <option value="<?php echo $penduduk->nik; ?>">
                                                <?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?>
                                            </option>
                                    <?php
                                        }
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" name="pengguna" class="btn btn-success">Simpan</i></button>
                                <a href="<?= base_url('pengguna/tampil_peng'); ?>" class="btn btn-secondary">Kembali</i></a>
                            </div>
                            <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->