<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';



$select_brand_logo = "SELECT * FROM brand_logos";
$select_brand_logo_result = mysqli_query($db_connection, $select_brand_logo);

?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <div class="container">
                <div class="row">
               
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <h3> Brand logos</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_brand_logo_result as $key => $brand_logo) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td>
                                                    <img width="100" src="../uplodeds/brand_logo/<?= $brand_logo['brand_logo'] ?>" alt="logo">
                                                </td>

                                                <td>
                                                  
                                                    <!-- prosess 2 -->

                                                    <a href="brand_status.php?id=<?= $brand_logo['id'] ?>" class="btn btn-<?= ($brand_logo['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($brand_logo['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="brand_delete.php?id=<?= $brand_logo['id'] ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div>

<?php
require '../dashbord_parts/footer.php'
?>
<?php if(isset($_SESSION['limite'])){?>

<script>
    Swal.fire(
           'Opps!',
           '<?=$_SESSION['limite']?>',
           'error',
    )
</script>
<?php } unset($_SESSION['limite'])?>