<?php

date_default_timezone_set('Asia/Jakarta');

include '../../config/config.php';

if (isset($_POST['storePekerja'])) {

    $sqlTkb         = "SELECT MAX(noTenagaKerja) as noTenagaKerja FROM pekerja";
    $exeTkb         = $conn->query($sqlTkb);
    $dataTkb        = $exeTkb->fetch_object();

    $noTkb          = $dataTkb->noTenagaKerja;
    $noTkb          = substr($noTkb, 3);
    $noUrut         = $noTkb++;


    $Tkb            = 'TKB' . $noTkb;
    $tanggalInput   = date('Y-m-d');
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

    $ktp            = $Tkb . '_' . $nama . '_KTP.' .  end($tempKtp);
    $ft             = $Tkb . '_' . $nama . '_FT.' .  end($tempft);
    $ttd            = $Tkb . '_' . $nama . '_TTD.' .  end($tempTtd);

    $sqlFilterNik   = "SELECT nik FROM pekerja WHERE nik = '$nik'";
    $exeFilterNik   = $conn->query($sqlFilterNik);
    $rowFilterNik   = $exeFilterNik->num_rows;

    if ($rowFilterNik != 1) {

        $sqlStorePekerja    = "INSERT INTO pekerja VALUES (
                                        '',
                                        '$Tkb',
                                        '$nama',
                                        '$nik',
                                        '$alamat',
                                        '$desa',
                                        '$Kecamatan',
                                        '$noTelp',
                                        '$pekerjaan',
                                        '$kualifikasi',
                                        '$pendidikan',
                                        '$tanggalInput',
                                        '$ktp',
                                        '$ft',
                                        '$ttd'
                                )";
        $exeStorePekerja    = $conn->query($sqlStorePekerja);

        if ($exeStorePekerja) {
            move_uploaded_file($_FILES["ktp"]["tmp_name"], "../../../assets/img/ktp/" . $ktp);
            move_uploaded_file($_FILES["foto"]["tmp_name"], "../../../assets/img/ktp/" . $ft);
            move_uploaded_file($_FILES["ttd"]["tmp_name"], "../../../assets/img/ttd/" . $ttd);
            echo "<script>
                    document.location = '../../../Dashboard/?page=fPekerja&success';
                </script>";
        } else {
            echo "<script>
                    document.location = '../../../Dashboard/?page=fPekerja&error';
                </script>";
        }
    } else {
        echo "<script>
                document.location = '../../../Dashboard/?page=fPekerja&nik';
            </script>";
    }
}
