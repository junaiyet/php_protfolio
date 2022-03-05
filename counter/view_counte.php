<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';

$select_counte_info= "SELECT * FROM counte";
$select_counte_info_result = mysqli_query($db_connection, $select_counte_info);


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
                                <h3>counte</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                    
                                            <th>Percentage</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_counte_info_result as $key => $counte) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                      
                                                <td>  <?= $counte['percentage'] ?></td>
                                              
                                                <td>
                                                                              
                                                    <!-- prosess 2 -->
                                                    <a href="counte_status.php?id=<?= $counte['id'] ?>" class="btn btn-<?= ($counte['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($counte['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="counte_delete.php?id=<?= $counte['id'] ?>" class="btn btn-danger">Delete</a>
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