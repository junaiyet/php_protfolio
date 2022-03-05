<?php
session_start();
require '../db.php';
require '../dashbord_parts/header.php';

$select_contact_info= "SELECT * FROM contact_info";
$select_contact_info_result = mysqli_query($db_connection, $select_contact_info);


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
                                            <th>Discription</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($select_contact_info_result as $key => $contact) { ?>
                                            <tr>
                                                <td><?= ++$key ?></td>
                                                <td>  <?= $contact['description'] ?></td>
                                              
                                                <td>
                                                                              
                                                    <!-- prosess 2 -->
                                                    <a href="contact_status.php?id=<?= $contact['id'] ?>" class="btn btn-<?= ($contact['status'] == 1 ? 'success' : 'secondary') ?>"><?= ($contact['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </td>
                                                <td>
                                                    <a href="contact_info_delete.php?id=<?= $contact['id'] ?>" class="btn btn-danger">Delete</a>
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