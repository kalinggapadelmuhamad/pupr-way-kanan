<?php


$sqlPekerja = "SELECT * FROM pekerja";
$exePekerja = $conn->query($sqlPekerja);
$rowPekerja = $exePekerja->num_rows;

$sqlBadanUsaha = "SELECT * FROM badanUsaha";
$exeBadanUsaha = $conn->query($sqlBadanUsaha);
$rowBadanUsaha = $exeBadanUsaha->num_rows;


?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a class="m-0  btn btn-primary btn-sm" href="#"><i class="fas fa-download"></i> Download Data</i></a>
    </div>

    <div class="row mb-3">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Data Pekerja</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rowPekerja ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span>Since last month</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Data Badan Usaha</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rowBadanUsaha ?></div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                <span>Since last month</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-success"></i>
                            <!-- <i class="fas fa-shopping-cart fa-2x text-success"></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice Example -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tentang</h6>
                </div>
                <div class="card-body">
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>