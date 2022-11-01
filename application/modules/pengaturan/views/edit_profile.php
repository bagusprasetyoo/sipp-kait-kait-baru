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

                <h3 class="profile-username text-center">Username</h3>

                <p class="text-muted text-center">Role</p>

                <!-- <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Bargabung Sejak</b> <a class="float-right">2022</a>
                    </li>
                </ul> -->
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="nama" value="<?= $this->fungsi->user_login()->nama; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $user['nik']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $user['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">No Handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nohp" placeholder="No Handphone" value="<?= $user['no_hp']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Gambar Profil</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image"">
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div><!-- /.container-fluid -->

</section>

<!-- /.content -->