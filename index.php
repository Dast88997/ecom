<?php include 'model-api.php';
$error_message = "0";

if(isset($_POST["login"])){

    if(loginCheck())
    {
        header('Location:index.php');
    }

        else{
            $error_message = "1";
        }
    
}

$type=isset($_GET['type'])?$_GET['type']:'';
if($type=='logout'){
   session_destroy();
   header('Location:index.php');
}
?>
<?php


if($type=='cart')
{
	$amount=$_GET['price'];
	$quantity=$_GET['quantity'];
	$product_id=$_GET['product_id'];
	$product_name=$_GET['product_name'];
	$product_image=$_GET['product_image'];
	$SQL="INSERT INTO cart(PRODUCT_ID,QUANTITY,AMOUNT,P_NAME,P_IMAGE) 
	VALUES($product_id,$quantity,$amount,'$product_name','$product_image')";	

if($conn->query($SQL))
{
	
}
}
$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
$SQL="SELECT * FROM cart WHERE CUSTOMER_ID=$user_id";
$row_cart=$conn->query($SQL);
?>


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


</head>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
(function() {
    var options = {
        whatsapp: "  +91 9910878709 ", // WhatsApp number
        call_to_action: "Message us", // Call to action
        position: "left", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol,
        host = "whatshelp.io",
        url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /WhatsHelp.io widget -->

<style>
.popup {
    width: 60%;
    height: auto;
    padding: 20px;
    position: center;
    background-color: #ddd;
    z-index: 2222;

    border-radius: 5px;
    box-shadow: 0px 1px 1px #ddd;
    border-radius: 5px;
    padding-bottom: 40px;
    top: 10%;
    left: 20%;
    display: none;
    animation-name: m;
    animation-duration: 1s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;

}

.popup input {
    width: 100%;
    margin-top: 30px;
    padding: 10px;
}

@keyframes m {
    from {
        top: 10%;
    }

    to {
        top: 10%;
    }
}

td {
    padding: 10px;
}


ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #fff;
}

ul.breadcrumb li {
    display: inline;
    font-size: 18px;
}

ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}

ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
}

ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
}

.inr-sign::before {
    content: "\20B9";
}
</style>

<style>
.anim1 {
    position: relative;
    animation-name: anim1;
    animation-duration: 2s;
    animation-fill-mode: forwards;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;

}

.anim2 {
    position: relative;
    animation-name: anim2;
    animation-duration: 2s;
    animation-iteration-count: 1;
    animation-fill-mode: forwards;
    animation-timing-function: ease-in;

}

@keyframes anim1 {
    from {
        left: -100px;
        opacity: 0
    }

    to {
        left: 0px;
        opacity: 1
    }
}

@keyframes anim2 {
    from {
        right: -100px;
        opacity: 0;
    }

    to {
        right: 0px;
        opacity: 1
    }
}
</style>


<style>
.slider--container {
    position: relative;
    /* "relative", so that h1 and images can be set absolutely */
    height: 40vh;
    /* Adjust the height to your needs here */
    width: 40vw;
    /* Adjust the width to your needs here */
    margin: 0 auto;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 0 .1rem .125rem rgba(0, 0, 0, 0.25);
}

.slider--heading {
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 1rem;
    z-index: 99;
    font: 30 1.25rem/1.25 'Georama', sans-serif;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.5);
    color: rgba(0, 0, 0, 0.5);
    transform: translate3d(-50%, -50%, 0);
}

.slider--heading h6 {
    font: 30 1.25rem/1.25'Georama', sans-serif;
    text-transform: uppercase;
    color: rgba(0, 0, 0, .5);
}

/* Responsive styles for the heading */
/* ===== == = === 30em (480px) === = == ===== */
@media only screen and (min-width : 10em) {
    .slider--heading h6 {
        font-size: 1.5rem;
    }
}

/* ===== == = === 48em (768px) === = == ===== */
@media only screen and (min-width : 48em) {
    .slider--heading h6 {
        font-size: 1.75rem;
    }
}

.btn {
    margin: 1rem;
    padding: .1rem;
    font-size: 20px;
    box-shadow: text-decoration: none;
    }
 
