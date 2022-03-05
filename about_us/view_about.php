<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';

$select_about_content = "SELECT * FROM about_us";
$select_about_content_result = mysqli_query($db_connection, $select_about_content);



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
                                <h3>About Content List</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>SL</th>

                                            <th>Description</th>
                                            <th>image</th>
                                            <th>Edit</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_about_content_result as $key => $about_contents) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td><?= $about_contents['description'] ?></td>
                                                <td>
                                                <img width="100"  src="../uplodeds//about_images/<?=$about_contents['image'] ?>" alt="">       
                                               </td>
                                                <td>
                                                <a href="about_edit.php?id=<?= $about_contents['id'] ?>" type="button" class="btn btn-info "> Edit</a>

                                                </td>
                                                <td>
                                                <a href="about_content_status.php?id=<?= $about_contents['id'] ?>" class="btn btn-<?= ($about_contents['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($about_contents['status'] == 1 ? 'Active' : 'Deactive') ?></a>

                                                </td>
                                                <td>
                                                    <a href="about_delete.php.php?id=<?= $about_contents['id'] ?>" class="btn btn-danger">Delete</a>
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