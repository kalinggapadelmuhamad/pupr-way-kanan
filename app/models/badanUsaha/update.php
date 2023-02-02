<?php

include '../../config/config.php';

if (isset($_POST['updateBadanUsaha'])) {

    $idBadanUsaha           = $conn->real_escape_string(htmlspecialchars($_POST['id']));

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


    $teamSurvey          = $conn->real_escape_string(htmlspecialchars($_POST['nama3']));


    $sqlUpdateBadanUsaha = "UPDATE badanusaha SET
                                            namaPerusahaan      = '$namaPerusahaan',
                                            alamatPerusahaan    = '$alamatPerusahaan',
                                            statusPerusahaan    = '$statusPerusahaan',
                                            noTelp              = '$noTelpPerusahaan',
                                            noFax               = '$noFaxPerusahaan',
                                            email               = '$emailPerusahaan',

                                            noAktePendirian     = '$noAktePendirian',
                                            tglAktePendirian    = '$tglAktePendirian',
                                            notarisPendirian    = '$namaNotarisPendirian',
                                            noAktePerubahan     = '$noAktePerubahan',
                                            tglAktePerubahan    = '$tglAktePerubahan',
                                            notarisPerubahan    = '$namaNotarisPerubahan',

                                            noNib               = '$noNIB',
                                            noSBU               = '$noSBU',
                                            kualifikasiSBU      = '$KualifikasiSBU',
                                            npwp                = '$noNPWP',
                                            noRek               = '$noRek',
                                            namaBank            = '$namaBank',
                                            namaRek             = '$namaRekening',

                                            pengurus1           = '$namaPengurus1',
                                            jabatanPengurus1    = '$jabatanPengurus1',
                                            nikPengurus1        = '$nikPengurus1',
                                            alamatPengurus1     = '$alamatPengurus1',
                                            bidangUsaha         = '$bidangUsaha',

                                            pengurus2           = '$namaPengurus2',
                                            jabatanPengurus2    = '$jabatanPengurus2',
                                            nikPengurus2        = '$nikPengurus2',
                                            alamatPengurus2     = '$alamatPengurus2',
                                            kecamatan           = '$kecamatan',

                                            teamSurvey          = '$teamSurvey'
                                WHERE id = $idBadanUsaha";

    $exeUpdateBadanUsaha = $conn->query($sqlUpdateBadanUsaha);
    if ($exeUpdateBadanUsaha) {
        echo "<script>
                document.location = '../../../Dashboard/?page=lBadanUsaha&success';
            </script>";
    } else {
        echo "<script>
                document.location = '../../../Dashboard/?page=lBadanUsaha&error';
            </script>";
    }
}