/* Responsive styles for the button */
/* ===== == = === 30em (480px) === = == ===== */
@media only screen and (min-width : 30em) {
    .btn {
        font-size: 1rem;
    }
}

/* ===== == = === 48em (768px) === = == ===== */
@media only screen and (min-width : 20em) {
    .btn {
        font-size: 1.25rem;
    }
}

.btn:hover {
    text-decoration: none;
    color: #999;
}

.slider--image {
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    object-fit: cover;
    animation: 45s ease-in-out infinite;

}

/* Name of animations and selection of images */
.slider--image:nth-of-type(1) {
    animation-name: slide-01;
}

.slider--image:nth-of-type(2) {
    animation-name: slide-02;
}

.slider--image:nth-of-type(3) {
    animation-name: slide-03;
}

.slider--image:nth-of-type(4) {
    animation-name: slide-04;
}

.slider--image:nth-of-type(5) {
    animation-name: slide-05;
}

/* Images are overlaid and visible or invisible due to different transparency */
/* Moving the images with transform: scale & translate */
/* Styles for webkit browsers */
@keyframes slide-01 {
    0% {
        opacity: 1;
        transform: scale(1.4) translate(0, 0);
    }

    16% {
        opacity: 1;
        transform: scale(1.2) translate(-20px, -10px);
    }

    33% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    50% {
        opacity: 0;
    }

    67% {
        opacity: 0;
    }

    84% {
        opacity: 0;
    }

    100% {
        opacity: 1;
        transform: scale(1.4) translate(0, 0);
    }
}

@keyframes slide-02 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
        transform: scale(1.2) translate(-20px, -10px);
    }

    33% {
        opacity: 1;
        transform: scale(1.4) translate(0, 0);
    }

    50% {
        opacity: 1;
        transform: scale(1.2) translate(-20px, 10px);
    }

    67% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    84% {
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

@keyframes slide-03 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
    }

    33% {
        opacity: 0;
    }

    50% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    67% {
        opacity: 1;
        transform: scale(1.4) translate(-20px, 10px);
    }

    84% {
        opacity: 1;
        transform: scale(1.2) translate(20px, -10px);
    }

    100% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }
}

@keyframes slide-04 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
    }

    33% {
        opacity: 0;
    }

    50% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    67% {
        opacity: 1;
        transform: scale(1.4) translate(-20px, 10px);
    }

    84% {
        opacity: 1;
        transform: scale(1.2) translate(20px, -10px);
    }

    100% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }
}

@keyframes slide-05 {
    0% {
        opacity: 0;
    }

    16% {
        opacity: 0;
    }

    33% {
        opacity: 0;
    }

    50% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }

    67% {
        opacity: 1;
        transform: scale(1.4) translate(-20px, 10px);
    }

    84% {
        opacity: 1;
        transform: scale(1.2) translate(20px, -10px);
    }

    100% {
        opacity: 0;
        transform: scale(1.4) translate(0, 0);
    }
}




.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 2222;
    top: 0;
    display: none;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0px;
    right: 25px;
    margin-left: 50px;
}

@media screen and (max-height: 576px) {
    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
}

@media (min-width: 576px) {
    .mobile {
        display: none;
    }

    .sidenav {
        display: none;
    }

    .desktop {
        display: block;
    }
}

@media (max-width: 576px) {
    .mobile {
        display: block;
    }

    .desktop {
        display: none;
    }

    .sidenav {
        display: block;
    }
}
</style>

<style>
.quick {

    background-color: #000;
    color: #fff;
    padding: 5px;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    opacity: 0.8;
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-size: 20px;
}

.img_hover:hover .quick {
    display: block;

}
</style>


<body>


    <?php
$SQL="SELECT * FROM cart";
$row_cart=$conn->query($SQL);
@$cart_items = 0;
if($row_cart->num_rows>0){
while($data = $row_cart->fetch_assoc()){
$cart_items+=$data["QUANTITY"];
}
}
?>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <!-- <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> -->

        <ul class="nav justify-content-left">
            <?php
$SQL="SELECT * FROM category WHERE CAT_STATUS=1";
$ROW=$conn->query($SQL);

