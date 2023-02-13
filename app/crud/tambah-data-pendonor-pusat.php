<?php
    session_start();
    $con_pusat = mysqli_connect("localhost:88", "root", "Maulidanar0406", "pmi_pusat");

    $nama_pendonor = $_GET['nama'];
    $golongan_darah = $_GET['gol_darah'];
    $jenis_kelamin = $_GET['jk'];
    $umur = $_GET['umur'];
    $berat_badan = $_GET['bb'];
    $alamat = $_GET['alamat'];
    $cabang = $_GET['cabang'];

    $insertquery = "INSERT INTO data_pendonor (`nama_pendonor`, `golongan_darah`, `jenis_kelamin`, `umur`, `berat_badan`, `alamat`, `cabang`) VALUES ('$nama_pendonor', '$golongan_darah', '$jenis_kelamin', '$umur', '$berat_badan', '$alamat', '$cabang')";
    $result = $con_pusat->query($insertquery);

    if($result){
        echo '<script type="text/javascript">                        Swal.fire({
            title: `Success!`,
            text: `Input Data Success!`,
            icon: `success`,
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true
        })</script>
        <script>setTimeout(function(){
            history.back();
        }, 2000);
        </script>';
    } else {
        $con_pusat -> connect_error;
    }
?>