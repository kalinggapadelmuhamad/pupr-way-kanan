<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Pekerja</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Form Pekerja</li>
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
                <div class="col-xl-12 col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <?php if (isset($_GET['success'])) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Berhasil Tambah Data.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <?php if (isset($_GET['nik'])) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Nik Sudah Terdaftar.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <img class="img-fluid mx-auto d-block" src="../assets/img/kop.png" alt="" style="width: 100%;">
                            <form action="../app/models/pekerja/store.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-6">
                                        <label for="Nama" class="font-weight-bold">Nama</label>
                                        <input type="text" class="form-control" id="Nama" name="Nama" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Nik" class="font-weight-bold">Nik</label>
                                        <input type="number" class="form-control" id="Nik" name="Nik" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Alamat" class="font-weight-bold">Alamat</label>
                                        <textarea class="form-control" id="Alamat" name="Alamat" required></textarea>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="Desa" class="font-weight-bold">Desa</label>
                                        <input type="text" class="form-control" id="Desa" name="Desa" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="Desa" class="font-weight-bold">Kecamatan</label>
                                        <input type="text" class="form-control" id="Desa" name="kecamatan" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="NoTelepon" class="font-weight-bold">No. Telepon</label>
                                        <input type="number" class="form-control" id="NoTelepon" name="NoTelepon" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Pekerjaan" class="font-weight-bold">Pekerjaan</label>
                                        <input type="text" class="form-control" id="Pekerjaan" name="Pekerjaan" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="KualifikasiTenagaKerja" class="font-weight-bold">Kualifikasi Tenaga Kerja</label>
                                        <input type="text" class="form-control" id="KualifikasiTenagaKerja" name="KualifikasiTenagaKerja" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="PendidikanTerakhir" class="font-weight-bold">Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" id="PendidikanTerakhir" name="PendidikanTerakhir" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="PendidikanTerakhir" class="font-weight-bold">Foto Ktp</label>
                                        <input type="file" class="form-control" id="PendidikanTerakhir" name="ktp" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="PendidikanTerakhir" class="font-weight-bold">Pas Foto</label>
                                        <input type="file" class="form-control" id="PendidikanTerakhir" name="foto" required>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="PendidikanTerakhir" class="font-weight-bold">TTD</label>
                                        <input type="file" class="form-control" id="PendidikanTerakhir" name="ttd" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="storePekerja">Simpan</button>
                            </form>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>



        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>