if($ROW->num_rows>0)
{
while($data=$ROW->fetch_assoc())
{
?>
            <li class="nav-item dropdown">
                <a class="nav-link active menu dropdown-toggle" data-toggle="dropdown" href="index.php"><span
                        style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:white;"><?php echo $data['CAT_NAME'];?></span></a>

                </a>
                <?php
        $id=$data['ID'];
        $SQL="SELECT * FROM subcategory WHERE CAT_ID=$id AND SUB_CAT_STATUS=1";
            $SROW=$conn->query($SQL);
                if($SROW->num_rows>0)
                {
                    print_r("<div class='dropdown-menu'>");
                    while($sdata=$SROW->fetch_assoc())
                    {
                        ?>


                <a class="dropdown-item" style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"
                    href="product_view.php?s_id=<?=$sdata['ID']?>&type_name=<?=$data['CAT_NAME'];?>"><?php echo $sdata['SUB_CAT_NAME'];?></a>

                <?php
                    }
                    print_r("</div>");
                }
                ?>


            </li>
            <?php
                    }
                }
                ?>




        </ul>
    </div>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    function show() {

        var de = document.getElementById("show");
        de.style.display = "block";
        //de.classList.add('move');
    }

    function hide() {
        var de = document.getElementById("show");
        de.style.display = "none";

    }
    </script>

    <div class="popup" id="show">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background-color:#1a1aff;border-radius:20px;">
                    <p
                        style="text-align:left;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:40px;padding-top:50px;color:#ffffff;">
                        <b>Login</b>
                    </p>
                    <p
                        style="text-align:left;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:30px;color:#ffffff;">
                        Get access to your Orders, Wishlist and Recommendations.</p>

                    <p style="text-align:center;padding-top:50px;"> <img
                            src="Image/How-Automation-will-help-you-drive-more-eCommerce-Traffic.gif" style="width:50%">
                    </p>
                </div>
                <div class="col-md-6">

                    <span style="font-size:30px;float:right;cursor:pointer;" onclick="hide()">&times;</span>


                    <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:40px;text-align:center;">Login In
                        Below</p>
                    <?php
                    if($error_message == "1"){
                        ?>
                    <p>incorrect username and password</p>
                    <script>
                    setTimeout(() => {
                        console.log("hello")
                        show();
                    }, 500);
                    </script>
                    <?php
                    }
                    ?>
                    <form action="" method="POST">
                        <input type="mobile" name="mobile" id="User" Placeholder="Mobile Number"
                            style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;border:1px #ddd;border-radius:15px;"><br>

                        <input type="text" name="password" id="Password" Placeholder="Password"
                            style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;border:1px #ddd;border-radius:15px;"><br><br>
                        <p style="text-align:center"> <button type="submit" name="login" class="btn btn-primary"
                                style="color:#fff;width:200px;height:40px;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;">Submit
                                Now</button></p>
                    </form><br>
                    <a href="forget-password.php" style="text-decoration:none"><p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-align:center;">Forgot
                        Password?</p></a>
                 <a href="register.php" style="text-decoration:none;">
                        <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;text-align:center;">
                            <b>Register
                                Now<b>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php
    if(@$_GET['stype'] == "login"){
        ?>
    <script>
    setTimeout(() => {
        console.log("hello")
        show();
    }, 500);
    </script>
    <?php
    }
    ?>
    <div style="background-color:#000066">
        <div class="container desktop">
            <div style="height:10px"></div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-pills justify-content-left">
                        <li class="nav-item">
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffff00;">&nbsp
                                &nbsp
                                &nbsp &nbsp
                                Lagos</span><br>
                            <span style="font-size:20px;font-family:kalinga;color:#ffffff;">
                                <p id='game' style="font-family: 'Smooch Sans', sans-serif;"></p>
                            </span>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffff00;">&nbsp
                                &nbsp
                                &nbsp &nbsp
                                Johannesburg</span><br>
                            <span style="font-size:20px;font-family:kalinga;color:#ffffff;">
                                <p id='peace' style="font-family: 'Smooch Sans', sans-serif;"></p>
                            </span>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffff00;">&nbsp
                                &nbsp
                                &nbsp &nbsp New
                                Delhi
                            </span><br>
                            <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#ffffff;">
                                <p id='rust' style="font-family: 'Smooch Sans', sans-serif;"></p>
                            </span>
                        </li>
                    </ul>
                    <script>
                    var africaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Africa/Lagos"
                    });
                    africaTime = new Date(africaTime);
                    console.log('Africa time: ' + africaTime.toLocaleString())
                    document.getElementById('game').innerHTML = africaTime.toLocaleString();

                    var africaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Africa/Johannesburg"
                    });
                    africaTime = new Date(africaTime);
                    console.log('Africa time: ' + africaTime.toLocaleString())
                    document.getElementById('peace').innerHTML = africaTime.toLocaleString();

                    var indiaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Asia/Kolkata"
                    });
                    indiaTime = new Date(indiaTime);
                    console.log('India time: ' + indiaTime.toLocaleString())
                    document.getElementById('rust').innerHTML = indiaTime.toLocaleString();

                    var aestTime = new Date().toLocaleString("en-US", {
                        timeZone: "Europe/Istanbul"
                    });
                    aestTime = new Date(aestTime);
                    console.log('AEST time: ' + aestTime.toLocaleString())
                    document.getElementById('time').innerHTML = aestTime.toLocaleString();

                    var europeTime = new Date().toLocaleString("en-US", {
                        timeZone: "Europe/London"
                    });
                    europeTime = new Date(europeTime);
                    console.log('Europe time: ' + europeTime.toLocaleString())
                    document.getElementById('rest').innerHTML = europeTime.toLocaleString();

                    var asiaTime = new Date().toLocaleString("en-US", {
                        timeZone: "Asia/Shanghai"
                    });
                    asiaTime = new Date(asiaTime);
                    console.log('Asia time: ' + asiaTime.toLocaleString());
                    </script>
                </div>
                <div class="col-md-6 ">
                </div>
            </div>
        </div>
    </div>

    <div style="background-color:#004d4d" class="desktop">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Links -->
                    <ul class="nav nav-pills">
                        <li class="nav-item" style="padding-top:10px;">
                            <img src="Image/emma-logo.png" style="width:50px;height:50px;">
                        </li>
                        <li class="nav-item" style="padding-top:10px;">
                            &nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;color:#b3b3ff;font-size:35px;">Emmanuel
                                International Private Ltd</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-pills justify-content-left">
                        <li class="nav-item">
                            <a href="medical.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Medical Hospitality
                                </p>
                            </a>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="cargo.php" style="text-decoration:none">
                                <p
                                    style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Get A Quote Here</p>
                            </a>
                        </li> &nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="track.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Track Your Goods
                                </p>
                            </a>
                        </li>&nbsp &nbsp &nbsp
                        <li class="nav-item">
                            <a href="contact.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Contact Us
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section style="background-color:#000;" class="mobile sticky-top">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <img src="./Image/emma-logo.png" width="50" height="50">
                </div>
                <div class="col-3">
                    <button type="button" class="btn  position-relative">
                        <i class="fas fa-cart-arrow-down" style="color:#fff;"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <a href="cart.php" style="color:#fff;"><?=@$cart_items?></a>
                            <span class="visually-hidden">cart</span>
                        </span>
                    </button>
                </div>
                <div class="col-3">
                    <i class="fas fa-user-circle" style="font-size:30px;color:#fff;"></i>
                </div>
                <div class="col-2 text-right">
                    <i class="fas fa-bars" style="font-size:30px;color:#fff;" onclick="openNav()"></i>
                </div>
            </div>
        </div>
    </section>

    <div class="sect sticky-top desktop" style="background-color:#1f2e2e">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav justify-content-left">


                        <?php
