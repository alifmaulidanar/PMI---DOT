<div class="sidebar">
    <!-- Sidebar Menu -->
    <?php
        // Pengkondisian User
        if($_SESSION['pmiuser']['role'] == 'superadmin'){
            include("menu/superadmin.php");
        } else {
            include("menu/admin.php");
        }
    ?>
    <!-- /.sidebar-menu -->
</div>