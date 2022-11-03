<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.content-header -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="<?= base_url('surat/add_surat'); ?>" class="btn btn-success"> + Buat
                                        Surat </a>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Surat</th>
                                        <th>NIK</th>
                                        <th>Dikirim Oleh</th>
                                        <th>Tanggal Surat</th>
                                        <th>Validasi RT</th>
                                        <th>Validasi Kades</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $no = 1;
                                        foreach ($row->result() as $key => $data) { ?>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->jenis_surat; ?></td>
                                            <td><?= $data->nik; ?></td>
                                            <td><?= $data->nama; ?></td>
                                            <td><?= $data->tanggal_surat; ?></td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="badge bg-info"><?= $data->status; ?></span></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalpend">
                                                    <i class="fas fa-eye"></i></button>
                                                <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                                                    <a href="<?= base_url(); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                <?php } ?>
                                                <?php if ($this->fungsi->user_login()->role == 'RT') { ?>
                                                    <a href="<?= base_url(); ?>" class="btn btn-warning btn-sm"><i class="fas fa-check"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i></a>
                                                <?php } ?>
                                                <?php if ($this->fungsi->user_login()->role == 'Kepala Desa') { ?>
                                                    <a href="<?= base_url(); ?>" class="btn btn-warning btn-sm"><i class="fas fa-check"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i></a>
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
</section>
<!-- /.content -->