$SQL="SELECT * FROM category WHERE CAT_STATUS=1";
$ROW=$conn->query($SQL);

if($ROW->num_rows>0)
{
	while($data=$ROW->fetch_assoc())
	{
		?>
                        <li class="nav-item dropdown" style="">
                            <a class="nav-link active menu dropdown-toggle" data-toggle="dropdown"
                                href="index.php"><span
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:white;"><?php echo $data['CAT_NAME'];?></span></a>

                            </a>
                            <?php
                                $id=$data['ID'];
                                $SQL="SELECT * FROM subcategory WHERE CAT_ID=$id AND SUB_CAT_STATUS=1";
                                    $SROW=$conn->query($SQL);
                                        if($SROW->num_rows>0)
                                        {
                                            print_r("<div class='dropdown-menu' style='width:500px;position:absolute !important;left:0;'>");
                                           
                                            $i = 1;
                                            while($sdata=$SROW->fetch_assoc())
                                            {
                                                
                                                ?>


                            <a class="btn btn-secondary"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;display:inline-block;width:37%;"
                                href="product_view.php?s_id=<?=$sdata['ID']?>&type_name=<?=$data['CAT_NAME'];?>"><?php echo $sdata['SUB_CAT_NAME'];?>
                            </a>

                            <?php
                                            }
                                          
                                            print_r("</div>");
                                        }
                                        ?>


                        </li>
                        <?php
                                            }
                                        }
                                        ?>

                </div>
                <div class="col-md-4">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item">

                            <?php
                            if(isset($_SESSION["user_id"])){
                                ?>
                                
                            <p
                                style="color:white;font-size:20px;text-align:right;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                <?= $_SESSION["name"]?>
                                
                                 <a href="order-details.php" style="text-decoration:none;color:#fff;margin-left:30px;"><span> Your Orders</span> </a>

                                <a href="index.php?type=logout"
                                    style="text-decoration:none;color:#fff;margin-left:30px;">Logout</a>

                            </p>
                            <?php
                            }
                            else{
                                ?>
                            <a href="#" onclick="show()" style="text-decoration:none">
                                <p
                                    style="color:white;font-size:20px;text-align:right;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    Customer
                                    Login
                                </p>
                                <?php

                            }
                            ?>



                            </a>
                        </li> &nbsp &nbsp &nbsp
                        <li class="nav-item">

                            <?php
