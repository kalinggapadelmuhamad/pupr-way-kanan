<?php

include '../../config/config.php';

if (isset($_GET['id'])) {


    $idPekerja = $_GET['id'];

    $sqlDeletePekerja   = "DELETE FROM pekerja WHERE id = '$idPekerja'";
    $exeDeletePekerja   = $conn->query($sqlDeletePekerja);

    if ($exeDeletePekerja) {
        echo "<script>
                document.location = '../../../Dashboard/?page=lPekerja&deleteSuccess';
            </script>";
    } else {
        echo "<script>
            document.location = '../../../Dashboard/?page=lPekerja&deleteError';
        </script>";
    }
}
