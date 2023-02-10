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
                                    <th>Nama</th>
                                    <th>Golongan Darah</th>
                                    <th>Umur</th>
                                    <th>Gender</th>
                                    <th>BB</th>
                                    <th>Keanggotaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $data_pendonor = mysqli_query($con_pusat, "SELECT * FROM data_pendonor");
                                    while($pendonor = mysqli_fetch_array($data_pendonor)){
                                ?>
                                        <tr>
                                            <td width="5%"><?php echo $pendonor['id_pendonor'];?></td>
                                            <td><?php echo $pendonor['nama_pendonor'];?></td>
                                            <td width="8%"><?php echo $pendonor['golongan_darah'];?></td>
                                            <td><?php echo $pendonor['umur'];?></td>
                                            <td><?php echo $pendonor['jenis_kelamin'];?></td>
                                            <td><?php echo $pendonor['berat_badan'];?></td>
                                            <td><?php echo $pendonor['cabang'];?></td>
                                        </tr>
                                <?php 
                                    };
                                ?>
                            </tbody>
                        </table>

                        <!-- Tombol Tambah Data -->
                        <div class="row mt-3">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-info ms-auto px-4" data-toggle="modal" data-target="#modal-lg">
                                    Tambah Data
                                </button>
                            </div>
                        </div>
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

<!-- Modal untuk Tambah Data -->
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Registrasi Pasien</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Form Tambah Data -->
            <form method="get" action="crud/tambah-data-pendonor-pusat.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cabang" class="fw-normal">Cabang PMI</label>
                        <select class="custom-select" name="cabang" required>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Surabaya">Surabaya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pendonor</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="gol_darah" class="fw-normal">Golongan Darah</label>
                        <select class="custom-select" name="gol_darah" required>
                            <option value="O">O</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" required>
                    </div>
                    <div class="form-group">
                        <label for="bb">Berat Badan</label>
                        <input type="number" class="form-control" id="bb" name="bb" required>
                    </div>
                    <div class="form-group">
                        <label for="jk" class="fw-normal">Jenis Kelamin</label>
                        <select class="custom-select" name="jk" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info px-4">Tambah Data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>