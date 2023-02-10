<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>
                        <?php
                            $tb_pendonor = mysqli_query($con1, "SELECT * FROM tb_pendonor");
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
                <a href="index.php?page=data-pendonor" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>
                        <?php
                            $tb_rekam_medis = mysqli_query($con1, "SELECT * FROM tb_rekam_medis");
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
                <a href="index.php?page=data-rekam-medis" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>
                        <?php
                            $tb_gol_darah = mysqli_query($con1, "SELECT SUM(stok) AS stok FROM tb_gol_darah");
                            $row = mysqli_fetch_assoc($tb_gol_darah);
                            $sum = $row['stok'];
                            echo $sum;
                        ?>
                    </h3>

                    <p>Stok Golongan Darah</p>
                </div>
                <div class="icon">
                    <i class="fas fa-medkit"></i>
                </div>
                <a href="index.php?page=data-golongan-darah" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>
                        <?php
                            $tb_distribusi_darah = mysqli_query($con1, "SELECT * FROM tb_distribusi_darah");
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
                <a href="index.php?page=data-pendistribusian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>