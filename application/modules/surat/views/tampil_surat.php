<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.content-header -->
                    <div class="content-header">
                        <?php if ($this->fungsi->user_login()->role == 'Pengguna') { ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="<?= base_url('surat/add'); ?>" class="btn btn-success"> + Buat
                                            Surat </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Surat</th>
                                        <th>NIK</th>
                                        <th>Dikirim Oleh</th>
                                        <th>Tanggal Surat</th>
                                        <th>Valid RT</th>
                                        <th>Valid Kades</th>
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
                                            <td><?= date('d-m-Y', strtotime($data->tanggal_surat)); ?></td>
                                            <td class="text-center">
                                                <?php if ($data->valid_rt == '1') { ?>
                                                    <span class="badge bg-success"><i class="fas fa-check"></i></span>
                                                <?php } else { ?>
                                                    <span class="badge bg-secondary"><i class="far fa-clock"></i></span>
                                                <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($data->valid_kades == '1') { ?>
                                                    <span class="badge bg-success"><i class="fas fa-check"></i></span>
                                                <?php } else { ?>
                                                    <span class="badge bg-secondary"><i class="far fa-clock"></i></span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($data->valid_rt == '1' && $data->valid_kades == '0') { ?>
                                                    <span class="badge bg-info">Diterima</span>
                                                <?php } else if ($data->valid_rt == '1' && $data->valid_kades == '1') { ?>
                                                    <span class="badge bg-success">Selesai</span>
                                                <?php } else { ?>
                                                    <span class="badge bg-warning">Menunggu</span>
                                                <?php }  ?>

                                            </td>
                                            <td>
                                                <a href="<?= base_url('surat/view_surat/') . $data->id_surat; ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i></a>
                                                <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                                                    <?php if ($data->valid_rt == '1' && $data->valid_kades == '1') { ?>
                                                        <a target="blank" href="<?= base_url('surat/print/') . $data->id_surat; ?>" class="btn btn-warning btn-sm"><i class="fas fa-print"></i></a>
                                                    <?php } ?>
                                                    <a href="<?= base_url('surat/delete/') . $data->id_surat; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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