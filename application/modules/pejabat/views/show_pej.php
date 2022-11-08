<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->view('template/alert'); ?>
                <div class="card">
                    <!-- /.content-header -->
                    <div class="content-header">
                        <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="<?= base_url('pejabat/add'); ?>" class="btn btn-success">+ Tambah
                                            Data Pejabat</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>NIP</th>
                                        <th width="13%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td><?= $data->nama_pejabat; ?></td>
                                            <td><?= $data->jabatan; ?></td>
                                            <td><?= $data->nip; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalpend<?= $data->id_pejabat; ?>">
                                                    <i class="fas fa-eye"></i></button>
                                                <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                                                    <a href="<?= base_url('pejabat/edit/') . $data->id_pejabat; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="<?= base_url('pejabat/delete/') . $data->id_pejabat; ?>" onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <!-- Modal -->
        <?php foreach ($row->result() as $key => $data) { ?>
            <div class="modal fade" id="modalpend<?= $data->id_pejabat; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Data Pejabat</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-borderless table-sm">
                                <tr>
                                    <th style="width:50%">Nama</th>
                                    <td><?= $data->nama_pejabat; ?></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td><?= $data->jabatan; ?></td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td><?= $data->nip; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer right-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        <?php } ?>
        <!-- /.modal -->
</section>
<!-- /.content -->