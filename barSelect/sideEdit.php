<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="homePage.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-cubes"></i>
            </div>
            <div class="sidebar-brand-text mx-3">cLaptop <sup>1</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="homePage.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Input Data
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-database"></i>
                <span>Insert Data</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Insert Data</h6>
                    <a class="collapse-item" href="insert.php?page=insertKriteria">Insert Kriteria</a>
                    <a class="collapse-item" href="insert.php?page=insertAlternatif">Insert Alternatif</a>
                    <a class="collapse-item" href="insert.php?page=insertBobot">Insert Bobot</a>
                    <a class="collapse-item" href="insert.php?page=insertMatrix">Insert Matrix</a>
                </div>
            </div>
        </li>

        <div class="sidebar-heading">
            View Data
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-database"></i>
                <span>View Data</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">View Data</h6>
                    <a class="collapse-item" href="view.php?page=kriteria">View Kriteria</a>
                    <a class="collapse-item" href="view.php?page=alternatif">View Alternatif</a>
                    <a class="collapse-item" href="view.php?page=bobot">View Bobot</a>
                    <a class="collapse-item" href="view.php?page=matrix">View Matrix</a>
                </div>
            </div>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
            Metode
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-book"></i>
                <span>Metode SAW</span>
            </a>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Metode SAW</h6>
                    <a class="collapse-item" href="result.php?page=vmatrixkeputusan">View Matrix Keputusan</a>
                    <a class="collapse-item" href="result.php?page=normalisasi">View Normalisasi</a>
                    <a class="collapse-item" href="result.php?page=rangking">View Rangking</a>
                </div>
            </div>
        </li>
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->