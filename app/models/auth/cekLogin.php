<?php

include '../../config/config.php';

if (isset($_POST['login'])) {

    $username   = $conn->real_escape_string(htmlspecialchars($_POST['username']));
    $password   = $conn->real_escape_string(htmlspecialchars(md5($_POST['password'])));

    $sql    = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $exe    = $conn->query($sql);
    $res    = $exe->fetch_object();
    $row    = $exe->num_rows;

    if ($row === 1) {

        session_start();
        $_SESSION['idUser'] = $res->id;
        $_SESSION['status'] = 'login';

        header('location: ../../../Dashboard/');
    } else {

        header('location: ../../../login.php?error');
    }
}
