<?php
session_start();
   require '../db.php';
   require '../dashbord_parts/header.php';


?>


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Skills Information</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
         
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="card">
                               <div class="card-header">
                                   <h3>Add Skills Information</h3>
                               </div>
                               <div class="card-body">
                           
                                   <form action="skills_post.php" method="POST">
                                        <div class="mt-3">
                                            <label for="form-label">Topic</label>
                                            <input type="text" class="form-control" name="topic">                                               
                                        </div>
                                        <div class="mt-3 e">
                                            <label for="form-label">Description</label>
                                            <input type="text" class="form-control" name="description">                                               
                                        </div>
                                        <div class="mt-3 ">
                                            <label for="form-label">Percentage</label>
                                            <input type="text" class="form-control" name="percentage">                                               
                                        </div>

                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Add Skils</button>
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
