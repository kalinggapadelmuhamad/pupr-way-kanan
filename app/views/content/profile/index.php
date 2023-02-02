<?php

$idUser = $_SESSION['idUser'];
$sqlProfile = "SELECT * FROM user WHERE id = '$idUser'";
$exeProfile = $conn->query($sqlProfile);
$resProfile = $exeProfile->fetch_object();


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->

            <div class="row mb-3">
                <div class="col-xl-3 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <?= ($resProfile->jenisKelamin == 'L') ? '<img class="d-block mx-auto img-profile rounded-circle" src="../assets/img/boy.png" style="max-width: 200px;">' : '<img class="d-block mx-auto img-profile rounded-circle" src="../assets/img/girl.png" style="max-width: 200px;">' ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-9 col-md-9 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <?php if (isset($_GET['success'])) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Profile Berhasil Di Update.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <?php if (isset($_GET['password'])) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Minimal Password 8 Karakter.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <form action="../app/models/profile/update.php" method="POST">
                                <input type="hidden" class="form-control" id="exampleFormControlInput1" value="<?= $resProfile->id ?>" name="idUser" required>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1" class="form-label font-weight-bold">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $resProfile->nama ?>" name="nama" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlInput1" class="form-label font-weight-bold">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1" value="<?= $resProfile->tglLahir ?>" name="tglLahir" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleFormControlSelect1" class="form-label font-weight-bold">Jenis Kelamin</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="jenisKelamin">
                                            <?= ($resProfile->jenisKelamin == 'L') ? '<option value="L" selected>Laki Laki</option> <option value="P">Perempuan</option>' : '<option value="L">Laki Laki</option> <option value="P" selected>Perempuan</option>'; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label font-weight-bold">Username</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $resProfile->username ?>" name="username" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlInput1" class="form-label font-weight-bold">Password</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password Baru" name="password">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label font-weight-bold">Alamat</label>
                                    <textarea class="form-control" id="exampleFormControlInput1" name="alamat" required><?= $resProfile->alamat ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="updateProfile">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>