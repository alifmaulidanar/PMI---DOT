<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <form method="POST">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4 class="bold">Data Pendonor</h4>
                            <p>Distribusikan semua data pendonor ke setiap cabang berdasarkan<br>
                            lokasi keanggotaannya</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <button type="submit" class="btn btn-warning w-100" name="pendonor">
                        Distribute Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    // Conn
    $con_bks = mysqli_connect("localhost", "root", "Maulidanar0406", "pmi_bekasi");
    $con_jkt = mysqli_connect("localhost", "root", "Maulidanar0406", "pmi_jakarta");
    $con_sby = mysqli_connect("localhost", "root", "Maulidanar0406", "pmi_surabaya");

    if(isset($_POST['pendonor'])){
        $querybks = "INSERT IGNORE INTO pmi_bekasi.tb_pendonor (`id_pendonor`, `nama_pendonor`, `golongan_darah`) SELECT id_pendonor, nama_pendonor, golongan_darah FROM pmi_pusat.data_pendonor WHERE cabang = 'Bekasi'";
        $resultbks = $con_bks->query($querybks);
        $queryjkt = "INSERT IGNORE INTO pmi_jakarta.tb_pendonor (`id_pendonor`, `nama_pendonor`, `golongan_darah`) SELECT id_pendonor, nama_pendonor, golongan_darah FROM pmi_pusat.data_pendonor WHERE cabang = 'Jakarta'";
        $resultjkt = $con_jkt->query($queryjkt);
        $querysby = "INSERT IGNORE INTO pmi_surabaya.tb_pendonor (`id_pendonor`, `nama_pendonor`, `golongan_darah`) SELECT id_pendonor, nama_pendonor, golongan_darah FROM pmi_pusat.data_pendonor WHERE cabang = 'Surabaya'";
        $resultsby = $con_sby->query($querysby);

        if($resultbks == 1 && $resultjkt == 1 && $resultsby == 1){
            echo '
            <script type="text/javascript">                        
                Swal.fire({
                    title: `Success!`,
                    text: `Distribute Data Success!`,
                    icon: `success`,
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true
                })
            </script>';
        } else {
            echo '
            <script type="text/javascript">                        
                Swal.fire({
                    title: `Failed!`,
                    text: `Distribute Data Failed!`,
                    icon: `error`,
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true
                })
            </script>';
        }
    }
?>