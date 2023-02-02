<?php

include '../../config/config.php';

if (isset($_POST['updatePekerja'])) {

    $idPekerja      = $conn->real_escape_string(htmlspecialchars($_POST['id']));

    $sqlTkb         = "SELECT * FROM pekerja WHERE id = '$idPekerja'";
    $exeTkb         = $conn->query($sqlTkb);
    $dataTkb        = $exeTkb->fetch_object();

    $noTkb          = $dataTkb->noTenagaKerja;

    $nik            = $conn->real_escape_string(htmlspecialchars($_POST['Nik']));
    $tempKtp        = explode(".", $_FILES["ktp"]["name"]);
    $tempft         = explode(".", $_FILES["foto"]["name"]);
    $tempTtd        = explode(".", $_FILES["ttd"]["name"]);

    $nama           = $conn->real_escape_string(htmlspecialchars($_POST['Nama']));
    $alamat         = $conn->real_escape_string(htmlspecialchars($_POST['Alamat']));
    $desa           = $conn->real_escape_string(htmlspecialchars($_POST['Desa']));
    $Kecamatan      = $conn->real_escape_string(htmlspecialchars($_POST['kecamatan']));
    $noTelp         = $conn->real_escape_string(htmlspecialchars($_POST['NoTelepon']));
    $pekerjaan      = $conn->real_escape_string(htmlspecialchars($_POST['Pekerjaan']));
    $kualifikasi    = $conn->real_escape_string(htmlspecialchars($_POST['KualifikasiTenagaKerja']));
    $pendidikan     = $conn->real_escape_string(htmlspecialchars($_POST['PendidikanTerakhir']));
    $ktp            = $noTkb . '_' . $nama . '_KTP.' .  end($tempKtp);
    $ft             = $noTkb . '_' . $nama . '_FT.' .  end($tempft);
    $ttd            = $noTkb . '_' . $nama . '_TTD.' .  end($tempTtd);

    $sqlUpdatePekerja   = "UPDATE pekerja SET       nama        = '$nama',
                                                    nik         = '$nik',
                                                    alamat      = '$alamat',
                                                    desa        = '$desa',
                                                    kecamatan   = '$Kecamatan',
                                                    noTelepon   = '$noTelp',
                                                    pekerjaan   = '$pekerjaan',
                                                    kualifikasi = '$kualifikasi',
                                                    pendidikan  = '$pendidikan',";

    if (isset($_FILES["ktp"]["name"]) && !empty($_FILES["ktp"]["name"])) {
        move_uploaded_file($_FILES["ktp"]["tmp_name"], "../../../assets/img/ktp/" . $ktp);
        $sqlUpdatePekerja .= "ktp = '$ktp',";
    }

    if (isset($_FILES["foto"]["name"]) && !empty($_FILES["foto"]["name"])) {
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../../../assets/img/ktp/" . $ft);
        $sqlUpdatePekerja .= "foto = '$ft',";
    }

    if (isset($_FILES["ttd"]["name"]) && !empty($_FILES["ttd"]["name"])) {
        move_uploaded_file($_FILES["ttd"]["tmp_name"], "../../../assets/img/ttd/" . $ttd);
        $sqlUpdatePekerja .= "ttd = '$ttd',";
    }

    $sqlUpdatePekerja = rtrim($sqlUpdatePekerja, ',');
    $sqlUpdatePekerja .= " WHERE id= '$idPekerja'";

    $exeUpdatePekerja   = $conn->query($sqlUpdatePekerja);

    if ($exeUpdatePekerja) {
        echo "<script>
                    document.location = '../../../Dashboard/?page=lPekerja&success';
                </script>";
    } else {
        echo "<script>
                    document.location = '../../../Dashboard/?page=lPekerja&error';
                </script>";
    }


    // WHERE id = '$idPekerja'";

    // if (empty($_FILES['foto']['name'])) {

    //     $sqlUpdatePekerja   = "UPDATE pekerja SET   nik         = '$nik',
    //                                                 nama        = '$nama',
    //                                                 alamat      = '$alamat',
    //                                                 desa        = '$desa',
    //                                                 kecamatan   = '$Kecamatan',
    //                                                 noTelepon   = '$noTelp',
    //                                                 pekerjaan   = '$pekerjaan',
    //                                                 kualifikasi = '$kualifikasi',
    //                                                 pendidikan  = '$pendidikan'
    //                                         WHERE id = '$idPekerja'";

    //     $exeUpdatePekerja   = $conn->query($sqlUpdatePekerja);

    //     if ($exeUpdatePekerja) {
    //         echo "<script>
    //                 document.location = '../../../Dashboard/?page=lPekerja&success';
    //             </script>";
    //     } else {
    //         echo "<script>
    //                 document.location = '../../../Dashboard/?page=lPekerja&error';
    //             </script>";
    //     }
    // } else {
    //     $sqlUpdatePekerja   = "UPDATE pekerja SET   nik         = '$nik',
    //                                                 nama        = '$nama',
    //                                                 alamat      = '$alamat',
    //                                                 desa        = '$desa',
    //                                                 kecamatan   = '$Kecamatan',
    //                                                 noTelepon   = '$noTelp',
    //                                                 pekerjaan   = '$pekerjaan',
    //                                                 kualifikasi = '$kualifikasi',
    //                                                 pendidikan  = '$pendidikan',
    //                                                 foto        = '$foto'
    //                                         WHERE id = '$idPekerja'";

    //     $exeUpdatePekerja   = $conn->query($sqlUpdatePekerja);

    //     if ($exeUpdatePekerja) {
    //         move_uploaded_file($_FILES["foto"]["tmp_name"], "../../../assets/img/ktp/" . $newfilename);
    //         echo "<script>
    //                 document.location = '../../../Dashboard/?page=lPekerja&success';
    //             </script>";
    //     } else {
    //         echo "<script>
    //                 document.location = '../../../Dashboard/?page=lPekerja&error';
    //             </script>";
    //     }
    // }
}
