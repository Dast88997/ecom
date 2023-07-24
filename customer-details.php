<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Encode+Sans+Condensed:wght@300&family=Georama:wght@200&family=Oranienbaum&family=Smooch+Sans:wght@300&family=Yanone+Kaffeesatz:wght@300&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="https://admin.cryptoxreme.com/public/favicon.ico">
    <link rel="stylesheet" href="https://admin.cryptoxreme.com/public/assets/css/apps.css?ver=1.1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


</head>

<body class="nk-body npc-cryptlite pg-auth is-dark">
    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-block nk-block-middle nk-auth-body wide-xs">

                <div class="brand-logo text-center mb-2 pb-4">
                    <a href="index.html"> <img src="img/logo/logo2.png" style="width:40%;"></a>
                </div>

                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                      
                        <?php
                            $conn=new mysqli("localhost","root","","emma");
                            $name=$_POST['name'];                           
                            $mobile=$_POST['mobile'];
                            $password=$_POST['password'];
                            $sql="insert into customer_login(name,mobile,password) values('$name','$mobile','$password')";
                            if($conn->query($sql)==TRUE)
                            {?>


                        
                         <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title" style="text-align:center"><b>Registration Completed Successfully<b></h4>
                                <h6 style="text-align:center;text-weight:bold;font-family:arial;">Thank You For Signing Up</h6><br>
                                <a href="index.php"> <button type="button" class="btn btn-lg btn-primary btn-block" style="font-family:arial;font-size:15px;">Return To Main Website</button></a>
                                <div class="nk-block-des mt-2">
                                   
                                </div>
                            </div>
                        </div>
                        <?php
}
else
{?>
                        <div class="section">
                            <p>User Already Registerd<a href="signup.php">Sign up</a> to continue
                            <p>
                        </div>
                        <?php
}
?>
                    </div>
                </div>

                <ul class="nk-socials icon-list justify-center pt-4">

                    <li class="social-item">
                        <a class="social-link" href="@Cryptoxtremesupport" title="Telegram" target="_blank"><i
                                class="fab fa-telegram-plane"></i></a>
                    </li>

                </ul>


            </div>

            <div class="nk-footer nk-auth-footer-full">
                <div class="container wide-lg">

                    <p class="text-soft text-center">Cryptoxwalls &copy; 2022. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://admin.cryptoxreme.com/public/assets/js/bundle.js"></script>
    <script src="https://admin.cryptoxreme.com/public/assets/js/app.js"></script>
</body>
