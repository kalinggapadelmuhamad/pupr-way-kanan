<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Form Badan Usaha</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Badan Usaha</li>
        </ol>
    </div>

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
                    <?php if (isset($_GET['namaPerusahaan'])) { ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Nama Perusahaan Sudah Terdaftar.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                    <img class="img-fluid mx-auto d-block" src="../assets/img/kop2.png" alt="" style="width: 100%;">
                    <form action="../app/models/badanUsaha/store.php" method="POST">
                        <div id="accordion">

                            <div class="card mt-4">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <label class="text-secondary font-weight-bold" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            DATA ADMINISTRASI
                                        </label>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Nama Perusahaan" class="font-weight-bold">Nama Perusahaan</label>
                                                <input type="text" class="form-control" id="Nama Perusahaan" name="namaPerusahaan" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Status Perusahaan" class="font-weight-bold">Status Perusahaan</label>
                                                <input type="text" class="form-control" id="Status Perusahaan" name="statusPerusahaan" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Alamat Perusahaan" class="font-weight-bold">Alamat Perusahaan</label>
                                                <textarea class="form-control" id="Alamat Perusahaan" name="alamatPerusahaan" required></textarea>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="No.Telpon" class="font-weight-bold">No.Telpon</label>
                                                <input type="number" class="form-control" id="No.Telpon" name="No.Telpon" required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="No. Fax " class="font-weight-bold">No. Fax </label>
                                                <input type="number" class="form-control" id="No. Fax " name="No.Fax" required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="E-mail" class="font-weight-bold">E-mail</label>
                                                <input type="email" class="form-control" id="E-mail" name="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <label class="text-secondary font-weight-bold" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                            DATA PENDIRIAN PERUSAHAAN
                                        </label>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <label for="Nomor Akte " class="font-weight-bold">Akte Pendirian </label>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Nomor Akte " class="font-weight-bold">Nomor Akte </label>
                                                <input type="number" class="form-control" id="Nomor Akte " name="noAktePendirian" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Tanggal Akte" class="font-weight-bold">Tanggal Akte</label>
                                                <input type="date" class="form-control" id="Tanggal Akte " name="tglAktePendirian" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Nama Notaris" class="font-weight-bold">Nama Notaris</label>
                                                <input type="text" class="form-control" id="Nama Notaris " name="namaNotarisPendirian" required>
                                            </div>
                                        </div>
                                        <label for="Nomor Akte " class="font-weight-bold">Akte Perubahan</label>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Nomor Akte" class="font-weight-bold">Nomor Akte</label>
                                                <input type="number" class="form-control" id="Nomor Akte " name="nomorAktePerubahan" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Tanggal Akte" class="font-weight-bold">Tanggal Akte</label>
                                                <input type="date" class="form-control" id="Tanggal Akte" name="tglAktePerubahan" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Nama Notaris" class="font-weight-bold">Nama Notaris</label>
                                                <input type="text" class="form-control" id="Nama Notaris" name="namaNotarisPerubahan" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <label class="text-secondary font-weight-bold" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                            DATA IJIN USAHA JASA KONSTRUKSI
                                        </label>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="No. NIB " class="font-weight-bold">No. NIB</label>
                                                <input type="number" class="form-control" id="No. NIB " name="No.NIB " required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="No. SBU " class="font-weight-bold">No. SBU </label>
                                                <input type="number" class="form-control" id="No. SBU " name="No.SBU " required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Kualifikasi SBU" class="font-weight-bold">Kualifikasi SBU</label>
                                                <input type="text" class="form-control" id="Kualifikasi SBU" name="KualifikasiSBU" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="No. NPWP" class="font-weight-bold">No. NPWP</label>
                                                <input type="number" class="form-control" id="No. NPWP " name="No.NPWP" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="No. Rekening " class="font-weight-bold">No. Rekening</label>
                                                <input type="number" class="form-control" id="No. Rekening " name="No.Rekening " required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Nama Bank " class="font-weight-bold">Nama Bank </label>
                                                <input type="text" class="form-control" id="Nama Bank " name="NamaBank" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Nama Rekening " class="font-weight-bold">Nama Rekening</label>
                                                <input type="text" class="form-control" id="Nama Rekening " name="NamaRekening" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <label class="text-secondary font-weight-bold" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                            PENGURUS PERUSAHAAN
                                        </label>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <label for="Nomor Akte " class="font-weight-bold">Pengurus 1</label>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Nama" class="font-weight-bold">Nama</label>
                                                <input type="text" class="form-control" id="Nama" name="nama1" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                                <input type="text" class="form-control" id="Jabatan" name="Jabatan1" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Nik" class="font-weight-bold">Nik</label>
                                                <input type="number" class="form-control" id="Nik" name="Nik1" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="Alamat" class="font-weight-bold">Alamat</label>
                                                <textarea class="form-control" id="NaAlamatma" name="Alamat1" required></textarea>
                                            </div>
                                        </div>
                                        <label for="Nomor Akte " class="font-weight-bold">Pengurus 2</label>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Nama" class="font-weight-bold">Nama</label>
                                                <input type="text" class="form-control" id="Nama" name="Nama2" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                                <input type="text" class="form-control" id="Jabatan" name="Jabatan2" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Nik" class="font-weight-bold">Nik</label>
                                                <input type="number" class="form-control" id="Nik" name="Nik2" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="Alamat" class="font-weight-bold">Alamat</label>
                                                <textarea class="form-control" id="NaAlamatma" name="Alamat2" required></textarea>
                                            </div>
                                        </div>
                                        <label for="Nomor Akte " class="font-weight-bold">Pengurus 3</label>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="Nama" class="font-weight-bold">Nama</label>
                                                <input type="text" class="form-control" id="Nama" name="Nama3" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                                <input type="text" class="form-control" id="Jabatan" name="Jabatan3" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="Nik" class="font-weight-bold">Nik</label>
                                                <input type="number" class="form-control" id="Nik" name="Nik3" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="Alamat" class="font-weight-bold">Alamat</label>
                                                <textarea class="form-control" id="NaAlamatma" name="Alamat3" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3" name="storeBadanUsaha">Simpan</button>
                    </form>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>