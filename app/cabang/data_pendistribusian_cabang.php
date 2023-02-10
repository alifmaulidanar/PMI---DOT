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
                                    <th>No Distribusi</th>
                                    <th>Rumah Sakit</th>
                                    <th>Golongan Darah</th>
                                    <th>Kuantitas</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $data_distribusi_darah = mysqli_query($con_pusat, "SELECT dd.*, rs.id, rs.nama_rs FROM data_distribusi_darah dd INNER JOIN user_rs rs ON dd.kd_rs = rs.id WHERE nomor_distribusi like 'PD-$cbg%'");
                                    while($distribusi = mysqli_fetch_array($data_distribusi_darah)){
                                ?>
                                        <tr>
                                            <td><?php echo $distribusi['nomor_distribusi'];?></td>
                                            <td><?php echo $distribusi['nama_rs'];?></td>
                                            <td><?php echo $distribusi['kd_gol_darah'];?></td>
                                            <td><?php echo $distribusi['qty'];?></td>
                                            <td><?php echo $distribusi['tgl_distribusi'];?></td>
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
