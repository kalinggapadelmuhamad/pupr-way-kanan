<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#modalEditBadanUsaha<?= $res->id ?>">
    <i class="fas fa-pen"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="modalEditBadanUsaha<?= $res->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Edit Badan Usaha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php

                $idBadanUsaha = $res->id;

                $sqlDetailBadanUsaha   = "SELECT * FROM badanUsaha WHERE id = '$idBadanUsaha'";
                $exeDetailBadanUsaha   = $conn->query($sqlDetailBadanUsaha);
                $resDetailBadanUsaha   = $exeDetailBadanUsaha->fetch_object();
                ?>
                <form action="../app/models/badanUsaha/update.php" method="POST">
                    <input type="hidden" class="form-control" id="Nama Perusahaan" name="id" value="<?= $idBadanUsaha ?>">

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
                                            <input type="text" class="form-control" id="Nama Perusahaan" name="namaPerusahaan" value="<?= $resDetailBadanUsaha->namaPerusahaan ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Status Perusahaan" class="font-weight-bold">Status Perusahaan</label>
                                            <input type="text" class="form-control" id="Status Perusahaan" name="statusPerusahaan" value="<?= $resDetailBadanUsaha->statusPerusahaan ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="Alamat Perusahaan" class="font-weight-bold">Alamat Perusahaan</label>
                                            <textarea class="form-control" id="Alamat Perusahaan" name="alamatPerusahaan" required><?= $resDetailBadanUsaha->alamatPerusahaan ?></textarea>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="No.Telpon" class="font-weight-bold">No.Telpon</label>
                                            <input type="number" class="form-control" id="No.Telpon" name="No.Telpon" value="<?= $resDetailBadanUsaha->noTelp ?>" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="No. Fax " class="font-weight-bold">No. Fax </label>
                                            <input type="number" class="form-control" id="No. Fax " name="No.Fax" value="<?= $resDetailBadanUsaha->noFax ?>" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="E-mail" class="font-weight-bold">E-mail</label>
                                            <input type="email" class="form-control" id="E-mail" name="Email" value="<?= $resDetailBadanUsaha->email ?>" required>
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
                                            <input type="number" class="form-control" id="Nomor Akte " name="noAktePendirian" value="<?= $resDetailBadanUsaha->noAktePendirian ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Tanggal Akte" class="font-weight-bold">Tanggal Akte</label>
                                            <input type="date" class="form-control" id="Tanggal Akte " name="tglAktePendirian" value="<?= $resDetailBadanUsaha->tglAktePendirian ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nama Notaris" class="font-weight-bold">Nama Notaris</label>
                                            <input type="text" class="form-control" id="Nama Notaris " name="namaNotarisPendirian" value="<?= $resDetailBadanUsaha->notarisPendirian ?>" required>
                                        </div>
                                    </div>
                                    <label for="Nomor Akte " class="font-weight-bold">Akte Perubahan</label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="Nomor Akte" class="font-weight-bold">Nomor Akte</label>
                                            <input type="number" class="form-control" id="Nomor Akte " name="nomorAktePerubahan" value="<?= $resDetailBadanUsaha->noAktePerubahan ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Tanggal Akte" class="font-weight-bold">Tanggal Akte</label>
                                            <input type="date" class="form-control" id="Tanggal Akte" name="tglAktePerubahan" value="<?= $resDetailBadanUsaha->tglAktePerubahan ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nama Notaris" class="font-weight-bold">Nama Notaris</label>
                                            <input type="text" class="form-control" id="Nama Notaris" name="namaNotarisPerubahan" value="<?= $resDetailBadanUsaha->notarisPerubahan ?>" required>
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
                                            <input type="number" class="form-control" id="No. NIB " name="No.NIB " value="<?= $resDetailBadanUsaha->noNib ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="No. SBU " class="font-weight-bold">No. SBU </label>
                                            <input type="number" class="form-control" id="No. SBU " name="No.SBU " value="<?= $resDetailBadanUsaha->noSBU ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="Kualifikasi SBU" class="font-weight-bold">Kualifikasi SBU</label>
                                            <input type="text" class="form-control" id="Kualifikasi SBU" name="KualifikasiSBU" value="<?= $resDetailBadanUsaha->kualifikasiSBU ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="No. NPWP" class="font-weight-bold">No. NPWP</label>
                                            <input type="number" class="form-control" id="No. NPWP " name="No.NPWP" value="<?= $resDetailBadanUsaha->npwp ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="No. Rekening " class="font-weight-bold">No. Rekening</label>
                                            <input type="number" class="form-control" id="No. Rekening " name="No.Rekening " value="<?= $resDetailBadanUsaha->noRek ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nama Bank " class="font-weight-bold">Nama Bank </label>
                                            <input type="text" class="form-control" id="Nama Bank " name="NamaBank" value="<?= $resDetailBadanUsaha->namaBank ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nama Rekening " class="font-weight-bold">Nama Rekening</label>
                                            <input type="text" class="form-control" id="Nama Rekening " name="NamaRekening" value="<?= $resDetailBadanUsaha->namaRek ?>" required>
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
                                            <input type="text" class="form-control" id="Nama" name="nama1" value="<?= $resDetailBadanUsaha->pengurus1 ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                            <input type="text" class="form-control" id="Jabatan" name="Jabatan1" value="<?= $resDetailBadanUsaha->jabatanPengurus1 ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nik" class="font-weight-bold">Nik</label>
                                            <input type="number" class="form-control" id="Nik" name="Nik1" value="<?= $resDetailBadanUsaha->nikPengurus1 ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="Alamat" class="font-weight-bold">Alamat</label>
                                            <textarea class="form-control" id="NaAlamatma" name="Alamat1" required><?= $resDetailBadanUsaha->alamatPengurus1 ?></textarea>
                                        </div>
                                    </div>
                                    <label for="Nomor Akte " class="font-weight-bold">Pengurus 2</label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="Nama" class="font-weight-bold">Nama</label>
                                            <input type="text" class="form-control" id="Nama" name="Nama2" value="<?= $resDetailBadanUsaha->pengurus2 ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                            <input type="text" class="form-control" id="Jabatan" name="Jabatan2" value="<?= $resDetailBadanUsaha->jabatanPengurus2 ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nik" class="font-weight-bold">Nik</label>
                                            <input type="number" class="form-control" id="Nik" name="Nik2" value="<?= $resDetailBadanUsaha->nikPengurus2 ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="Alamat" class="font-weight-bold">Alamat</label>
                                            <textarea class="form-control" id="NaAlamatma" name="Alamat2" required><?= $resDetailBadanUsaha->alamatPengurus2 ?></textarea>
                                        </div>
                                    </div>
                                    <label for="Nomor Akte " class="font-weight-bold">Pengurus 3</label>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="Nama" class="font-weight-bold">Nama</label>
                                            <input type="text" class="form-control" id="Nama" name="Nama3" value="<?= $resDetailBadanUsaha->pengurus3 ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                            <input type="text" class="form-control" id="Jabatan" name="Jabatan3" value="<?= $resDetailBadanUsaha->jabatanPengurus3 ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Nik" class="font-weight-bold">Nik</label>
                                            <input type="number" class="form-control" id="Nik" name="Nik3" value="<?= $resDetailBadanUsaha->nikPengurus3 ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="Alamat" class="font-weight-bold">Alamat</label>
                                            <textarea class="form-control" id="NaAlamatma" name="Alamat3" required><?= $resDetailBadanUsaha->alamatPengurus3 ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="updateBadanUsaha">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>