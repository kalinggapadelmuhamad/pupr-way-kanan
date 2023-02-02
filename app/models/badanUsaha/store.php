<?php

date_default_timezone_set('Asia/Jakarta');

include '../../config/config.php';

if (isset($_POST['storeBadanUsaha'])) {

    $sqlBu         = "SELECT MAX(noBadanUsaha) as noBadanUsaha FROM badanusaha";
    $exeBu         = $conn->query($sqlBu);
    $dataBu        = $exeBu->fetch_object();

    $noBu          = $dataBu->noBadanUsaha;
    $noBu          = substr($noBu, 3);
    $noUrut         = $noBu++;


    $bu            = 'BU' . $noTkb;
    $tanggalInput   = date('Y-m-d');

    $namaPerusahaan         = $conn->real_escape_string(htmlspecialchars($_POST['namaPerusahaan']));
    $alamatPerusahaan       = $conn->real_escape_string(htmlspecialchars($_POST['alamatPerusahaan']));
    $statusPerusahaan       = $conn->real_escape_string(htmlspecialchars($_POST['statusPerusahaan']));
    $noTelpPerusahaan       = $conn->real_escape_string(htmlspecialchars($_POST['No_Telpon']));
    $noFaxPerusahaan        = $conn->real_escape_string(htmlspecialchars($_POST['No_Fax']));
    $emailPerusahaan        = $conn->real_escape_string(htmlspecialchars($_POST['Email']));

    $noAktePendirian        = $conn->real_escape_string(htmlspecialchars($_POST['noAktePendirian']));
    $tglAktePendirian       = $conn->real_escape_string(htmlspecialchars($_POST['tglAktePendirian']));
    $namaNotarisPendirian   = $conn->real_escape_string(htmlspecialchars($_POST['namaNotarisPendirian']));

    $noAktePerubahan        = $conn->real_escape_string(htmlspecialchars($_POST['nomorAktePerubahan']));
    $tglAktePerubahan       = $conn->real_escape_string(htmlspecialchars($_POST['tglAktePerubahan']));
    $namaNotarisPerubahan   = $conn->real_escape_string(htmlspecialchars($_POST['namaNotarisPerubahan']));

    $noNIB                  = $conn->real_escape_string(htmlspecialchars($_POST['No_NIB_']));
    $noSBU                  = $conn->real_escape_string(htmlspecialchars($_POST['No_SBU_']));
    $KualifikasiSBU         = $conn->real_escape_string(htmlspecialchars($_POST['KualifikasiSBU']));
    $noNPWP                 = $conn->real_escape_string(htmlspecialchars($_POST['No_NPWP']));
    $noRek                  = $conn->real_escape_string(htmlspecialchars($_POST['No_Rekening_']));
    $namaBank               = $conn->real_escape_string(htmlspecialchars($_POST['NamaBank']));
    $namaRekening           = $conn->real_escape_string(htmlspecialchars($_POST['NamaRekening']));

    $namaPengurus1          = $conn->real_escape_string(htmlspecialchars($_POST['nama1']));
    $jabatanPengurus1       = $conn->real_escape_string(htmlspecialchars($_POST['Jabatan1']));
    $nikPengurus1           = $conn->real_escape_string(htmlspecialchars($_POST['Nik1']));
    $alamatPengurus1        = $conn->real_escape_string(htmlspecialchars($_POST['Alamat1']));
    $bidangUsaha            = $conn->real_escape_string(htmlspecialchars($_POST['bidangUsaha']));

    $namaPengurus2          = $conn->real_escape_string(htmlspecialchars($_POST['Nama2']));
    $jabatanPengurus2       = $conn->real_escape_string(htmlspecialchars($_POST['Jabatan2']));
    $nikPengurus2           = $conn->real_escape_string(htmlspecialchars($_POST['Nik2']));
    $alamatPengurus2        = $conn->real_escape_string(htmlspecialchars($_POST['Alamat2']));
    $kecamatan              = $conn->real_escape_string(htmlspecialchars($_POST['kecamatan']));


    $teamSurvey          = $conn->real_escape_string(htmlspecialchars($_POST['Nama3']));

    $sqlFilterNamaPerusahaan    = "SELECT namaPerusahaan FROM badanusaha WHERE namaPerusahaan = '$namaPerusahaan'";
    $exeFilterNamaPerusahaan    = $conn->query($sqlFilterNamaPerusahaan);
    $rowFilterNamaPerusahaan    = $exeFilterNamaPerusahaan->num_rows;

    if ($rowFilterNamaPerusahaan != 1) {

        $sqlStoreBadanUsaha = "INSERT INTO badanusaha VALUES (
                                            '',
                                            '$bu',
                                            '$namaPerusahaan',
                                            '$statusPerusahaan',
                                            '$alamatPerusahaan',
                                            '$noTelpPerusahaan',
                                            '$noFaxPerusahaan',
                                            '$emailPerusahaan',
                                            
                                            '$noAktePendirian',
                                            '$tglAktePendirian',
                                            '$namaNotarisPendirian',
                                            '$noAktePerubahan',
                                            '$tglAktePerubahan',
                                            '$namaNotarisPerubahan',

                                            '$noNIB',
                                            '$noSBU',
                                            '$KualifikasiSBU',
                                            '$noNPWP',
                                            '$noRek',
                                            '$namaBank',
                                            '$namaRekening',

                                            '$namaPengurus1',
                                            '$jabatanPengurus1',
                                            '$nikPengurus1',
                                            '$alamatPengurus1',
                                            '$bidangUsaha',

                                            '$namaPengurus2',
                                            '$jabatanPengurus2',
                                            '$nikPengurus2',
                                            '$alamatPengurus2',
                                            '$kecamatan',
                                            '$tanggalInput',
                                            
                                            '$teamSurvey'
        )";

        $exeStoreBadanUsaha = $conn->query($sqlStoreBadanUsaha);
        if ($exeStoreBadanUsaha) {
            echo "<script>
                document.location = '../../../Dashboard/?page=fBadanUsaha&success';
            </script>";
        } else {
            echo "<script>
                document.location = '../../../Dashboard/?page=fBadanUsaha&error';
            </script>";
        }
    } else {
        echo "<script>
                document.location = '../../../Dashboard/?page=fBadanUsaha&namaPerusahaan';
            </script>";
    }
}
