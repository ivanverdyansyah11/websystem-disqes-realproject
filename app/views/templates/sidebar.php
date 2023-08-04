<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">SPP</div>
            </a>

            <!-- Nav Item - Dashboard -->

            <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/home">
                    <span>Dashboard</span></a>
            </li>

            <?php if ($_SESSION['role'] == 1 || $_SESSION['role'] == 2) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Transaksi</span></a>
                </li>
            <?php endif ?>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>History Transaksi</span></a>
            </li>

            <?php if ($_SESSION['role'] == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Siswa</span></a>
                </li>
            <?php endif ?>

            <?php if ($_SESSION['role'] == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/petugas">
                        <span>Petugas</span></a>
                </li>
            <?php endif ?>

            <?php if ($_SESSION['role'] == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Pengguna</span></a>
                </li>
            <?php endif ?>

            <?php if ($_SESSION['role'] == 2 || $_SESSION['role'] == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL; ?>/kelas">
                        <span>Kelas</span></a>
                </li>
            <?php endif ?>

            <?php if ($_SESSION['role'] == 2 || $_SESSION['role'] == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Pembayaran</span></a>
                </li>
            <?php endif ?>

            <?php if ($_SESSION['role'] == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span>Generate Laporan</span></a>
                </li>
            <?php endif ?>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Logout</span></a>
            </li>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
        </ul>