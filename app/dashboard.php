<?php
    // Pengkondisian User
    if($_SESSION['pmiuser']['role'] == 'superadmin'){
        include("dashboard/superadmin-dash.php");
    } else {
        include("dashboard/admin-dash.php");
    }
?>