<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Badan Usaha</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Badan Usaha</li>
        </ol>
    </div>
    <div class="row mb-3">
        <div class="col-xl-12 col-lg-12 mb-4">
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil Update Data.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <?php if (isset($_GET['deleteSuccess'])) { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil Delete Data.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush text-center" id="dataTable">
                        <thead class="thead-light">
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>No Fax</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>No Telepon</th>
                                <th>No Fax</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php

                            include '../app/config/config.php';

                            $sqlselectBadanUsaha   = "SELECT * FROM badanusaha";
                            $exeselectBadanUsaha   = $conn->query($sqlselectBadanUsaha);

                            $no = 1;

                            while ($res = $exeselectBadanUsaha->fetch_object()) { ?>

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $res->namaPerusahaan ?></td>
                                    <td><?= $res->noTelp ?></td>
                                    <td><?= $res->noFax ?></td>
                                    <td><?= $res->email ?></td>
                                    <td>
                                        <?php require '../app/views/content/badanUsaha/detail.php' ?>
                                        <?php require '../app/views/content/badanUsaha/edit.php' ?>
                                        <a href="../app/models/badanUsaha/delete.php?id=<?= $res->id ?>" class="btn btn-primary btn-sm mb-2"> <i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>