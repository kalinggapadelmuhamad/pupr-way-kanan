<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="modal" data-target="#modalEditPekerja<?= $res->id ?>">
    <i class="fas fa-pen"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="modalEditPekerja<?= $res->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Edit Pekerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../app/models/pekerja/update.php" method="POST" enctype="multipart/form-data">

                    <?php

                    $idPekerja = $res->id;

                    $sqlDetailPekerja   = "SELECT * FROM pekerja WHERE id = '$idPekerja'";
                    $exeDetailPekerja   = $conn->query($sqlDetailPekerja);
                    $resDetailPekerja   = $exeDetailPekerja->fetch_object();
                    ?>
                    <div class="form-row mt-3">
                        <input type="hidden" class="form-control" id="Nama" name="id" value="<?= $resDetailPekerja->id ?>" readonly>
                        <div class="form-group col-md-6">
                            <label for="Nama" class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control" id="Nama" name="Nama" value="<?= $resDetailPekerja->nama ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Nik" class="font-weight-bold">Nik</label>
                            <input type="text" class="form-control" id="Nik" name="Nik" value="<?= $resDetailPekerja->nik ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Alamat" class="font-weight-bold">Alamat</label>
                            <textarea class="form-control" id="Alamat" name="Alamat" required><?= $resDetailPekerja->alamat ?></textarea>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Desa" class="font-weight-bold">Desa</label>
                            <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $resDetailPekerja->desa ?>" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="Desa" class="font-weight-bold">Kecamatan</label>
                            <input type="text" class="form-control" id="Desa" name="kecamatan" value="<?= $resDetailPekerja->kecamatan ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="NoTelepon" class="font-weight-bold">No. Telepon</label>
                            <input type="number" class="form-control" id="NoTelepon" name="NoTelepon" value="<?= $resDetailPekerja->noTelepon ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Pekerjaan" class="font-weight-bold">Pekerjaan</label>
                            <input type="text" class="form-control" id="Pekerjaan" name="Pekerjaan" value="<?= $resDetailPekerja->pekerjaan ?>" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="KualifikasiTenagaKerja" class="font-weight-bold">Kualifikasi Tenaga Kerja</label>
                            <input type="text" class="form-control" id="KualifikasiTenagaKerja" name="KualifikasiTenagaKerja" value="<?= $resDetailPekerja->kualifikasi ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="PendidikanTerakhir" class="font-weight-bold">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" id="PendidikanTerakhir" name="PendidikanTerakhir" value="<?= $resDetailPekerja->pendidikan ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="PendidikanTerakhir" class="font-weight-bold d-block">Foto Ktp</label>
                            <input type="file" class="form-control" id="PendidikanTerakhir" name="foto">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="updatePekerja">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>