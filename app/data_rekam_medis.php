<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No Rekam Medis</th>
                                    <th>Nama Pendonor</th>
                                    <th>ID Pendonor</th>
                                    <th>Golongan Darah</th>
                                    <th>Tanggal Donor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($con1, "SELECT rm.*, p.* FROM tb_rekam_medis rm JOIN tb_pendonor p ON rm.kd_pendonor = p.id_pendonor ");
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                        <tr>
                                            <td width="12%" class="td-center"><?php echo $data['nomor_rekam_medis'];?></td>
                                            <td><?php echo $data['nama_pendonor'];?></td>
                                            <td width="10%" class="td-center"><?php echo $data['kd_pendonor'];?></td>
                                            <td width="12%" class="td-center"><?php echo $data['kd_gol_darah'];?></td>
                                            <td><?php echo $data['tgl_donor'];?></td>
                                            <td width="12%" class="td-center">
                                                <!-- Edit
                                                <a class="text-warning" href="#" role="button">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a> 
                                                | -->
                                                <!-- Hapus -->
                                                <a class="text-danger" href="#" role="button">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </a>
                                            </td>
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
