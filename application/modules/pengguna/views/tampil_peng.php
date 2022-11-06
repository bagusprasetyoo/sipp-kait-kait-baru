<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('alert_peng'); ?>
                <div class="card">
                    <!-- /.content-header -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="<?= base_url('pengguna/add'); ?>" class="btn btn-success">+ Tambah Data Pengguna</a>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nik</th>
                                        <th>Email</th>
                                        <th>No HP</th>
                                        <th>Role</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><a href="" class="text-dark" data-toggle="modal" data-target="#modalpend<?= $data->nik; ?>"><strong><?= $data->nik; ?></strong></a></td>
                                            <td><?= $data->email; ?></td>
                                            <td><?= $data->no_hp; ?></td>
                                            <td><?= $data->role; ?></td>
                                            <td><?= date('d-m-Y', strtotime($data->tanggal_daftar)); ?></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalpend<?= $data->nik; ?>">
                                                    <i class="fas fa-eye"></i></button>
                                                <a href="<?= base_url('pengguna/edit/' . $data->id_pengguna); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <a href="<?= base_url('pengguna/delete/') . $data->id_pengguna; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
            <div class="modal fade" id="modalpend<?= $data->nik; ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Data Pengguna</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-borderless table-sm">
                                <tr class="border-bottom">
                                    <th>Info Pribadi</th>
                                </tr>
                                <tr>
                                    <th style="width:50%">No KK</th>
                                    <td><?= $data->nokk; ?></td>
                                </tr>
                                <tr>
                                    <th>NIK/No KTP</th>
                                    <td><?= $data->nik; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td><strong><?= $data->nama; ?></strong></td>
                                </tr>
                                <tr>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <td><?= $data->tempat_lahir; ?>, <?= date('d-m-Y', strtotime($data->tanggal_lahir)); ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td><?= $data->jenis_kelamin; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><?= $data->alamat; ?></td>
                                </tr>
                                <tr>
                                    <th>RT/RW/Dusun</th>
                                    <td>
                                        <?= $data->rt; ?>/
                                        <?= $data->rw; ?>/
                                        <?= $data->dusun; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kel/Desa</th>
                                    <td><?= $data->desa; ?></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td> Kecamatan Bati-Bati, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan</td>
                                </tr>
                                <tr class="border-top border-bottom">
                                    <th>Info Pengguna</th>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?= $data->email; ?></td>
                                </tr>
                                <tr>
                                    <th>No Telephone</th>
                                    <td><?= $data->no_hp; ?></td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td><?= $data->role; ?></td>
                                </tr>
                                <tr>
                                    <th>Bergabung Sejak</th>
                                    <td><?= date('d-m-Y', strtotime($data->tanggal_daftar)); ?></td>
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