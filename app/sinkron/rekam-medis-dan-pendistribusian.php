<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <form method="post">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4 class="bold">Rekam Medis</h4>
                            <p>Tarik semua data rekam medis yang berada di setiap cabang</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-medical"></i>
                        </div>
                        <button type="submit" class="btn btn-warning w-100" name="rekam-medis">
                        Pull Data
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <form method="post">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4 class="bold">Pendistribusian Darah</h4>
                            <p>Tarik semua data pendistribusian darah yang berada di setiap cabang</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-ambulance"></i>
                        </div>
                        <button type="submit" class="btn btn-warning w-100" name="pendistribusian-darah">
                        Pull Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    if(isset($_POST['pendistribusian-darah'])){
        // Pendistribusian Darah
        $querybks = "INSERT IGNORE INTO pmi_pusat.data_distribusi_darah (`nomor_distribusi`, `kd_rs`, `kd_gol_darah`, `tgl_distribusi`, `qty`) SELECT nomor_distribusi, kd_rs, kd_gol_darah, tgl_distribusi, qty FROM pmi_bekasi.tb_distribusi_darah";
        $resultbks = $con_pusat->query($querybks);
        $queryjkt = "INSERT IGNORE INTO pmi_pusat.data_distribusi_darah (`nomor_distribusi`, `kd_rs`, `kd_gol_darah`, `tgl_distribusi`, `qty`) SELECT nomor_distribusi, kd_rs, kd_gol_darah, tgl_distribusi, qty FROM pmi_jakarta.tb_distribusi_darah";
        $resultjkt = $con_pusat->query($queryjkt);
        $querysby = "INSERT IGNORE INTO pmi_pusat.data_distribusi_darah (`nomor_distribusi`, `kd_rs`, `kd_gol_darah`, `tgl_distribusi`, `qty`) SELECT nomor_distribusi, kd_rs, kd_gol_darah, tgl_distribusi, qty FROM pmi_surabaya.tb_distribusi_darah";
        $resultsby = $con_pusat->query($querysby);

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
    } elseif(isset($_POST['rekam-medis'])) {
        // Rekam Medis
        $querybks = "INSERT IGNORE INTO pmi_pusat.data_rekam_medis (`nomor_rekam_medis`, `kd_pendonor`, `kd_gol_darah`, `tgl_donor`) SELECT nomor_rekam_medis, kd_pendonor, kd_gol_darah, tgl_donor FROM pmi_bekasi.tb_rekam_medis";
        $resultbks = $con_pusat->query($querybks);
        $queryjkt = "INSERT IGNORE INTO pmi_pusat.data_rekam_medis (`nomor_rekam_medis`, `kd_pendonor`, `kd_gol_darah`, `tgl_donor`) SELECT nomor_rekam_medis, kd_pendonor, kd_gol_darah, tgl_donor FROM pmi_jakarta.tb_rekam_medis";
        $resultjkt = $con_pusat->query($queryjkt);
        $querysby = "INSERT IGNORE INTO pmi_pusat.data_rekam_medis (`nomor_rekam_medis`, `kd_pendonor`, `kd_gol_darah`, `tgl_donor`) SELECT nomor_rekam_medis, kd_pendonor, kd_gol_darah, tgl_donor FROM pmi_surabaya.tb_rekam_medis";
        $resultsby = $con_pusat->query($querysby);

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


