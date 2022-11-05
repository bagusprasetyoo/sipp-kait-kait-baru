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
                                            <td><?= date('d-m-Y', strtotime($data->tanggal_surat)); ?></td>
                                            <td class="text-center">
                                                <?php if ($data->valid_rt == '1') { ?>
                                                    <i class="fa-solid fa-check text-success"></i>
                                                <?php } else { ?>
                                                    <i class="fa-solid fa-clock text-warning"></i>
                                                <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($data->valid_kades == '1') { ?>
                                                    <i class="fa-solid fa-check text-success"></i>
                                                <?php } else { ?>
                                                    <i class="fa-solid fa-clock text-warning"></i>
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
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalpend">
                                                    <i class="fas fa-eye"></i></button>
                                                <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                                                    <a href="<?= base_url(); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <form action="<?= base_url('surat/delete') ?>" method="post">
                                                        <input type="hidden" name="id_surat" value="<?= $data->id_surat; ?>">
                                                        <button onclick="return confirm('Apakah anda yakin ingin menghapus data?')" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                    </form>
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