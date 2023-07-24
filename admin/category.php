<?php include './model.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Category</title>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">   
        <link rel="stylesheet" href="css/bootstrap.css">   
       
         <link rel="stylesheet" href="font/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">   
    </head>
    <body>
        <?php

        if($_SESSION['login_auth']!=1){header('Location:index.php');exit;}
         $model->validateHeader();
       if(isset($_POST['category'])){
           $model->registerCategory();
           ?>
        <div id="snackbar">Add Category Successfully</div>
<script>
myFunction();
function myFunction() {
var x = document.getElementById("snackbar");
x.className = "show";
setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);}
</script>   
      <?php 
       }
       
   ?>
     
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
    <?php $model->sideMenuHeader();?>
                </div>  
               
                <div class="col-md-9">
                    <div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                         <div class="card-body admin-menu">
                             <p style="font-weight: bold;margin: 0;">CATEGORY</p>
                             </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item borderr" style="border:none;">
                            
                              
                                      
                             <form action="" class="" method="POST" style="width:50%;margin: auto;">
  <label style="font-size: 13px;font-weight: bold;">Enter Category Name</label>
  <div class="form-group">
    <input type="text" class="form-control padd"  name='cat_name' placeholder="Enter Category" >
  </div>
  <label style="font-size: 13px;font-weight: bold;">Enter Category Title</label>
   <div class="form-group">
    <input type="text" class="form-control padd"  name='cat_title' placeholder="Enter Category Title" >
  </div>
  <button type="submit" name="category" class="btn btn-light border border-secondary padd" style="width: 100%;font-weight: bold;">Create Category</button>
</form> 
                            
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
    <script>
  document.getElementsByClassName("list-group-item")[0].classList.add("active");
</script>    
   <?php $model->callfooter();?>     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>   
    </body>
</html>
