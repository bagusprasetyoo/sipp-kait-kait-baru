<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- Profile Image -->
        <div class="card card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $this->fungsi->user_login()->nama; ?></h3>

                <p class="text-muted text-center"><?= $user['role']; ?></p>

                <?= $this->session->flashdata('pesan'); ?>
                <?php echo form_open_multipart('pengaturan/edit_profile');?>
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="nama" placeholder="nama" value="<?= $this->fungsi->user_login()->nama; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $this->input->post('nik') ?? $user['nik']; ?>" readonly>
                            <?= form_error('nik') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $this->input->post('email') ?? $user['email']; ?>">
                            <?= form_error('email') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nohp" placeholder="No Handphone" value="<?= $this->input->post('nohp') ?? $user['no_hp']; ?>">
                            <?= form_error('nohp') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file" class="col-sm-2 col-form-label">Gambar Profil</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class=" custom-file-label" for="image">Ubah Gambar</label>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-success"><i class="fas fa-floppy-disk"></i>
                                Simpan Perubahan</button>
                        </div>
                    </div>
                </form>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->

</section>

<!-- /.content -->