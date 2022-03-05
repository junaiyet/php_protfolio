<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';

$select_skills_info= "SELECT * FROM skills";
$select_skills_info_result = mysqli_query($db_connection, $select_skills_info);


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
                                            <th>Topic</th>
                                            <th>Description</th>
                                            <th>Percentage</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_skills_info_result as $key => $skill) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td>  <?= $skill['topic'] ?></td>
                                                <td>  <?= $skill['description'] ?></td>
                                                <td>  <?= $skill['percentage'] ?></td>
                                              
                                                <td>
                                                                              
                                                    <!-- prosess 2 -->
                                                    <a href="skills_status.php?id=<?= $skill['id'] ?>" class="btn btn-<?= ($skill['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($skill['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="skills_delete.php?id=<?= $skill['id'] ?>" class="btn btn-danger">Delete</a>
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