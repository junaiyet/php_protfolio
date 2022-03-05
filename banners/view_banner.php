<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';

$select_banner_content = "SELECT * FROM banner_contents";
$select_banner_content_result = mysqli_query($db_connection, $select_banner_content);

$select_banner_image = "SELECT * FROM banner_images";
$select_banner_image_result = mysqli_query($db_connection, $select_banner_image);

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
                                <h3>Banner Content List</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Sub Title</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_banner_content_result as $key => $banner_contents) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td><?= $banner_contents['sub_title'] ?></td>
                                                <td><?= $banner_contents['title'] ?></td>
                                                <td><?= $banner_contents['description'] ?></td>
                                                <td>
                                                    <a href="banner_content_status.php?id=<?= $banner_contents['id'] ?>" class="btn btn-<?= ($banner_contents['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($banner_contents['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="banner_content_delete.php?id=<?= $banner_contents['id'] ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>



                        <div class="card">
                            <div class="card-header">
                                <h3>Banner Image List</h3>
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
                                        <?php foreach ($select_banner_image_result as $key => $banner_image) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td>
                                                    <img width="100" src="../uplodeds/banners/<?= $banner_image['banner_image'] ?>" alt="">
                                                </td>

                                                <td>
                                                    <!-- prosess 1 -->

                                                    <!-- <?php if ($banner_image['status'] == 1) { ?>
                                                    <a href="#" class="btn btn-success">Active</a>
                                                    <?php } else { ?>
                                                        
                                                        <a href="#" class="btn btn-secondary">Dactive</a>
                                                        <?php } ?> -->
                                                    <!-- prosess 2 -->

                                                    <a href="banner_images_status.php?id=<?= $banner_image['id'] ?>" class="btn btn-<?= ($banner_image['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($banner_image['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="banner_image_delete.php?id=<?= $banner_image['id'] ?>" class="btn btn-danger">Delete</a>
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