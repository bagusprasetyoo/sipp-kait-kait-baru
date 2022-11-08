<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-success">
                    <h5><i class="fas fa-info"></i> Info:</h5>
                    Data pejabat digunakan untuk pilihan penandatanganan surat yang telah divalidasi.
                </div>
                <?= $this->session->flashdata('alert_pend'); ?>
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title"><?= $title; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('pejabat/process') ?>" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <!-- id_pejabat diperlikan sebagai parameter di model tp di hidden di form -->
                                    <input type="hidden" class="form-control" name="id_pejabat" value="<?= $row->id_pejabat ?>" required>
                                    <input type="text" class="form-control" name="nama_pejabat" placeholder="Nama Lengkap" value="<?= $row->nama_pejabat ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?= $row->jabatan ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?= $row->nip ?>">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success">Simpan</i></button>
                            <a href="<?= base_url('pejabat/show'); ?>" class="btn btn-secondary">Batal</i></a>
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