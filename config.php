<?php
    if(isset($_SESSION['pmiuser'])){
        // PMI
        $cabang = strtolower($_SESSION['pmiuser']['nama_cabang']);
        $db = 'pmi_' . $cabang;
        $con1 = mysqli_connect("localhost", "root", "Maulidanar0406", $db);
    } elseif (isset($_SESSION['rsuser'])){
        // RS
        $cabang = strtolower($_SESSION['rsuser']['lokasi']);
        $db = 'pmi_' . $cabang;
        $con1 = mysqli_connect("localhost", "root", "Maulidanar0406", $db);
    } else {
        // Pusat
        $con_pusat = mysqli_connect("localhost", "root", "Maulidanar0406", "pmi_pusat");
    }
?>