<?php
    $cabang = $_SESSION['pmiuser']['nama_cabang'];
    $db = 'pmi_' . $cabang;
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <form method="POST">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h4 class="bold">Data Pendonor</h4>
                            <p>Tarik data pendonor yang berada dipusat ke cabang</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <button type="submit" class="btn btn-warning w-100" name="pendonor">
                        Pull Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    if(isset($_POST['pendonor'])){
        // Sync
        $insertquery = "INSERT IGNORE INTO $db.tb_pendonor (`id_pendonor`, `nama_pendonor`, `golongan_darah`) SELECT id_pendonor, nama_pendonor, golongan_darah FROM pmi_pusat.data_pendonor WHERE cabang = '$cabang'";
        $result = $con1->query($insertquery);

        if($result){
            echo '
            <script type="text/javascript">                        
                Swal.fire({
                    title: `Success!`,
                    text: `Pull Data Success!`,
                    icon: `success`,
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true
                })
            </script>';
        } else {
            echo '
            <script type="text/javascript">                        
                Swal.fire({
                    title: `Failed!`,
                    text: `Pull Data Failed!`,
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