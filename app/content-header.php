<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <?php $page = $_GET['page'];?>
                <h1 class="m-0"><strong><?= ucfirst(str_replace("-"," ",$page));?></strong></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php?page=dashboard">Home</a></li>
                <li class="breadcrumb-item active"><?= ($_GET['page']); ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <hr style="border-top: 1px solid #ff7e7e;">
    </div><!-- /.container-fluid -->
</div>