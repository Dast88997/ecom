<?php include './model.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Slider</title>
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
           $model->deleteBanner();
          ?>
<div id="snackbar">Delete Banner Successfully</div>
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
                             <p style="font-weight: bold;margin: 0;">MANAGE SLIDER</p>
                                                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item borderr" style="border:none;">
                                    <p style="font-weight: bold;margin: 0;">TOTAL BANNER : <?php print_r(count($model->getAllBanner()));?>  <input type="search" style="outline: none;border: 1px solid lightgray;margin-left: 30px;padding-left: 10px;" placeholder="Search Banner" id="searchCat" onkeyup="searchCategory()"></p>    
                              
                                </li>
                            <li class="list-group-item borderr" style="border:none;">
                            
 <table class="table table-bordered" id="listcategory">
  <thead>
    <tr>
      <th scope="col">SR NO</th>
       <th scope="col">SLIDER IMAGE</th>
        <th scope="col">BANNER DELETE</th>
        </tr>
  </thead>
  <tbody>                         
         <?php
         if($model->getAllBanner())
         {
             $COUNT=0;
             foreach ($model->getAllBanner() as $value) {$COUNT++;
                 ?>
                       <tr>
           <th scope="row"><?php print_r($COUNT);?></th>
          
             
         <td><img src="../upload_img/<?php print_r($value['BANNER_IMAGE']);?>" width="300" height="100" alt="banner"/></td>
         <td>
         <a href="?type=delete&id=<?php print_r($value['ID']);?>">
         <button class="btn btn-danger" style="font-weight: bold;font-size: 10px;"><i class="far fa-trash-alt"></i></button></a>
         </td>
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
document.getElementsByClassName("list-group-item")[10].classList.add("active");
</script>
    </body>
</html>
