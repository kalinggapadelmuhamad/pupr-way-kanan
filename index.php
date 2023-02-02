<?php

include 'app/config/config.php';

$sqlPekerja = "SELECT * FROM pekerja";
$exePekerja = $conn->query($sqlPekerja);
$rowPekerja = $exePekerja->num_rows;

$sqlBadanUsaha = "SELECT * FROM badanUsaha";
$exeBadanUsaha = $conn->query($sqlBadanUsaha);
$rowBadanUsaha = $exeBadanUsaha->num_rows;


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dinas PUPR - Way Kanan</title>
    <link href="assets/img/logo/logo.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid mb-3 me-3" width="70" src="assets/img/logo/logo.png" alt="">
                <img class="img-fluid mb-3" src="assets/img/logo/logo.svg" alt="">
                <br>
                <h1 class="fw-semibold">
                    Data Dan Informasi
                    <br>
                    Tenaga Kerja Dan Badan Usaha
                </h1>
                <P class="fw-semibold text-primary">
                    Dinas PUPR Kabupaten Way Kanan
                </P>
                <a href="login.php" class="btn btn-primary mb-3">Mulai Sekarang</a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-3">
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
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Total Data Badan Usaha</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $rowBadanUsaha ?></div>
                                        <div class="mt-2 mb-0 text-muted text-xs">
                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                            <span>Since last month</span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar-alt fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Tentang</h6>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        //collect data by id
        var password = document.getElementById("exampleFormControlInput2");
        var toggler = document.getElementById("togglePassword");

        //set event listener
        toggler.addEventListener("click", hideShowPassword);

        //hideShowPassword main
        function hideShowPassword() {

            console.log(password.type);

            //chech password type
            if (password.type === "password") {

                password.setAttribute("type", "text");
                toggler.classList.remove("bi-eye-slash-fill");
                toggler.classList.add("bi-eye-fill");

            } else {

                password.setAttribute("type", "password");
                toggler.classList.remove("bi-eye-fill");
                toggler.classList.add("bi-eye-slash-fill");

            }
        }
    </script>
</body>

</html>