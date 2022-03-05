<?php
session_start();
   require '../db.php';
   require '../dashbord_parts/header.php';
?>


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Banner</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
         
            <div class="container">
                <div class="row">
                 
                    <div class="col-lg-6 m-auto">
                        <div class="card">
                               <div class="card-header">
                                   <h3 style="color:#000">Add drack logo</h3>
                               </div>
                               <div class="card-body">
                                   <form action="dark_logo_post.php" method="POST" enctype="multipart/form-data">
                                  
                                        <div class="mt-3">
                                            <label for="form-label">Add drack logo</label>
                                            <input type="file" class="form-control" name="dark_logo" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            <img class="mt-3" src=""  id="pic">
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Add Image</button>
                                        </div>
                                   </form>
                               </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-auto">
                        <div class="card">
                               <div class="card-header">
                                   <h3>Add light logo</h3>
                               </div>
                               <div class="card-body">
                                   <form action="light_logo_post.php" method="POST" enctype="multipart/form-data">
                                  
                                        <div class="mt-3">
                                            <label for="form-label">Add drack logo</label>
                                            <input type="file" class="form-control" name="light_logo" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            <img class="mt-3" src=""  id="pic">
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Add Image</button>
                                        </div>
                                   </form>
                               </div>
                        </div>
                    </div>
                 
                </div>
            </div>

        </div>

    </div>
</div>










<?php
   require '../dashbord_parts/footer.php';
?>