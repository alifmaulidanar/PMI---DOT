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
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Cabang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $user_pmi = mysqli_query($con_pusat, "SELECT * FROM user_pmi");
                                    while($pmiusers = mysqli_fetch_array($user_pmi)){
                                ?>
                                        <tr>
                                            <td width="5%"><?php echo $pmiusers['id'];?></td>
                                            <td><?php echo $pmiusers['username'];?></td>
                                            <td><?php echo $pmiusers['role'];?></td>
                                            <td><?php echo $pmiusers['nama_cabang'];?></td>
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