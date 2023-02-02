<?php

session_start();

if (isset($_SESSION['status'])) {
    header('location: dashboard/');
}

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
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="row align-items-center">
            <div class="col py-4 px-4 d-none d-sm-block bg-image">
                <img class="img-fluid mb-3 me-3" width="75" src="assets/img/logo/logo.png" alt="">
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
            </div>
            <div class="col">
                <div class="col-auto bg-white mx-auto py-4 px-4">
                    <img class="float-start me-2 img-fluid" width="42" src="assets/img/logo/logo.png" alt="">
                    <div class="float-left">
                        <p class="lh-1">
                            <span class="fw-semibold fs-4 d-block">Dinas PUPR</span>
                            <span class="fw-semibold fs-4 d-block">Kabupaten Way Kanan</span>
                            <!-- <span class="fw-light fs-6"> Dinas PUPR Kabupaten Way Kanan</span> -->
                        </p>
                    </div>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Username atau Password anda salah !
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <p class="fw-light mt-4">use credentials to access your account.</p>
                    <form action="app/models/auth/cekLogin.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username" name="username" required>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="********" name="password" required>
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi-eye-slash-fill" id="togglePassword"></i></button>
                            </div>
                        </div>
                        <button class="btn btn-ms btn-primary" name="login">Sign In</button>
                        <a class="btn btn-ms btn-success">Sign Up</a>
                    </form>
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