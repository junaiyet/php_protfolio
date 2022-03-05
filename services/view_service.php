<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';

$select_service_icon = "SELECT * FROM servire";
$select_service_result = mysqli_query($db_connection, $select_service_icon);


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
                                <h3>Social Icon List</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Icon</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_service_result as $key => $service) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td> <i class="fa <?= $service['service_icon'] ?>"></i></td>
                                                <td> <?= $service['title'] ?></td>
                                                <td> <?= $service['description'] ?></td>

                                                <td>
                                                    <a href="service_status.php?id=<?= $service['id'] ?>" class="btn btn-<?= ($service['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($service['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="service_delete.php?id=<?= $service['id'] ?>" class="btn btn-danger">Delete</a>
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

<?php if (isset($_SESSION['limite'])) { ?>

    <script>
        Swal.fire(
            'Opps!',
            '<?= $_SESSION['limite'] ?>',
            'error',
        )
    </script>
<?php }
unset($_SESSION['limite']) ?>