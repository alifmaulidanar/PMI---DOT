<?php
    $goldarah = $_GET['goldarah'];
    $query = mysqli_query($con1, "SELECT * FROM tb_gol_darah WHERE gol_darah = '$goldarah'");
    $view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Stok Golongan Darah</h3>
        </div>

        <div class="card-body">
            <form method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Gol Darah">Golongan Darah</label>
                            <input type="text" class="form-control" id="goldarah" placeholder="" disabled value="<?php echo $view['gol_darah'];?>">
                            <input type="text" class="form-control" placeholder="" name="goldarah" value="<?php echo $view['gol_darah'];?>" hidden>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                        <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" placeholder="" name="stok" value="<?php echo $view['stok'];?>">
                        </div>
                    </div>
                </div>
                <!-- Tombol Edit Data -->
                <div class="row mt-2">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-info ms-auto px-5" name="edit">
                            Edit Data
                        </button>
                    </div>
                </div>
            </form>
        </div>

        </div>
    </div>
</section>

<?php
    if(isset($_POST['edit'])){
        $kd_gol_darah = $_POST['goldarah'];
        $stok = $_POST['stok'];
        $edit_query = mysqli_query($con1, "UPDATE tb_gol_darah SET stok = '$stok' WHERE gol_darah = '$kd_gol_darah'");
        
        if($edit_query){
            echo '
            <script type="text/javascript">                        
                Swal.fire({
                    title: `Success!`,
                    text: `Update Success!`,
                    icon: `success`,
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true
                })
            </script>
            <script>
                setTimeout(function(){
                    window.location="index.php?page=data-golongan-darah";
                }, 2000);
            </script>';
        } else {
            echo '
            <script type="text/javascript">                        
                Swal.fire({
                    title: `Failed!`,
                    text: `Update Failed!`,
                    icon: `error`,
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true
                })
            </script>';
            $con1 -> connect_error;
        }
    
    }


?>