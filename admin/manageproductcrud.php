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
<div id="snackbar">Delete Product Successfully</div>
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
    <?php
$cat_id=strip_tags(isset($_GET['cat_sub_name']))?$_GET['cat_sub_name']:'';
$sub_cat_id=strip_tags(isset($_GET['sub_cat_id']))?$_GET['sub_cat_id']:''; 
if($cat_id!='')
    $product=$model->getProductByCatId($cat_id);
else
    $product=$model->getProduct();
if($sub_cat_id!='')
    $product=$model->getProductBySubCatId($sub_cat_id);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        <?php $model->sideMenuHeader();?>
        </div>  
        <div class="col-md-9">
            <div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                <div class="card-body admin-menu">
                    <p style="font-weight: bold;margin: 0;">MANAGE PRODUCT
                    <span style="float:right;">TOTAL PRODUCT :  <?php print_r(count($product));?></span>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item borderr" style="border:none;">
                        <p style="font-weight: bold;margin: 0;">  <input type="search" style="outline: none;border: 1px solid #000;padding-left: 10px;" placeholder="Search Product" id="searchCat" onkeyup="searchCategory()">
                        <select onchange="window.location.assign('?cat_sub_name='+this.value)" style="margin-left:20px;padding:1.5px;outline: none;border: 1px solid #000;">
                            <option value="">SELECT CATEGORY</option>
                                    <?php
                                    if($model->getCategory())
                                    {foreach ($model->getCategory() as $value) {
                                            if($_GET['cat_sub_name']!=$value['ID']){
                                            ?>
                                    <option value="<?php print_r($value['ID']);?>"><?php print_r($value['CAT_NAME']);?></option>
                                    <?php      
                                        }
                                        else{
                                            ?>
                                    <option value="<?php print_r($value['ID']);?>" selected=""><?php print_r($value['CAT_NAME']);?></option> 
                                        <?php
                                        }
                                        }
                                    }
                                    ?>
                        </select>
<select style="outline: none;border: 1px solid #000;padding:1.5px;margin-left:20px;" onchange="window.location.assign('?sub_cat_id='+this.value)">
    <option value="">SELECT SUB CATEGORY</option>
         <?php
         if($model->getSubManageCategory())
         {
             foreach ($model->getSubManageCategory() as $value) {
                if($sub_cat_id!=$value['ID']){
                 ?>
           <option value="<?php print_r($value['ID']);?>"><?php print_r($value['SUB_CAT_NAME']);?></option>
           <?php 
                }
                else{
                    ?>
                      <option value="<?php print_r($value['ID']);?>" selected=""><?php print_r($value['SUB_CAT_NAME']);?></option>
<?php
                }     
             }  
         }
         ?>
      </select>

       <a href="manageproductcrud.php"><button style="margin-left:20px;"><b>GET ALL PRODUCT</b></button></a>
                                    
                                    </p>    
                              
                                </li>
                            <li class="list-group-item borderr" style="border:none;">
                            
 <table class="table table-bordered" id="listcategory">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">PRODUCT NAME</th>
      <th scope="col">PRODUCT TITLE</th>
       <th scope="col">STATUS</th>
       <th scope="col"> CREATE DATE</th>
        <th scope="col">P. DELETE</th>
          <th scope="col">P. UPDATE</th>
           <th scope="col">VIEW ALL</th>
        </tr>
  </thead>
  <tbody>                         
         <?php
         if($product)
         {
             $COUNT=0;
             foreach ($product as $value) {$COUNT++;
                 ?>
                       <tr>
           <th scope="row"><?php print_r($COUNT);?></th>
           <td><?php print_r($value['PRODUCT_NAME']);?></td>
           <td><?php print_r($value['PRODUCT_TITLE']);?></td>
           <td><?php if($value['STATUS']==1)print_r("<a href='?type=active&id=$value[ID]'>Active</a>");
           else
              print_r("<a href='?type=deactivate&id=$value[ID]'>Deactive</a>");
           ?>
           </td>
             
         <td><?php print_r($value['DATE']);?></td>
         <td><a href="?type=delete&id=<?php print_r($value['ID']);?>"><button class="btn btn-danger" style="font-weight: bold;font-size: 10px;"><i class="far fa-trash-alt"></i></button></a></td>
         <td><a href="productupdate.php?id=<?php print_r($value['ID']);?>"><button class="btn btn-danger" style="font-weight: bold;font-size: 10px;"><i class="far fa-edit"></i></button></a></td>
         <td><a href="productview.php?id=<?php print_r($value['ID']);?>">View</a></td>
                       </tr>          
 
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
  <script>
document.getElementsByClassName("list-group-item")[5].classList.add("active");
</script> 
    </body>
</html>
