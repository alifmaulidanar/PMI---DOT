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
                                    <th>Golongan Darah</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = mysqli_query($con1, "SELECT * FROM tb_gol_darah");
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                        <tr>
                                            <td width="15%" class="td-center"><?php echo $data['gol_darah'];?></td>
                                            <td class="td-center"><?php echo $data['stok'];?></td>
                                            <td class="td-center">
                                                <!-- Edit -->
                                                <a class="text-warning" href="index.php?page=edit-data&goldarah=<?php echo $data['gol_darah'];?>" role="button">
                                                    <i class="fas fa-edit"></i> Edit Stok
                                                </a> 
                                                
                                                <!-- Hapus -->
                                                <!-- <a class="text-danger" href="#" role="button">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </a> -->
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
