<?php

include '../../config/config.php';

if (isset($_POST['updateProfile'])) {

    $idUser         = $conn->real_escape_string(htmlspecialchars($_POST['idUser']));
    $nama           = $conn->real_escape_string(htmlspecialchars($_POST['nama']));
    $tglLahir       = $conn->real_escape_string(htmlspecialchars($_POST['tglLahir']));
    $jenisKelamin   = $conn->real_escape_string(htmlspecialchars($_POST['jenisKelamin']));
    $username       = $conn->real_escape_string(htmlspecialchars($_POST['username']));
    $password       = $conn->real_escape_string(htmlspecialchars($_POST['password']));
    $alamat         = $conn->real_escape_string(htmlspecialchars($_POST['alamat']));

    if (empty($password)) {

        $sqlUpdateProfile   = "UPDATE user SET nama             = '$nama',
                                                tglLahir        = '$tglLahir',
                                                alamat          = '$alamat',
                                                jenisKelamin    = '$jenisKelamin',
                                                username        = '$username'
                                            WHERE id = '$idUser'";
        $exeUpdateProfile   = $conn->query($sqlUpdateProfile);

        if ($exeUpdateProfile) {
            echo "<script>
                    document.location = '../../../Dashboard/?page=profile&success';
                </script>";
        } else {
            echo "<script>
                    document.location = '../../../Dashboard/?page=profile&error';
                </script>";
        }
    } else {

        if (strlen($password) >= 8) {

            $password = md5($password);

            $sqlUpdateProfile   = "UPDATE user SET nama             = '$nama',
                                                    tglLahir        = '$tglLahir',
                                                    alamat          = '$alamat',
                                                    jenisKelamin    = '$jenisKelamin',
                                                    username        = '$username',
                                                    password        = '$password'
                                                WHERE id = '$idUser'";
            $exeUpdateProfile   = $conn->query($sqlUpdateProfile);

            if ($exeUpdateProfile) {
                echo "<script>
                        document.location = '../../../Dashboard/?page=profile&success';
                    </script>";
            } else {
                echo "<script>
                        document.location = '../../../Dashboard/?page=profile&error';
                    </script>";
            }
        } else {

            echo "<script>
                    document.location = '../../../Dashboard/?page=profile&password';
                </script>";
        }
    }
}
