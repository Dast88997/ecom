<?php include './model.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
       
       
   ?>
     
        
      
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 sticky-top" style="position:relative;">
    <?php $model->sideMenuHeader();?>
                </div>  
               
                <div class="col-md-9">
                    <div class="filter" style="width: 100%; box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);">
                         <div class="card-body admin-menu">
                             <p style="font-weight: bold;margin: 0;">DASHBOARD</p>
                             </div>
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item borderr" style="border:none;">
                                <div class="card-columns">
                    <div class="card">
                <div class="card-body text-center">
                     <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
                     <p style="color: #000;">Delivery Success</p>
                     <p><b style="font-size: 15px;color: #000;">97%</b></p>
                <div class="progress" style="height: 5px;">
         
                 <div class="progress-bar progress-bar-striped  progress-bar-animated animate"></div>
                </div>
             </div>
            </div>
                    
                    
            <div class="card">
            <div class="card-body text-center">
            <i class="fas fa-user" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
          <p style="color: #000;">Customer Satisfaction</p>
          <p><b style="font-size: 15px;color: #000;">100%</b></p>
          <div class="progress" style="height: 5px;">
    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated animate1"></div>
  </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
          <p style="color: #000;">Business Performance</p>
          <p><b style="font-size: 15px;color: #000;">65.5%</b></p>
          <div class="progress" style="height: 5px;">
    <div class="progress-bar  bg-success progress-bar-striped progress-bar-animated animate3"></div>
  </div>
      </div>
    </div>
    
  </div>
                                </li>
                                
                                
                                    <li class="list-group-item borderr" style="border:none;">
                                <div class="card-columns">
                    <div class="card">
                <div class="card-body text-center">
                     <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
                     <p style="color: #000;">Total Work</p>
                     <p><b style="font-size: 15px;color: #000;">250</b></p>
                <div class="progress" style="height: 5px;">
         
                 <div class="progress-bar progress-bar-striped  progress-bar-animated animate"></div>
                </div>
             </div>
            </div>
                    
                    
            <div class="card">
            <div class="card-body text-center">
            <i class="fas fa-user" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
          <p style="color: #000;">Business Partner</p>
          <p><b style="font-size: 15px;color: #000;">INR 100000</b></p>
          <div class="progress" style="height: 5px;">
    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated animate1"></div>
  </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
          <p style="color: #000;">Business Performance</p>
          <p><b style="font-size: 15px;color: #000;">65.5%</b></p>
          <div class="progress" style="height: 5px;">
    <div class="progress-bar  bg-success progress-bar-striped progress-bar-animated animate3"></div>
  </div>
      </div>
    </div>
    
  </div>
                                </li>
                                
                                    <li class="list-group-item borderr" style="border:none;">
                                <div class="card-columns">
                    <div class="card">
                <div class="card-body text-center">
                     <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
                     <p style="color: #000;">Total Work</p>
                     <p><b style="font-size: 15px;color: #000;">250</b></p>
                <div class="progress" style="height: 5px;">
         
                 <div class="progress-bar progress-bar-striped  progress-bar-animated animate"></div>
                </div>
             </div>
            </div>
                    
                    
            <div class="card">
            <div class="card-body text-center">
            <i class="fas fa-user" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
          <p style="color: #000;">Business Partner</p>
          <p><b style="font-size: 15px;color: #000;">$20000.35</b></p>
          <div class="progress" style="height: 5px;">
    <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated animate1"></div>
  </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 25px;color: #000;"></i><br>
          <p style="color: #000;">Business Performance</p>
          <p><b style="font-size: 15px;color: #000;">65.5%</b></p>
          <div class="progress" style="height: 5px;">
    <div class="progress-bar  bg-success progress-bar-striped progress-bar-animated animate3"></div>
  </div>
      </div>
    </div>
    
  </div>
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
    </body>
</html>
