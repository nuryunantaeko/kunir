<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
           href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SPK KUNIR PUTIH</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/hasil') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Hasil Perhitungan</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/kriteria') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Kriteria</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/kunir') ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Data Kunir</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link"
               href="<?php echo base_url("admin/penilaian") ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Penilaian</span></a>
        </li>

        <hr class="sidebar-divider my-0">
        <?php $login = $this->session->userdata('login');
            if ($login): ?>
            <li class="nav-item">
                <a class="nav-link"
                href="<?php echo base_url("admin/auth/users") ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Daftar Administrator</span></a>
            </li>
        <?php endif; ?>
    </ul>
    <!-- End of Sidebar -->