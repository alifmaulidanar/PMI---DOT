<h4>Cabang Bekasi</h4>
<div class="row">
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>
                <?php
                    $tb_pendonor = mysqli_query($con_pusat, "SELECT * FROM data_pendonor WHERE cabang = 'Bekasi'");
                    if($tb_pendonor){
                        $row = mysqli_num_rows($tb_pendonor);
                        if($row){
                            echo $row;
                        } else {
                            echo "0";
                        }
                        mysqli_free_result($tb_pendonor);
                    }
                ?>
            </h3>

            <p>Total Pendonor</p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <a href="index.php?page=data-pendonor&cabang=bekasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
        <div class="inner">
            <h3>
            <?php
                    $tb_rekam_medis = mysqli_query($con_pusat, "SELECT * FROM data_rekam_medis WHERE nomor_rekam_medis like 'RM-BKS%'");
                    if($tb_rekam_medis){
                        $row = mysqli_num_rows($tb_rekam_medis);
                        if($row){
                            echo $row;
                        } else {
                            echo "0";
                        }
                        mysqli_free_result($tb_rekam_medis);
                    }
                ?>
            </h3>

            <p>Rekam Medis</p>
        </div>
        <div class="icon">
            <i class="fas fa-file-medical"></i>
        </div>
        <a href="index.php?page=data-rekam-medis&cabang=bekasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>
                <?php
                    $tb_distribusi_darah = mysqli_query($con_pusat, "SELECT * FROM data_distribusi_darah WHERE nomor_distribusi like 'PD-BKS%'");
                    if($tb_distribusi_darah){
                        $row = mysqli_num_rows($tb_distribusi_darah);
                        if($row){
                            echo $row;
                        } else {
                            echo "0";
                        }
                        mysqli_free_result($tb_distribusi_darah);
                    }
                ?>
            </h3>

            <p>Pendistribusian Darah</p>
        </div>
        <div class="icon">
            <i class="fa fa-ambulance"></i>
        </div>
        <a href="index.php?page=data-pendistribusian&cabang=bekasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
<!-- ./col -->
</div>