<?php include './model.php';?>
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
<script>
function validate(){
var email=	document.getElementById('email').value;
var pwd=	document.getElementById('pwd').value;
if(email.includes("'")){
	alert('invalid details');
	window.location.assign("");
	return false;}
else if(pwd.includes("'")){
alert('invalid details');
window.location.assign("");
	return false;
}	
}
</script> 
    </head>
    <body style="background-image:url(image/logs.jpg);background-repeat:no-repeat;background-size:cover;background-position:top center;">
        <?php
        $error_message="";
    if(isset($_SESSION['login_auth'])==1){
         header('Location:manage.php'); 
        exit;
    }else{
        
        if(isset($_POST['submit'])){
     if($model->loginCheck()==1)
     {
     header('Location:index.php');
     exit;
     }
    else{$model->validateHeader();
    $error_message="Incorrect email or password";
    }
        }else{$model->validateHeader();}
    }
    
   ?>
       
        
        
        <section>
            <div class="container" style="margin-top: 60px;">
                <div class="row justify-content-center">
                    <div class="card col-md-4 padding-all-side" style="opacity:0.95;">
                      
                        <h5 style="font-weight: bold;text-align: center;padding-bottom:40px;">ADMIN SIGN IN </h5>
                        <?php
                        if(!empty($error_message)){?>
                        <div class="alert alert-danger" role="alert" style="background-color: #dc3545;color:#fff;">
                             <?php echo $error_message;?>
                          </div>
                       <?php }
                                ?>
                        <form action="" method="POST" onsubmit="return validate()">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" required  class="form-control padd" id="email" name='email' placeholder="info@example.com" >
  </div>
  <div class="form-group">
   <label for="pwd">Password:</label>
   <input type="password" required placeholder="********" name="password" class="form-control padd" id="pwd">
  </div>

                           <button type="submit" name="submit" class="btn btn-light border border-secondary padd" style="width: 100%;font-weight: bold;">SIGN IN</button>
</form> 
                                             
                    </div>
                   
                </div>
            </div>
            
        </section>
        
   <?php $model->callfooter();?>     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>   
    </body>
</html>
