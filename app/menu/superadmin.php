<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Dashboard
            </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="index.php?page=data-pendonor-pusat" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Data Pendonor
            </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="index.php?page=data-rekam-medis-pusat" class="nav-link">
            <i class="nav-icon fas fa-file-medical"></i>
            <p>
                Data Rekam Medis
            </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="index.php?page=data-pendistribusian-pusat" class="nav-link">
            <i class="nav-icon fa fa-ambulance"></i>
            <p>
                Data Pendistribusian
            </p>
            </a>
        </li>

        <li class="nav-header">PMI BRANCH</li>
        <!-- Bekasi -->
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-code-branch"></i>
            <p>
                Bekasi
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-pendonor&cabang=bekasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendonor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-rekam-medis&cabang=bekasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rekam Medis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-pendistribusian&cabang=bekasi" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendistribusian</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Jakarta -->
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-code-branch"></i>
            <p>
                Jakarta
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-pendonor&cabang=jakarta" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendonor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-rekam-medis&cabang=jakarta" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rekam Medis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-pendistribusian&cabang=jakarta" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendistribusian</p>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Surabaya -->
        <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-code-branch"></i>
            <p>
                Surabaya
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="index.php?page=data-pendonor&cabang=surabaya" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendonor</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-rekam-medis&cabang=surabaya" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rekam Medis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=data-pendistribusian&cabang=surabaya" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pendistribusian</p>
                    </a>
                </li>
            </ul>
        </li>
        

        <li class="nav-header">SYNCHRONIZE</li>
        <li class="nav-item">
            <a href="index.php?page=sinkronisasi" class="nav-link">
            <i class="nav-icon fas fa-sync"></i>
            <p>
                Data Pendonor
            </p>
            </a>
        </li>

        <li class="nav-header">PULL DATA FROM BRANCH</li>
        <li class="nav-item">
            <a href="index.php?page=tarik-data-cabang" class="nav-link">
            <i class="nav-icon fas fa-sync"></i>
            <p>
                Rekam Medis & Pendistribusian
            </p>
            </a>
        </li>

        <li class="nav-header">SETTINGS</li>
        <li class="nav-item">
            <a href="index.php?page=user-management" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
                User Management
            </p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="../logout.php" class="nav-link red bg-red">
            <i class="nav-icon fas fa-power-off"></i>
            <p class="red">
                Log Out
            </p>
            </a>
        </li>
    </ul>
</nav>