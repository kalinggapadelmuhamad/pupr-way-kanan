<?php

if (isset($_GET['page'])) {

    if ($_GET['page'] === 'profile') {

        require_once '../app/views/content/profile/index.php';
    } else if ($_GET['page'] === 'dashboard') {

        require_once '../app/views/content/dashboard/index.php';
    } else if ($_GET['page'] === 'fPekerja') {

        require_once '../app/views/content/pekerja/form.php';
    } else if ($_GET['page'] === 'fBadanUsaha') {

        require_once '../app/views/content/badanUsaha/form.php';
    } else if ($_GET['page'] === 'lPekerja') {

        require_once '../app/views/content/pekerja/list.php';
    } else if ($_GET['page'] === 'lBadanUsaha') {

        require_once '../app/views/content/badanUsaha/list.php';
    } else {

        echo "<script>document.location = '?page=dashboard'</script>";
    }
} else {

    echo "<script>document.location = '?page=dashboard'</script>";
}
