<?php

$idUser = $_SESSION['idUser'];
$sqlProfile = "SELECT * FROM user WHERE id = '$idUser'";
$exeProfile = $conn->query($sqlProfile);
$resProfile = $exeProfile->fetch_object();


?>
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link text-center">
        <img src="../assets/img/logo/pupr.jpg" class="brand-image">
        <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= ($resProfile->jenisKelamin == 'L') ? ' <img src="../assets/img/boy.png" class="img-circle" alt="User Image" />' : ' <img src="../assets/img/girl.png" class="img-circle" alt="User Image" />' ?>
            </div>
            <div class="info">
                <a href="?page=profile" class="d-block"><?= $resProfile->nama  ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="?page=dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">INPUT DATA</li>
                <li class="nav-item">
                    <a href="?page=fPekerja" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Pekerja
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=fBadanUsaha" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Badan Usaha</p>
                    </a>
                </li>
                <li class="nav-header">DATA</li>
                <li class="nav-item">
                    <a href="?page=lPekerja" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>Pekerja</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=lBadanUsaha" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>Badan Usaha</p>
                    </a>
                </li>
                <li class="nav-header">EXAMPLE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Table</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-wrench nav-icon"></i>
                        <p>Setting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p>Management</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>