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
                                    <th>No Pendistribusian</th>
                                    <th>Rumah Sakit yang Meminta</th>
                                    <th>Golongan Darah</th>
                                    <th>Kuantitas</th>
                                    <th>Tanggal Donor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($con1, "SELECT d.*, rs.* FROM tb_distribusi_darah d JOIN tb_rumah_sakit rs ON d.kd_rs = rs.id_rs ");
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                        <tr>
                                            <td width="15%" class="td-center"><?php echo $data['nomor_distribusi'];?></td>
                                            <td><?php echo $data['nama_rs'];?></td>
                                            <td width="12%" class="td-center"><?php echo $data['kd_gol_darah'];?></td>
                                            <td width="12%" class="td-center"><?php echo $data['qty'];?></td>
                                            <td><?php echo $data['tgl_distribusi'];?></td>
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