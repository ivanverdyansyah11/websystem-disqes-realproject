<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Disqes | <?= $data['title']; ?> Page</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/style.css">
    <!-- END STYLE CSS -->

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col body-color p-0 position-relative d-flex">

                <div class="sidebar">
                    <div class="sidebar-logo"></div>
                    <div class="sidebar-menu w-100 d-flex flex-column" style="gap: 4px;">
                        <a href="#" class="menu-link">
                            <div class="dashboard-icon"></div>
                        </a>
                        <a href="#" class="menu-link">
                            <div class="test-case-icon"></div>
                        </a>
                        <a href="#" class="menu-link">
                            <div class="project-icon"></div>
                        </a>
                        <form action="" class="w-100 d-md-none">
                            <button class="menu-link">
                                <div class="logout-icon"></div>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="hamburger d-md-none">
                    <div class="hamburger-icon"></div>
                </div>

                <div class="dashboard-content w-100">
                    <div class="topbar d-none d-md-flex justify-content-end">
                        <div class="wrapper position-relative">
                            <div class="wrapper-profile d-flex align-items-center position-relative" style="gap: 16px;">
                                <div class="topbar-profile d-flex align-items-center" style="gap: 12px;">
                                    <div class="user-icon"></div>
                                    <h6 class="user-name">Winda Pratama</h6>
                                </div>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="topbar-menu position-absolute">
                                <form action="" class="w-100">
                                    <button class="d-flex align-items-center gap-3">
                                        <div class="logout-icon"></div>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>