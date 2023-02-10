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
                                    <th>No</th>
                                    <th>ID Pendonor</th>
                                    <th>Nama Pendonor</th>
                                    <th>Golongan Darah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $nomor = 0;
                                    $data_pendonor = mysqli_query($con_pusat, "SELECT * FROM data_pendonor WHERE cabang = '$cabang'");
                                    while($pendonor = mysqli_fetch_array($data_pendonor)){
                                        $nomor++;
                                ?>
                                        <tr>
                                            <td width="5%" class="td-center"><?php echo $nomor;?></td>
                                            <td width="10%" class="td-center"><?php echo $pendonor['id_pendonor'];?></td>
                                            <td><?php echo $pendonor['nama_pendonor'];?></td>
                                            <td width="12%" class="td-center"><?php echo $pendonor['golongan_darah'];?></td>
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