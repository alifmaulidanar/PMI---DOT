<?php
    include("cabang.php");
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No Rekam Medis</th>
                                    <th>Nama Pendonor</th>
                                    <th>Golongan Darah</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $data_rekam_medis = mysqli_query($con_pusat, "SELECT rm.*, p.id_pendonor, p.nama_pendonor FROM data_rekam_medis rm INNER JOIN data_pendonor p ON rm.kd_pendonor = p.id_pendonor WHERE nomor_rekam_medis like 'RM-$cbg%'");
                                    while($rekam_medis = mysqli_fetch_array($data_rekam_medis)){
                                ?>
                                        <tr>
                                            <td><?php echo $rekam_medis['nomor_rekam_medis'];?></td>
                                            <td><?php echo $rekam_medis['nama_pendonor'];?></td>
                                            <td><?php echo $rekam_medis['kd_gol_darah'];?></td>
                                            <td><?php echo $rekam_medis['tgl_donor'];?></td>
                                        </tr>
                                <?php 
                                    };
                                ?>
                            </tbody>
                        </table>
                    </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
