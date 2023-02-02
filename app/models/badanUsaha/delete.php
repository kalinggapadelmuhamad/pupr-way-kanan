<?php

include '../../config/config.php';

if (isset($_GET['id'])) {


    $idBadanUsaha = $_GET['id'];

    $sqlDeleteBadanUsaha   = "DELETE FROM badanUsaha WHERE id = '$idBadanUsaha'";
    $exeDeleteBadanUsaha   = $conn->query($sqlDeleteBadanUsaha);

    if ($exeDeleteBadanUsaha) {
        echo "<script>
                document.location = '../../../Dashboard/?page=lBadanUsahaa&deleteSuccess';
            </script>";
    } else {
        echo "<script>
            document.location = '../../../Dashboard/?page=lBadanUsahaa&deleteError';
        </script>";
    }
}
