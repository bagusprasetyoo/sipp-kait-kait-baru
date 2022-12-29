<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->view('template/alert'); ?>
                <div class="card">
                    <!-- /.content-header -->
                    <div class="content-header">
                        <?php

                        use function PHPSTORM_META\type;

                        if ($this->fungsi->user_login()->role == 'Admin') { ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="<?= base_url('penduduk/add'); ?>" class="btn btn-success">+ Tambah
                                            Data Penduduk</a>
                                    </div>
                                </div>
                                <!-- <div class="btn-group mt-2">
                                    <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-file-import"></i> import
                                        excel</a>
                                </div> -->
                            <?php } ?>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                                    <div class="btn-group mb-2" id="filter">
                                        <a href="<?= base_url('penduduk/show'); ?>" type="button" class="btn btn-secondary btn-xs">
                                            <i class="fas fa-user"></i> Penduduk
                                        </a>
                                        <a href="<?= base_url('penduduk/show_all'); ?>" type="button" class="btn btn-secondary btn-xs">
                                            <i class="fas fa-user-tie"></i> Petugas
                                        </a>
                                    </div>
                                <?php } ?>
                                <table id="example1" class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>JK</th>
                                            <th>Alamat</th>
                                            <th>RT/RW</th>
                                            <th width="13%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($row->result() as $key => $data) { ?>
                                            <tr>
                                                <td><?= $data->nik; ?></td>
                                                <td><?= $data->nama; ?></td>
                                                <td><?= $data->tempat_lahir; ?></td>
                                                <td><?= date('d-m-Y', strtotime($data->tanggal_lahir)); ?></td>
                                                <td><?php if ($data->jenis_kelamin == 'Laki-Laki') { ?>LK<?php } else { ?>PR<?php } ?></td>
                                                <td><?= $data->alamat; ?></td>
                                                <td><?= $data->rt; ?>/<?= $data->rw; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modalpend<?= $data->nik; ?>">
                                                        <i class="fas fa-eye"></i></button>
                                                    <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                                                        <a href="<?= base_url('penduduk/edit/') . $data->nik; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                        <a href="<?= base_url('penduduk/delete/') . $data->nik; ?>" onclick="return confirm('Yakin Hapus Data?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
                <div class="modal fade" id="modalpend<?= $data->nik; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Detail Data Penduduk</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-borderless table-sm">
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
                                        <td><?= $data->nama; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td><?= $data->tempat_lahir; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td><?= date('d-m-Y', strtotime($data->tanggal_lahir)); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?= $data->jenis_kelamin; ?></td>
                                    </tr>
                                    <tr class="border-top">
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
                                    <tr class="border-bottom">
                                        <th></th>
                                        <td><?= $data->kec_kab_prov; ?></td>
                                    </tr>

                                    <tr>
                                        <th>Agama</th>
                                        <td><?= $data->agama; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status Perkawinan</th>
                                        <td><?= $data->status_nikah; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pekerjaan</th>
                                        <td><?= $data->pekerjaan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kewarganegaraan</th>
                                        <td><?= $data->kewarganegaraan; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gol. Darah</th>
                                        <td><?= $data->gol_darah; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ayah</th>
                                        <td><?= $data->nama_ayah; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Ibu</th>
                                        <td><?= $data->nama_ibu; ?></td>
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