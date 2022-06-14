<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <img src="../assets/img/logo/logo.png" width="50px" alt="">
        <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
            <h2 class="text-light">HEADER</h2>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-start" id=" navbarNav">
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link text-light text-uppercase " aria-current="page" href="#">HOME</a>
                </li>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light text-uppercase" href="#" data-bs-toggle="dropdown">
                            &nbsp &nbsp &nbsp data master
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light">
                            <li><a class="dropdown-item text-capitalize" href="?p=user_data">data user</a></li>
                            <li><a class="dropdown-item text-capitalize" href="?p=temuan_data">data temuan</a></li>
                            <li><a class="dropdown-item text-capitalize" href="?p=realisasi_data">data realisasi</a></li>

                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light text-uppercase" href="#" data-bs-toggle="dropdown">
                            &nbsp &nbsp &nbsp laporan
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light">
                            <li><a class="dropdown-item text-capitalize" href="mod_print/laporan_temuan.php">laporan data temuan</a></li>
                            <li><a class="dropdown-item text-capitalize" href="mod_print/laporan_realisasi.php">laporan data realisasi</a></li>

                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id=" navbarNav">
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link text-light text-uppercase " aria-current="page" href="../logout.php">logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>