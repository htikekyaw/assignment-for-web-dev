<?php

session_start();
require_once "base.php"; 
require_once "function.php"; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="feather-icons-web/feather.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center min-vh-100">
                    <div class="">
                    <div class="col-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <form method="post"  enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-start align-items-center" >
                                            <input id="profilepp" name="profilepp" type="text"  hidden/>
                                            <label for="file-input">
                                                <div id="pp" class="border border-warning d-flex justify-content-center align-items-center" style="width: 70px; height: 70px;">
                                                    <i  data-feather="user" ></i>
                                                </div>
                                                <small>Upload Profile</samll>
                                            </label>    
                                                <div class="d-flex justify-content-center">
                                                    <h6 class="ml-3 font-weight-bold mb-3" id="demo">Save Your Personal Biography </h6>         
                                                </div>                                     
                                                <input onchange="FileUpload()" style="display:none" name="upload" type="file" id="file-input" > 

                                                <?php if(getError('email')) { ?>    

                                                <small class="text-danger font-weight-bold">
                                                    <?php echo getError('email') ?>
                                                </small>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        <hr>
                                        <?php 
                                        if(isset($_POST['reg-btn'])){

                                           

                                            register();
                                        }
                                        ?>
                                        <div class="form-group">
                                            <div class="" >
                                                <i  data-feather="user"></i>
                                                <label for="name" class="text-primary font-weight-bold">Name</label>                 
                                                <input  type="text" name="name" id="name" class="form-control" value="<?php old('name'); ?>" >  
                                                <?php if(getError('name')) { ?>    

                                                    <small class="text-danger font-weight-bold">
                                                         <?php echo getError('name') ?>
                                                    </small>
                                                <?php } ?>                                      
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="" >
                                                <i  data-feather="mail"></i>
                                                <label for="email" class="text-primary font-weight-bold ">Email</label>                 
                                                <input  type="text" name="email" id="email" class="form-control" value="<?php old('email'); ?>">    
                                                <?php if(getError('email')) { ?>    

                                                <small class="text-danger font-weight-bold">
                                                    <?php echo getError('email') ?>
                                                </small>
                                                <?php } ?>                                                               
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="" >
                                                <i  data-feather="phone"></i>
                                                <label for="phone" class="text-primary font-weight-bold ">Phone No</label>                 
                                                <input  type="text" name="phone" id="phone" class="form-control" value="<?php old('phone'); ?>">  
                                                <?php if(getError('phone')) { ?>    

                                                <small class="text-danger font-weight-bold">
                                                    <?php echo getError('phone') ?>
                                                </small>
                                                <?php } ?>                                                               
                                            </div>
                                        </div>
                                        <div class="submit text-right">
                                            <button name="reg-btn" class="btn btn-primary">Submit</button>
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

    <?php clearError() ?>


    <script src="js/bootstrap.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>
   

</body>
<script>
function FileUpload(){
    var file = document.getElementById('file-input').files[0];

    var formdata = new FormData();
    formdata.append("image",file);

    var xhr = new XMLHttpRequest();

        xhr.open("POST","imageupload.php",true);    
        xhr.send(formdata);
        xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            document.getElementById("pp").innerHTML='<img src="'+xhr.responseText+'" width="50px" height="50px"/>';
            document.getElementById("profilepp").value=xhr.responseText;
            
            
                 //some code
        }
    };
    
}
</script>
</html>