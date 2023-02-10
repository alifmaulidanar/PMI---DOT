<!-- Koneksi Database -->
<?php
    session_start();
    include('../config.php');
    if(!$_SESSION['pmiuser']){
        header('location: ../login.php?session=expired');
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>
    <body class="hold-transition sidebar-mini layout-fixed">
    <!-- Wrapper -->
        <div class="wrapper">
            <!-- Preloader -->
            

            <!-- Navbar -->
            <?php include('navbar.php');?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <?php include('logo-pmi.php');?>

                <!-- Sidebar -->
                <?php include('sidebar.php');?>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <?php include('content-header.php');?>
                <!-- /.content-header -->
                
                <!-- Main content -->
                <?php
                // Super Admin
                if($_SESSION['pmiuser']['role'] == 'superadmin'){
                    // koneksi semua database
                    $con_pusat = mysqli_connect("localhost", "root", "Maulidanar0406", "pmi_pusat");
                    if(isset($_GET['page'])){
                        // Pengkondisian Halaman
                        if($_GET['page']=='dashboard'){
                            include("dashboard.php");
                        } else if($_GET['page']=='data-pendonor-pusat') {
                            include("pusat/data_pendonor_pusat.php");
                        } else if($_GET['page']=='data-rekam-medis-pusat') {
                            include("pusat/data_rekam_medis_pusat.php");
                        } else if($_GET['page']=='data-pendistribusian-pusat') {
                            include("pusat/data_pendistribusian_pusat.php");
                        // Branch 
                        } else if($_GET['page']=='data-pendonor') {
                            include("cabang/data_pendonor_cabang.php");
                        } else if($_GET['page']=='data-rekam-medis') {
                            include("cabang/data_rekam_medis_cabang.php");
                        } else if($_GET['page']=='data-pendistribusian') {
                            include("cabang/data_pendistribusian_cabang.php");
                        // End-Branch 
                        } else if($_GET['page']=='sinkronisasi') {
                            include("sinkron/sinkronisasi-data-pusat.php");
                        } else if($_GET['page']=='user-management') {
                            include("user-management.php");
                        } else if($_GET['page']=='tarik-data-cabang') {
                            include("sinkron/rekam-medis-dan-pendistribusian.php");
                        } else {
                            include("404.php");
                        }
                    } else {
                        include("dashboard.php");
                    }
                // Admin
                } else {
                    if(isset($_GET['page'])){
                        // Pengkondisian Halaman
                        if($_GET['page']=='dashboard'){
                            include("dashboard.php");
                        } else if($_GET['page']=='data-pendonor') {
                            include("data_pendonor.php");
                        } else if($_GET['page']=='data-rekam-medis') {
                            include("data_rekam_medis.php");
                        } else if($_GET['page']=='data-golongan-darah') {
                            include("data_gol_darah.php");
                        } else if($_GET['page']=='data-pendistribusian') {
                            include("data_pendistribusian.php");
                        } else if($_GET['page']=='edit-data') {
                            include("crud/edit-data.php");
                        } else if($_GET['page']=='sinkronisasi') {
                            include("sinkron/sinkronisasi-data.php");
                        } else {
                            include("404.php");
                        }
                    } else {
                        include("dashboard.php");
                    } 
                }
                ?>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php include('footer.php');?>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    <!-- ./wrapper -->
    </body>
</html>