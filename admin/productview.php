<?php include './model.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Category</title>
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
         $type= isset($_GET['type'])?$_GET['type']:'';
       if($type=='delete'){
           $model->deleteProduct();
           
          
           ?>
<div id="snackbar">Delete Category Successfully</div>
<script>
myFunction();
function myFunction() {
var x = document.getElementById("snackbar");
x.className = "show";
x.style.backgroundColor="green";
x.fontWeight="bold";
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
                             <p style="font-weight: bold;margin: 0;"><a href="manageproductcrud.php"><i class="fas fa-arrow-left"></i></a> &nbsp;&nbsp;VIEW PRODUCT</p>
                                                        </div>
                            <ul class="list-group list-group-flush">
                             
                            <li class="list-group-item borderr" style="border:none;">
                            
 <table class="table table-bordered" id="listcategory">
  <tbody>                         
         <?php
         if($model->getProductByID())
         {
             $COUNT=0;
             foreach ($model->getProductByID() as $value) {$COUNT++;
                 ?>
      <tr><th scope="col">PRODUCT NAME</th><td><?php print_r($value['PRODUCT_NAME']);?></td></tr> 
      <tr> <th scope="col">PRODUCT TITLE</th><td><?php print_r($value['PRODUCT_TITLE']);?></td></tr>
       <tr> <th scope="col">PRODUCT CATEGORY ID</th><td><?php print_r($value['CAT_ID']);?></td></tr>
        <tr> <th scope="col">PRODUCT SUB CATEGORY ID</th><td><?php print_r($value['SUB_CAT_ID']);?></td></tr>
         <tr> <th scope="col">PRODUCT DESCRIPTION</th><td><?php print_r($value['PRODUCT_DESC']);?></td></tr>
          <tr> <th scope="col">PRODUCT BRAND NAME</th><td><?php print_r($value['PRODUCT_BRAND_NAME']);?></td></tr>
           <tr> <th scope="col">PRODUCT PRICE</th><td><?php print_r($value['PRICE']);?></td></tr>
  <tr> <th scope="col">PRODUCT UNIT</th><td><?php print_r($value['UNIT']);?></td></tr>
   <tr> <th scope="col">PRODUCT QUANTITY</th><td><?php print_r($value['QUANTITY']);?></td></tr>
    <tr> <th scope="col">PRODUCT DATE</th><td><?php print_r($value['DATE']);?></td></tr>
     <tr> <th scope="col">PRODUCT STATUS</th><td><?php print_r($value['STATUS']);?></td></tr>
      <tr> <th scope="col">PRODUCT OFFER</th><td><?php print_r($value['PRODUCT_OFFER']);?>%</td></tr>
       <tr> <th scope="col">PRODUCT RATING</th><td><?php print_r($value['RATING']);?></td></tr>
       <tr> <th scope="col">PRODUCT IMAGE 1</th><td><img src="../upload_img/<?php print_r($value['IMG1']);?>" width="100" height="100" alt="img1"/></td></tr>
 <tr> <th scope="col">PRODUCT IMAGE 2</th><td><img src="../upload_img/<?php print_r($value['IMG2']);?>" width="100" height="100" alt="img2"/></td></tr>
 <tr> <th scope="col">PRODUCT IMAGE 3</th><td><img src="../upload_img/<?php print_r($value['IMG3']);?>" width="100" height="100" alt="img3"/></td></tr>
 <tr> <th scope="col">PRODUCT IMAGE 4</th><td><img src="../upload_img/<?php print_r($value['IMG4']);?>" width="100" height="100" alt="img4"/></td></tr>
   <tr> <th scope="col">PRODUCT IMAGE 5</th><td><img src="../upload_img/<?php print_r($value['IMG5']);?>" width="100" height="100" alt="img5"/></td></tr>
         

    <?php      
             }  
         }
         ?></tbody>
</table>          
                            </li>
                            </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
        
   <?php $model->callfooter();?>     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
  <script src="js/main.js"></script>  
    </body>
</html>
