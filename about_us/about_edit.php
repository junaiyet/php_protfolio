<?php

session_start();
// require 'session_check.php';
require '../db.php';

$id = $_GET['id'];



$select_user_edit = " SELECT * FROM about_us WHERE id=$id";

$select_user_edit_result = mysqli_query($db_connection, $select_user_edit);

$after_assos = mysqli_fetch_assoc($select_user_edit_result);


?>


<?php require '../dashbord_parts/header.php'; ?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Blank Page</span>
  </nav>

  <div class="sl-pagebody">
    <div class="row">

      <div class="col-md-8 mx-auto my-5 ">
        <div class="card border-secondary mb-3">

          <div class="card-body ">
            <h5 class="card-title bg-info text-white p-2">Edit About Information</h5>
            <div class="card-body text-secondary">

              <form action="about_update.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input type="hidden" class="form-control" name='id' value="<?= $after_assos['id']; ?>">
                  <input type="text" class="form-control" name='description' value="<?= $after_assos['description']; ?>">
              
                </div>
         
                <div class="mb-3">

                
                  <input type="file" class="form-control" name="image" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                  <img width="50" style="border-radius: 50%;" class="my-4" id="pic" src="/protfolio/uplodeds/about_images/<?= $after_assos['image']; ?>">
                  <!-- <img width="50" style="border-radius: 50%;" class="mt-3"  > -->
        
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- sl-page-title -->

  </div><!-- sl-pagebody -->
</div>
<!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->



<?php require '../dashbord_parts/footer.php'; ?>



<!-- 
<?php if (isset($_SESSION['email_exits'])) { ?>
  <script>
    Swal.fire({
      position: 'top-center',
      icon: 'error',
      title: '<?= $_SESSION['email_exits'] ?>',
      showConfirmButton: false,
      timer: 1500
    })
  </script>
<?php }
unset($_SESSION['email_exits']) ?>


<?php if (isset($_SESSION['success'])) { ?>
  <script>
    Swal.fire({
      position: 'top-center',
      icon: 'success',
      title: '<?= $_SESSION['success'] ?>',
      showConfirmButton: false,
      timer: 1500
    })
  </script>
<?php }
unset($_SESSION['success']) ?>

<script>
  function passWord_show() {
    var password_input = document.getElementById('password')
    if (password_input.type == 'password') {
      password_input.type = 'text';
    } else {
      password_input.type = 'password'
    }
  } -->
</script>

</body>

</html>