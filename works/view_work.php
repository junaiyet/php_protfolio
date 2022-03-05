<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';

$select_work_content = "SELECT * FROM works_area";
$select_work_content_result = mysqli_query($db_connection, $select_work_content);



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
                                <h3>work Content List</h3>
                            </div>

                            <div class="card-body">
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>SL</th>

                                            <th>Added By</th>
                                            <th>Title</th>
                                            <th>catagory</th>
                                            <th>Description</th>
                                            <th>image</th>
                                            <!-- <th>Edit</th> -->
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_work_content_result as $key => $work_contents) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td><?php
                                                $user_id = $work_contents['user_id'];
                                                $user = "SELECT * FROM users WHERE id= $user_id ";
                                                $user_result = mysqli_query($db_connection,$user);
                                                $after_assoc = mysqli_fetch_assoc($user_result);
                                                echo $after_assoc['name'];
                                                ?></td>
                                                <td><?= $work_contents['title'] ?></td>
                                                <td><?= $work_contents['catagory'] ?></td>
                                                <td><?= $work_contents['description'] ?></td>
                                                <td>
                                                <img width="100"  src="../uplodeds/works/<?=$work_contents['image'] ?>" alt="">       
                                               </td>

                                                 <!-- <td>
                                                <a href="work_edit.php?id=<?= $work_contents['id'] ?>" type="button" class="btn btn-info "> Edit</a>

                                                </td>  -->
                                                <!-- <td>
                                                    <a href="work_content_status.php?id=<?= $work_contents['id'] ?>" class="btn btn-<?= ($work_contents['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($work_contents['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                    
                                                </td> -->
                                              
                                                <td>
                                                    <a href="work_delete.php.php?id=<?= $work_contents['id'] ?>" class="btn btn-danger">Delete</a>
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