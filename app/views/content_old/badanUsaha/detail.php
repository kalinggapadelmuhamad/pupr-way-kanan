<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#modalDetailBadanUsaha<?= $res->id ?>">
    <i class="fas fa-eye"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="modalDetailBadanUsaha<?= $res->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Detail Badan Usaha</h5>
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
                                        <input type="text" class="form-control" id="Nama Perusahaan" value="<?= $resDetailBadanUsaha->namaPerusahaan ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Status Perusahaan" class="font-weight-bold">Status Perusahaan</label>
                                        <input type="text" class="form-control" id="Status Perusahaan" value="<?= $resDetailBadanUsaha->statusPerusahaan ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Alamat Perusahaan" class="font-weight-bold">Alamat Perusahaan</label>
                                        <textarea class="form-control" id="Alamat Perusahaan" readonly><?= $resDetailBadanUsaha->alamatPerusahaan ?>"</textarea>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="No.Telpon" class="font-weight-bold">No.Telpon</label>
                                        <input type="number" class="form-control" id="No.Telpon" value="<?= $resDetailBadanUsaha->noTelp ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="No. Fax " class="font-weight-bold">No. Fax </label>
                                        <input type="number" class="form-control" id="No. Fax " value="<?= $resDetailBadanUsaha->noFax ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="E-mail" class="font-weight-bold">E-mail</label>
                                        <input type="email" class="form-control" id="E-mail" value="<?= $resDetailBadanUsaha->email ?>" readonly>
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
                                        <input type="number" class="form-control" id="Nomor Akte " value="<?= $resDetailBadanUsaha->noAktePendirian ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Tanggal Akte" class="font-weight-bold">Tanggal Akte</label>
                                        <input type="date" class="form-control" id="Tanggal Akte " value="<?= $resDetailBadanUsaha->tglAktePendirian ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Nama Notaris" class="font-weight-bold">Nama Notaris</label>
                                        <input type="text" class="form-control" id="Nama Notaris " value="<?= $resDetailBadanUsaha->notarisPendirian ?>" readonly>
                                    </div>
                                </div>
                                <label for="Nomor Akte " class="font-weight-bold">Akte Perubahan</label>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="Nomor Akte" class="font-weight-bold">Nomor Akte</label>
                                        <input type="number" class="form-control" id="Nomor Akte " value="<?= $resDetailBadanUsaha->noAktePerubahan ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Tanggal Akte" class="font-weight-bold">Tanggal Akte</label>
                                        <input type="date" class="form-control" id="Tanggal Akte" value="<?= $resDetailBadanUsaha->tglAktePerubahan ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Nama Notaris" class="font-weight-bold">Nama Notaris</label>
                                        <input type="text" class="form-control" id="Nama Notaris" value="<?= $resDetailBadanUsaha->notarisPerubahan ?>" readonly>
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
                                        <input type="number" class="form-control" id="No. NIB " value="<?= $resDetailBadanUsaha->noNib ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="No. SBU " class="font-weight-bold">No. SBU </label>
                                        <input type="number" class="form-control" id="No. SBU " value="<?= $resDetailBadanUsaha->noSBU ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Kualifikasi SBU" class="font-weight-bold">Kualifikasi SBU</label>
                                        <input type="text" class="form-control" id="Kualifikasi SBU" value="<?= $resDetailBadanUsaha->kualifikasiSBU ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="No. NPWP" class="font-weight-bold">No. NPWP</label>
                                        <input type="number" class="form-control" id="No. NPWP " value="<?= $resDetailBadanUsaha->npwp ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="No. Rekening " class="font-weight-bold">No. Rekening</label>
                                        <input type="number" class="form-control" id="No. Rekening " value="<?= $resDetailBadanUsaha->noRek ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Nama Bank " class="font-weight-bold">Nama Bank </label>
                                        <input type="text" class="form-control" id="Nama Bank " value="<?= $resDetailBadanUsaha->namaBank ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Nama Rekening " class="font-weight-bold">Nama Rekening</label>
                                        <input type="text" class="form-control" id="Nama Rekening " value="<?= $resDetailBadanUsaha->namaRek ?>" readonly>
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
                                        <input type="text" class="form-control" id="Nama" value="<?= $resDetailBadanUsaha->pengurus1 ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                        <input type="text" class="form-control" id="Jabatan" value="<?= $resDetailBadanUsaha->jabatanPengurus1 ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Nik" class="font-weight-bold">Nik</label>
                                        <input type="number" class="form-control" id="Nik" value="<?= $resDetailBadanUsaha->nikPengurus1 ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Alamat" class="font-weight-bold">Alamat</label>
                                        <textarea class="form-control" id="NaAlamatma" readonly><?= $resDetailBadanUsaha->alamatPengurus1 ?></textarea>
                                    </div>
                                </div>
                                <label for="Nomor Akte " class="font-weight-bold">Pengurus 2</label>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="Nama" class="font-weight-bold">Nama</label>
                                        <input type="text" class="form-control" id="Nama" value="<?= $resDetailBadanUsaha->pengurus2 ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                        <input type="text" class="form-control" id="Jabatan" value="<?= $resDetailBadanUsaha->jabatanPengurus2 ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Nik" class="font-weight-bold">Nik</label>
                                        <input type="number" class="form-control" id="Nik" value="<?= $resDetailBadanUsaha->nikPengurus2 ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Alamat" class="font-weight-bold">Alamat</label>
                                        <textarea class="form-control" id="NaAlamatma" readonly><?= $resDetailBadanUsaha->alamatPengurus2 ?></textarea>
                                    </div>
                                </div>
                                <label for="Nomor Akte " class="font-weight-bold">Pengurus 3</label>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="Nama" class="font-weight-bold">Nama</label>
                                        <input type="text" class="form-control" id="Nama" value="<?= $resDetailBadanUsaha->pengurus3 ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Jabatan " class="font-weight-bold">Jabatan</label>
                                        <input type="text" class="form-control" id="Jabatan" value="<?= $resDetailBadanUsaha->jabatanPengurus3 ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="Nik" class="font-weight-bold">Nik</label>
                                        <input type="number" class="form-control" id="Nik" value="<?= $resDetailBadanUsaha->nikPengurus3 ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Alamat" class="font-weight-bold">Alamat</label>
                                        <textarea class="form-control" id="NaAlamatma" readonly><?= $resDetailBadanUsaha->alamatPengurus3 ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>