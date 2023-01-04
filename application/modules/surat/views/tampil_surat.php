<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?= $this->view('template/alert'); ?>
                <div class="card">

                    <!-- /.content-header -->
                    <div class="content-header">
                        <?php if ($this->fungsi->user_login()->role == 'Pengguna') { ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="<?= base_url('surat/pilih'); ?>" class="btn btn-success"> + Pilih
                                            Surat </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table <?php if($this->fungsi->user_login()->role == 'Admin'){ ?>id="example1"<?php } else {?>id="example3"<?php } ?> class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Jenis Surat</th>
                                        <th>NIK</th>
                                        <th>Dikirim Oleh</th>
                                        <th>Tanggal Surat</th>
                                        <th width="5%">Valid RT</th>
                                        <th width="5%">Valid Kades</th>
                                        <th>Status</th>
                                        <th <?php if ($this->fungsi->user_login()->role != 'Pengguna') { ?>width="17%" <?php } ?>>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $data->jenis_surat; ?></td>
                                            <td><a href="" class="text-dark" data-toggle="modal" data-target="#modalpend<?= $data->nik; ?>"><?= $data->nik; ?></a></td>
                                            <td><a href="" class="text-dark" data-toggle="modal" data-target="#modalpend<?= $data->nik; ?>"><?= $data->nama; ?></a></td>
                                            <td><?= date('d-m-Y H:i', strtotime($data->tanggal_surat)); ?></td>
                                            <td class="text-center">
                                                <?php if ($data->valid_rt == '1') { ?>
                                                    <span class="badge bg-success"><i class="fas fa-check"></i></span>
                                                <?php } else if ($data->valid_rt == '2') { ?>
                                                    <span class="badge bg-danger"><i class="fas fa-xmark"></i></span>
                                                <?php } else { ?>
                                                    <span class="badge bg-gray"><i class="far fa-clock"></i></span>
                                                <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($data->valid_kades == '1') { ?>
                                                    <span class="badge bg-success"><i class="fas fa-check"></i></span>
                                                <?php } else if ($data->valid_kades == '2') { ?>
                                                    <span class="badge bg-danger"><i class="fas fa-xmark"></i></span>
                                                <?php } else { ?>
                                                    <span class="badge bg-gray"><i class="far fa-clock"></i></span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($data->valid_rt == '1' && $data->valid_kades == '0') { ?>
                                                    <span class="badge bg-secondary">Disetujui RT</span>
                                                <?php } else if ($data->valid_rt == '1' && $data->valid_kades == '1') { ?>
                                                    <span class="badge bg-success">Selesai</span>
                                                <?php } else if ($data->valid_rt == '2' || $data->valid_kades == '2') { ?>
                                                    <span class="badge bg-danger">Ditolak</span>
                                                <?php } else { ?>
                                                    <span class="badge bg-secondary">Menunggu</span>
                                                <?php }  ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('surat/read_surat/') . $data->id_surat; ?>" class="btn btn-secondary btn-sm">
                                                    <i class="fas fa-eye"></i></a>
                                                <?php if ($this->fungsi->user_login()->role == 'Admin') { ?>
                                                    <?php if ($data->valid_rt == '1' && $data->valid_kades == '1') { ?>
                                                        <a target="blank" href="<?= base_url('surat/print/') . $data->id_surat; ?>" onclick="return confirm('Cetak surat?')" class="btn btn-warning btn-sm"><i class="fas fa-print"></i></a>
                                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalsignature<?= $data->id_surat; ?>"><i class="fas fa-file-signature"></i></button>
                                                    <?php } ?>
                                                    <a href="<?= base_url('surat/delete/') . $data->id_surat; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                <?php } ?>
                                                <?php if ($this->fungsi->user_login()->role == 'RT') { ?>
                                                    <a href="<?= base_url('surat/validasi_rt/') . $data->id_surat; ?>" onclick="return confirm('Setujui surat?')" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
                                                    <a href="<?= base_url('surat/tolak_rt/') . $data->id_surat; ?>" onclick="return confirm('Apakah anda yakin ingin menolak surat?')" class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i></a>
                                                <?php } ?>
                                                <?php if ($this->fungsi->user_login()->role == 'Kepala Desa') { ?>
                                                    <a href="<?= base_url('surat/validasi_kades/') . $data->id_surat; ?>" onclick="return confirm('Setujui surat?')" class="btn btn-success btn-sm"><i class="fas fa-check"></i></a>
                                                    <a href="<?= base_url('surat/tolak_kades/') . $data->id_surat; ?>" onclick="return confirm('Apakah anda yakin ingin menolak surat?')" class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i></a>
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

<?php if ($this->fungsi->user_login()->role != 'Pengguna') { ?>
    <!-- Modal Detail Pengguna Pengirim surat -->
    <?php foreach ($row->result() as $key => $data) { ?>
        <div class="modal fade" id="modalpend<?= $data->nik; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Pengirim</h4>
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
                            <tr>
                                <th></th>
                                <td> Kec. Bati-Bati, Kab. Tanah Laut, Prov. Kalimantan Selatan</td>
                            </tr>
                            <tr class="border-top">
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
<?php } ?>

<!-- Modal Memilih Penandatangan -->
<?php foreach ($row->result() as $key => $data) { ?>
    <div class="modal fade" id="modalsignature<?= $data->id_surat; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pilih Penandatangan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?= base_url('surat/tanda_tangan') ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Pilih Penandatangan Surat</label>
                            <input type="hidden" name="idsurat" value="<?= $data->id_surat; ?>">
                            <select class="form-control" name="tanda_tangan">
                                <?php foreach ($pejabat->result() as $key => $row) { ?>
                                    <option value="<?= $row->id_pejabat; ?>" <?= $row->id_pejabat == $data->id_pejabat ? "selected" : null; ?>>
                                        <?= $row->nama_pejabat; ?> - <?= $row->jabatan; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer right-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Pilih</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->