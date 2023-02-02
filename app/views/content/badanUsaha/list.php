<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Badan Usaha</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Data Badan Usaha</li>
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
                            <table id="example1" class="table table-bordered table-flus text-center">
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
                                                <a class="btn btn-primary btn-sm mb-2" href="javascript:void(0);" data-toggle="modal" data-target="#modalHapusBadanUsaha<?= $res->id ?>">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                <div class="modal fade" id="modalHapusBadanUsaha<?= $res->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure you want to delete this data ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                                                <a href="../app/models/badanUsaha/delete.php?id=<?= $res->id ?>" class="btn btn-primary">Yes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <a href="../app/models/badanUsaha/delete.php?id=" class="btn btn-primary btn-sm mb-2"> <i class="fas fa-trash-alt"></i></a> -->
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
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>