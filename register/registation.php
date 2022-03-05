<?php

session_start();
require '../session_check.php';
require '../db.php';
require '../dashbord_parts/header.php';

?>



<style>
  .password {
    position: relative;
  }

  .password i {
    position: absolute;
    right: 20px;
    top: 42px;
  }
</style>

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Blank Page</span>
  </nav>

  <div class="sl-pagebody">
    <div class="row mt-5">
      <div class="col-lg-6 mx-auto card  p-5">
        <div class="card">
          <div class="card-header">
            <h3>Add Users</h3>
          </div>
          <div class="card-body">

            <form action="post.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name='name' value="<?php echo (isset($_SESSION['old_name']) ? $_SESSION['old_name'] : '');
                                                                            unset($_SESSION['old_name']) ?>">

                <?php if (isset($_SESSION['name_error'])) { ?>
                  <div class="alert alert-danger">
                    <?= $_SESSION['name_error'] ?>
                  </div>
                <?php }
                unset($_SESSION['name_error']) ?>

              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo (isset($_SESSION['old_email']) ? $_SESSION['old_email'] : '');
                                                                              unset($_SESSION['old_email']) ?>">
                <?php if (isset($_SESSION['email_error'])) { ?>
                  <div class="alert alert-danger">
                    <?= $_SESSION['email_error'] ?>
                  </div>
                <?php }
                unset($_SESSION['email_error']) ?>

              </div>
              <div class="mb-3 password">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo (isset($_SESSION['old_password']) ? $_SESSION['old_password'] : '');
                                                                                                  unset($_SESSION['old_password']) ?>">
                <?php if (isset($_SESSION['password_error'])) { ?>
                  <div class="alert alert-danger">
                    <?= $_SESSION['password_error'] ?>
                  </div>
                <?php }
                unset($_SESSION['password_error']) ?>
                <i class='fa fa-eye' onclick="passWord_show()"></i>

              </div>
              <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password">
                <?php if (isset($_SESSION['confirm_password_error'])) { ?>
                  <div class="alert alert-danger">
                    <?= $_SESSION['confirm_password_error'] ?>
                  </div>
                <?php }
                unset($_SESSION['confirm_password_error']) ?>
              </div>
              <div class="mb-3">

                <input type="file" class="form-control" name="profile_photo" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                <img width="50" style="border-radius: 50%;" class="mt-3" id="pic" />
                <?php if (isset($_SESSION['extension'])) { ?>
                  <div class="alert alert-danger">
                    <?= $_SESSION['extension'] ?>
                  </div>
                <?php }
                unset($_SESSION['extension']) ?>
                <?php if (isset($_SESSION['size'])) { ?>
                  <div class="alert alert-danger">
                    <?= $_SESSION['size'] ?>
                  </div>
                <?php }
                unset($_SESSION['size']) ?>
              </div>
              <div class="mb-3">
   
                <select name="role" class="form-control">
                  <option value="">--Select Role--</option>
                  <option value="2">Admin</option>
                  <option value="3">Modetor</option>
                  <option value="4">Viewers</option>
                </select>
                                                                        

              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>

          </form>
        </div>
      </div>

    </div>
  </div>

</div>
</div>




<?php require '../dashbord_parts/footer.php' ?>






<?php if (isset($_SESSION['email_exits'])) { ?>
  <script>
    Swal.fire({
      position: 'top-center',
      icon: 'error',
      title: '<?= $_SESSION['email_exits '] ?>',
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
      title: '<?= $_SESSION['success '] ?>',
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
  }
</script>