$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
$SQL="SELECT * FROM cart WHERE CUSTOMER_ID=$user_id";
$row_cart=$conn->query($SQL);
@$cart_items = 0;
if($row_cart->num_rows>0){
  while($data = $row_cart->fetch_assoc()){
    $cart_items+=$data["QUANTITY"];
  }
}
?>
                            <a href="cart.php" style="text-decoration:none">
                                <p
                                    style="font-family:calibri;font-size:20px;color:white;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    <i class="fas fa-shopping-cart"> </i>
                                    <?=@$cart_items?>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   


    <div id="slidercaption" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slidercaption" data-slide-to="0" class="active"></li>
            <li data-target="#slidercaption" data-slide-to="1"></li>
            <li data-target="#slidercaption" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="Image/Banner_1_1512x.jpg" style="width:100%; height:600px;"
                    alt="Slide1">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="Image/Shai_Nazrana_1512x.jpg" style="width:100%; height:600px;"
                    alt="Slide2">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="Image/Shai_rhytm_1512x.jpg" style="width:100%; height:600px;"
                    alt="Slide3">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slidercaption" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slidercaption" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <h2 class="w3-center"
                        style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Who We Are</h2>

                    <div class="w3-content w3-section" style="max-width:500px">
                        <img class="mySlides" src="Image/Beautiful-Sarees-Lehangas-11.jpg" style="width:100%">
                        <img class="mySlides" src="Image/c42960b5f3fc2eb21b977927c4dc3dd1.jpg" style="width:100%">
                        <img class="mySlides" src="Image/saree1.jpg" style="width:100%">
                        <img class="mySlides" src="Image/saree2.jpg" style="width:100%">
                        <img class="mySlides" src="Image/saree3.jpg" style="width:100%">
                        <img class="mySlides" src="Image/saree4.jpg" style="width:100%">
                        <img class="mySlides" src="Image/saree5.jpg" style="width:100%">
                        <img class="mySlides" src="Image/saree6.jpg" style="width:100%">

                    </div>

                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) {
                            myIndex = 1
                        }
                        x[myIndex - 1].style.display = "block";
                        setTimeout(carousel, 2000); // Change image every 2 seconds
                    }
                    </script>
                    <div class="bg-danger text-dark text-center p-4">
                        <h3 class="m-0" style="font-family: 'Smooch Sans', sans-serif;font-size:35px;color:#ffffff;">10+
                            Years Experience</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h1 class="text-primary  font-weight-bold"
                        style="font-family: 'Georama', sans-serif;font-size:40px;">About Us</h1>
                    <h1 class="mb-4" style="font-family: 'Georama', sans-serif;font-size:30px;">Trusted & Faster
                        Logistic Service Provider</h1>
                    <p class="mb-4" style="font-family: 'Oranienbaum', serif;font-size:30px;">We are
                        an International Group of Ventures who are part of Emmanuel Enterprises. Spanning from Graments,
                        fashions, spareparts, medical accesories, tourism, sea shipment, courier, air services and
                        hospital management. We are a leading company with wider ideology in the world of conglomerates.
                    </p>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container " style="margin-top:60px">
        <p style="font-size:50px;font-family: 'Yanone Kaffeesatz', sans-serif;text-align:center;">Medical
            Hospitality And Equipments</p>
        <div class="row">

            <div class="col-md-6" id="a1">
                <div class="slider--container">
                    <div class="slider--heading">
                        <p style="font-size:25px;text-align:center;font-family: 'Georama', sans-serif;">Our Medical
                            Hospitality And Equipments Are World
                            Class And A State Of Art.</p>
                    </div>
                    <img class="slider--image" src="Image/patient-rooms.jpg" style="width:550px;height:300px;"
                        alt="winter-01" />
                    <img class="slider--image" src="Image/Apollo_Hospital_Navi_Mumbai_3.jpg"
                        style="width:550px;height:300px;" alt="winter-02" />
                    <img class="slider--image" src="Image/doctors-hospital.jpg" style="width:500px;height:300px;"
                        alt="winter-03" />
                    <img class="slider--image" src="Image/MG_9480.jpg" style="width:500px;height:300px;"
                        alt="winter-04" />
                    <img class="slider--image" src="Image/JS110577902.jpg" style="width:500px;height:300px;"
                        alt="winter-05" />

                    <p style="font-size:35px;color:#ffffff;font-family: 'EB Garamond', serif;"> Our products ranges from
                        Ladies dresses to jewelries. We also
                        provide
                        medical hospitality and likewise provide medical equipments as well. Our cargo based system is a
                        unique
                        information base that ensures safety and security our our customers goods during exportation.
                        Security is
                        our guarantee.</p>
                </div>
            </div>
            <div class="col-md-6" id="a2">
                <h1 class="text-primary  font-weight-bold" style="font-family: 'Georama', sans-serif;font-size:40px;">
                    About Our Medical Hospitality</h1>
                <p class="mb-4" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;">Our responsible for
                    regular
                    patient satisfaction rounds as part of their role in your organization. During these regular patient
                    satisfaction rounds it is our goal to become advocates for the departments that we manager as well
                    as the personnel, to ensure that they are providing the greatest impact on patient satisfaction at
                    your facility.
                </p>
            </div>
        </div>
    </div>
    </div>

    <script>
    window.onscroll = function() {
        myFunction()
    };

    // Get the navbar
    var a1 = document.getElementById("a1");
    var a2 = document.getElementById("a2");;

    let a = document.querySelectorAll(".a");
    let c = document.querySelectorAll(".c");

    (function() {
        a1.classList.add("anim1")
        a2.classList.add("anim2")
    })();
    // Get the offset position of the navbar
    //var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {


        if (document.documentElement.scrollTop > 300) {
            //  console.log(document.documentElement.scrollTop)
            a1.classList.add("anim1")
            a2.classList.add("anim2")
        }
    }
    </script>



    <div class="container-fluid pt-5" style="margin-top:60px">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4">Our Latest Trends</h1>
            </div>
            <div class="row pb-3">
                <?php
                    $SQL="SELECT P.*,M.IMG1,RATING ,P.ID as I FROM product as P INNER JOIN  product_image as M ON M.PRODUCT_ID = P.ID WHERE P.CAT_ID=14  ORDER BY rand()  LIMIT 4";
                    $ROW=$conn->query($SQL);

                    if($ROW->num_rows>0)
                    {
                        while($data=$ROW->fetch_assoc())
                        {
                            ?>
                <div class="col-lg-3 col-md-12 text-center mb-5 d-flex">
                    <div class="card">
                        <a href="view.php?pid=<?=$data['I'];?>">
                            <div class="img_hover">
                                <img class="card-img-top img-fluid" src="<?="./upload_img/".$data['IMG1']?>" alt="image"
                                    style="width:60%" /><a href="view.php?pid=<?=$data['I'];?>"
                                    style="text-decoration:none;" class="quick">QUICK VIEW
                            </div>
                        </a>
                        <div class="card-body">
                            <h3 class="card-title"
                                style="color:green;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;">
                                <?=$data['PRODUCT_NAME']?></h3>
                            <p
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-align:center;">
                                <b>Ratings:</b>
                                <?php
	                          for($x=0;$x<$data['RATING'];$x++)
							  echo "<b style='color:orange;'>&star;</b>"
						  ?>
                            </p>
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                            }

                        }

                    ?>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row pb-3">
                <?php
                    $SQL="SELECT P.*,M.IMG1,RATING FROM product as P INNER JOIN  product_image as M ON M.PRODUCT_ID = P.ID WHERE P.CAT_ID=14  ORDER BY rand() LIMIT 4";
                    $ROW=$conn->query($SQL);

                    if($ROW->num_rows>0)
                    {
                        while($data=$ROW->fetch_assoc())
                        {
                            ?>
                <div class="col-lg-3 col-md-12 text-center mb-5 d-flex">
                    <div class="card">
                        <a href="view.php?pid=<?=$data['ID'];?>">
                            <div class="img_hover">
                                <img class="card-img-top img-fluid" src="<?="./upload_img/".$data['IMG1']?>" alt="image"
                                    style="width:60%" /><a href="view.php?pid=<?=$data['ID'];?>"
                                    style="text-decoration:none;" class="quick">QUICK VIEW
                            </div>
                        </a>
                        <div class="card-body">
                            <h3 class="card-title"
                                style="color:green;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;">
                                <?=$data['PRODUCT_NAME']?></h3>
                            <p
                                style="card-text;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-align:center;">
                                <b>Ratings:</b>
                                <?php
	                          for($x=0;$x<$data['RATING'];$x++)
							  echo "<b style='color:orange;'>&star;</b>"
						  ?>
                            </p>
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                            }

                        }

                    ?>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>315, 2nd Floor, Daroga Market,<br> &nbsp &nbsp
                            Main
                            Burari
                            Chowk, Delhi -84, India.</p>
                        <p><i class="fa fa-phone mr-2"></i>+91 9910878709 </p>
                        <hr>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>5 Pan Road, Unit 3 Nicollete Place, <br> &nbsp
                            &nbsp
                            La Rochelle, Johannesburg 2190,
                            <br> &nbsp &nbsp Republic of South Africa.
                        </p>
                        <p><i class="fa fa-phone mr-2"></i>+27 614658024</p>
                        <p><i class="fa fa-phone mr-2"></i>+27 679565871</p>
                        <hr>
                        <p><i class="fa fa-map-marker-alt mr-2"></i> A 43 Nnadi Line, <br>&nbsp &nbsp Umuaka
                            Community
                            Park Shopping Plaza,<br> &nbsp &nbsp Afor Umuaka, Njaba, Imo State.
                            Nigeria.</p>
                        <p><i class="fa fa-phone mr-2"></i>+234-8033194895</p>
                        <p><i class="fa fa-phone mr-2"></i>+2348033442999</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@emmanuelinternationalpvt.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="index.php" style=" text-decoration:none;"><i
                                    class="fa fa-angle-right mr-2"></i>At Emmanuel International Pvt Ltd</a>
                            <a class="text-white mb-2" href="cargo.php" style=" text-decoration:none;"><i
                                    class="fa fa-angle-right mr-2"></i>Our Air Cargo And Courier Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our
                                Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing
                                Plan</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor.
                    Accu
                    kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;"
                            placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved. Designed by <a
                        href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>