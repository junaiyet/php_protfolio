<?php
session_start();
   require '../db.php';
   require '../dashbord_parts/header.php';


?>


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Contact Information</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
         
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="card">
                               <div class="card-header">
                                   <h3>Add Contact Information</h3>
                               </div>
                               <div class="card-body">
                           
                                   <form action="contact_info_post.php" method="POST">
                                        <div class="mt-3 pos-lg-relative">
                                            <label for="form-label">Address</label>
                                            <input type="text" class="form-control" name="address">                                               
                                        </div>
                                        <div class="mt-3 pos-lg-relative">
                                            <label for="form-label">Phone Number</label>
                                            <input type="number" class="form-control" name="number">                                               
                                        </div>
                                        <div class="mt-3 pos-lg-relative">
                                            <label for="form-label">Email Address</label>
                                            <input type="email" class="form-control" name="email">                                               
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Add Icon</button>
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
<script>
    $('.social_icon').click(function(){
    var icon_class  =  $(this).attr('name');
    $('#icon_input').attr('value', icon_class);
    $('#icon_show').attr('class','fa ' + icon_class);
   
    });
</script>
