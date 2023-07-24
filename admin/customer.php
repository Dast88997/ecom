<?php include './model.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Details</title>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">   
        <link rel="stylesheet" href="css/bootstrap.css">   
       
         <link rel="stylesheet" href="font/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">   
    </head>
    <body>
        <div class="popup">
        <p style="float:right;" onclick="document.getElementsByClassName('popup')[0].style.display='none'">&#10060;</p>
               <form action="" class=""  style="width:80%;margin: auto;">
  <label style="font-size: 13px;font-weight: bold;">Update Customer Status</label>
  <div class="form-group">
      <select class="form-control padd" style="height: 45px;" id="up_cat_status" name='up_cat_status'>
         
           <option value="1">Activate</option>
            <option value="0">Deactivate</option>
       
      </select>
  </div>
  <input type="hidden" name="type" value="update">
   <input type="hidden" name="id" id="updateid">
 
  <label style="font-size: 13px;font-weight: bold;">Update Customer Phone NO</label>
    <div class="form-group">
    <input type="text" class="form-control padd" id="up_cat_name"  name='up_cat_name' >
  </div>
  <button type="submit" name="updatecategory" class="btn btn-light border border-secondary padd" style="width: 100%;font-weight: bold;margin-top: 20px;">Update Category</button>
</form> 
        </div>
        
        
        
        <?php

        if($_SESSION['login_auth']!=1){header('Location:index.php');exit;}
         $model->validateHeader();
         $type= isset($_GET['type'])?$_GET['type']:'';
       if($type=='delete'){
           $model->deleteCategory();
          
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
  else if($type=='update') {$model->updateCategory();?>
    <div id="snackbar">Update Category Successfully</div>
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
                             <p style="font-weight: bold;margin: 0;">MANAGE CUSTOMER</p>
                                                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item borderr" style="border:none;">
                                    <p style="font-weight: bold;margin: 0;">TOTAL CUSTOMER : <?php print_r(count($model->getAllCustomer()));?>  <input type="search" style="outline: none;border: 1px solid lightgray;margin-left: 30px;padding-left: 10px;" placeholder="Search customer mobile no" id="searchCat" onkeyup="searchCategory()"></p>    
                              
                                </li>
                            <li class="list-group-item borderr" style="border:none;">
                            
 <table class="table table-bordered" id="listcategory">
  <thead>
    <tr>
      <th scope="col">SR NO</th>
      <th scope="col">CUSTOMER MOBILE NO</th>
	  <th scope="col">CUSTOMER STATUS</th>
      <th scope="col">CUSTOMER JOIN DATE</th>
	    <th scope="col">CUSTOMER DELETE</th>
	  <th scope="col">CUSTOMER UPDATE</th>
	
      
        </tr>
  </thead>
  <tbody>                         
         <?php
         if($model->getAllCustomer())
         {
             $COUNT=0;
             foreach ($model->getAllCustomer() as $value) {$COUNT++;
                 ?>
                       <tr>
           <th scope="row"><?php print_r($COUNT);?></th>
           <td><?php print_r($value['PHONE']);?></td>
           <td><?php if($value['STATUS']==1)print_r("<a href='?type=active&id=$value[ID]'>Active</a>");
           else
              print_r("<a href='?type=deactivate&id=$value[ID]'>Deactive</a>");
           ?>
           </td>
             
         <td><?php print_r($value['REG_DATE']);?></td>
         <td><a href="?type=delete&id=<?php print_r($value['ID']);?>"><button class="btn btn-danger" style="font-weight: bold;font-size: 10px;"><i class="far fa-trash-alt"></i></button></a></td>
         <td><button class="btn btn-danger" style="font-weight: bold;font-size: 10px;"><i class="far fa-edit"  onclick="updateDetails('<?php print_r($value['ID']);?>','<?php print_r($value['STATUS']);?>','<?php print_r($value['PHONE']);?>')"></i></button></td></tr>          
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
document.getElementsByClassName("list-group-item")[7].classList.add("active");
</script>
    </body>
</html>
