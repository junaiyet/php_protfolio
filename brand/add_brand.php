<?php
session_start();
   require '../db.php';
   require '../dashbord_parts/header.php';
?>


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Brand</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
         
            <div class="container">
                <div class="row">
                 
        
                    <div class="col-lg-6 m-auto">
                        <div class="card">
                               <div class="card-header">
                                   <h3>Add Brand Image</h3>
                               </div>
                               <div class="card-body">
                                   <form action="brand_post.php" method="POST" enctype="multipart/form-data">
                                  
                                        <div class="mt-3">
                                            <label for="form-label">Add Brand Image</label>
                                            <input type="file" class="form-control" name="brand_logo" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                            <img class="mt-3" src=""  id="pic">
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Add Brand Image</button>
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