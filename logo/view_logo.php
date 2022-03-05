<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';



$select_dark_logo = "SELECT * FROM dark_logos";
$select_dark_logo_result = mysqli_query($db_connection, $select_dark_logo);

$select_light_logo = "SELECT * FROM light_logos";
$select_light_logo_result = mysqli_query($db_connection, $select_light_logo);

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
                                <h3>Dark logo </h3>
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
                                        <?php foreach ($select_dark_logo_result as $key => $dark_logo) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td>
                                                    <img width="100" src="../uplodeds/logo/<?= $dark_logo['dark_logo'] ?>" alt="logo">
                                                </td>

                                                <td>
                                                    <!-- prosess 1 -->

                                                    <!-- <?php if ($dark_logodark_logo['status'] == 1) { ?>
                                                    <a href="#" class="btn btn-success">Active</a>
                                                    <?php } else { ?>
                                                        
                                                        <a href="#" class="btn btn-secondary">Dactive</a>
                                                        <?php } ?> -->
                                                    <!-- prosess 2 -->

                                                    <a href="dark_logo_status.php?id=<?= $dark_logo['id'] ?>" class="btn btn-<?= ($dark_logo['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($dark_logo['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="dark_logo_delete.php?id=<?= $dark_logo['id'] ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <h3>Dark logo </h3>
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
                                        <?php foreach ($select_light_logo_result as $key => $light_logo) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td>
                                                    <img width="100" src="../uplodeds/logo/<?= $light_logo['light_logo'] ?>" alt="logo">
                                                </td>

                                                <td>
                                                    <!-- prosess 1 -->

                                                    <!-- <?php if ($dark_logodark_logo['status'] == 1) { ?>
                                                    <a href="#" class="btn btn-success">Active</a>
                                                    <?php } else { ?>
                                                        
                                                        <a href="#" class="btn btn-secondary">Dactive</a>
                                                        <?php } ?> -->
                                                    <!-- prosess 2 -->

                                                    <a href="light_logo_status.php?id=<?= $light_logo['id'] ?>" class="btn btn-<?= ($light_logo['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($light_logo['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="light_logo_delete.php?id=<?= $light_logo['id'] ?>" class="btn btn-danger">Delete</a>
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