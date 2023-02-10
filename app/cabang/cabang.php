<?php
    $cabang = $_GET['cabang'];
    if($cabang == 'bekasi'){
        $cbg = 'BKS';
    } elseif($cabang == 'jakarta') {
        $cbg = 'JKT';
    } else {
        $cbg = 'SBY';
    }
?>