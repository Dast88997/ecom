<?php include 'model-api.php';
    if(!isset($_SESSION["user_id"]))
    {
        header('Location:index.php?stype=login');
    }
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
</head>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;

    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    top: 150px;
    font-size: 13px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {
        top: 0;
        opacity: 0;
    }

    to {
        top: 150px;
        opacity: 1;
    }
}

@keyframes fadein {
    from {
        top: 0;
        opacity: 0;
    }

    to {
        top: 150px;
        opacity: 1;
    }
}

@-webkit-keyframes fadeout {
    from {
        top: 150px;
        opacity: 1;
    }

    to {
        top: 0;
        opacity: 0;
    }
}

@keyframes fadeout {
    from {
        top: 150px;
        opacity: 1;
    }

    to {
        top: 0;
        opacity: 0;
    }
}
</style>
<style>
body {
    margin: 0;

}

#navbar {
    background-color: #333;
    position: fixed;
    top: -4px;
    width: 100%;
    display: block;
    transition: top 0.3s;
}

#navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 13px;
    text-decoration: none;
    font-size: 17px;
}

#navbar a:hover {
    background-color: #ddd;
    color: black;
}
</style>

<style>
.popup {
    width: 33.33%;
    height: auto;
    padding: 20px;
    position: absolute;
    background-color: #ddd;
    z-index: 2222;

    border-radius: 5px;
    box-shadow: 0px 1px 1px #ddd;
    border-radius: 5px;
    padding-bottom: 40px;
    top: 10%;
    left: 30%;
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
<script>
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

<body>

    <div class="popup" id="show">
        <span style="font-size:30px;float:right;cursor:pointer;" onclick="hide()">&times;</span>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:40px;text-align:center;">Login In Below</p>
        <form action="access-services.php" method="post" name="Login" id="Login">
            <input type="email" name="email" id="User" Placeholder="Email"
                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;border:1px #ddd;border-radius:15px;"><br>

            <input type="text" name="password" id="Password" Placeholder="Password"
                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"><br><br>
            <p style="text-align:center"> <button type="submit" class="btn btn-primary"
                    style="color:#fff;height:40px;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">Submit
                    Now</button></p>
        </form><br>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-align:center;">Forgot Password?</p>
    </div>

    <div id="navbar" class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Emmanuel
                        International
                        Pvt. Ltd</span></a>
                </div>
                <div class="col-md-9">
                    <div id="Sign In" align="right">
                        <a href="Tel:+91 78380 18996"><i class="fa fa-phone"
                                style="font-size:20px;color:white"></i>&nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                        <a href=""><i class="fa fa-whatsapp" style="font-size:20px;color:white"></i> <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                        <a href="mailto:info@emmanuelinternationalpvt.com"><i class="fa fa-envelope"
                                style="font-size:20px;color:white"></i>&nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Email
                                Us:&nbsp info@emmanuelinternationalpvt.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:23px"></div>


    <?php include 'header.php';?>

    <div id="snackbar">Remove Cart Successfully</div>

    <?php
$type=isset($_GET['delete_cart'])?$_GET['delete_cart']:'';
if($type=='delete')
{
$p_id=$_GET['p_id'];
$SQL="DELETE FROM cart WHERE PRODUCT_ID='$p_id'";
if($conn->query($SQL))
{
?>

    <script>
    myFunction();

    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 3000);
    }
    </script>
    <?php	
}	
}

?>
    <div class="sect" style="background-color:#1f2e2e">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link active menu dropdown-toggle" data-toggle="dropdown" a
                                href="index.php"><span
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:white;"><?php echo $data['CAT_NAME'];?></span></a>

                            </a>
                            <?php
                                                                    $id=$data['ID'];
                                                                    $SQL="SELECT * FROM subcategory WHERE CAT_ID=$id AND SUB_CAT_STATUS=1";
                                                                    $SROW=$conn->query($SQL);

                                                                    if($SROW->num_rows>0)
                                                                    {
                                                                        print_r(" <div class='dropdown-menu'> ");
                                                                        while($sdata=$SROW->fetch_assoc())
                                                                        {
                                                                            
                                                                            ?>
                            <a class="dropdown-item"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:#000000;"
                                href="product_view.php?s_id=<?=$sdata['ID']?>&type_name=<?=$data['CAT_NAME'];?>&type_subcat=<?=$sdata['SUB_CAT_NAME'];?>"><?php echo $sdata['SUB_CAT_NAME'];?></a>

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
                                style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                <?= $_SESSION["name"]?>

                                <a href="index.php?type=logout"
                                    style="text-decoration:none;color:#fff;margin-left:30px;"><span>Logout</span></a>

                            </p>
                            <?php
                            }
                            else{
                                ?>
                            <a href="#" onclick="show()" style="text-decoration:none">
                                <p
                                    style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
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
                                    style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
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


    <div class="select">
        <div class="container">
            <div class="row">


                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style='background-color:#fff;'>
                            <li class="breadcrumb-item"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"><a href="#"
                                    style="text-decoration:none">Home</a></li>
                            <li class="breadcrumb-item"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"><a href="#"
                                    style="text-decoration:none">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="select">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="border-right:1px dashed green;">
                    <div class="card w-200">
                        <div class="card-body">
                            <span style="color:green;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:35px;"><b>
                                    Your Cart</b></span>

                            <div style="float:right"><span
                                    style="font-family:calibri; font-size:35px;color:black;font-weight:bold;"><i
                                        class="fas fa-shopping-cart"> </i> </div>

                            <br><br>


                            <?php
$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
$SQL="SELECT * FROM cart WHERE CUSTOMER_ID=$user_id";
$row_cart=$conn->query($SQL);
$total_amount=0;
$qty = 0;
if($row_cart->num_rows>0)
{
	while($cart_data=$row_cart->fetch_assoc()){
		$total_amount+=$cart_data['AMOUNT']*$cart_data["QUANTITY"];
        $qty+=$cart_data["QUANTITY"];
		?>
                            <div>

                                <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:35px;">
                                    <span><?=$cart_data['P_NAME'];?></span>
                                </p>
                                <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:35px;">
                                    <span><?=$cart_data['P_TITLE'];?></span>
                                </p>
                                <img src="upload_img/<?=$cart_data['P_IMAGE'];?>" style="width:40%"></img>
                                <a href="cart.php?delete_cart=delete&p_id=<?=$cart_data['PRODUCT_ID'];?>">
                                    <div style="float:right"><span
                                            style="font-family:calibri;font-size:15px;color:black;font-weight:bold;"><i
                                                class="far fa-trash-alt"></i> </div>
                                </a>
                                <br><br>
                                <hr>
                            </div>
                            <?php
		
	}
}
else{
	?>

                            <h1>Your Cart Is Empty</h1>
                            <?php	
}
?>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-200">
                        <div class="card-body">
                            <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:35px;"><b>Summary</b></span>

                            <div style="float:right"><span
                                    style="font-family:calibri; font-size:35px;color:black;font-weight:bold;"><i
                                        class="fas fa-chart-bar"></i> </div>

                            <br><br><br><br>
                            <p
                                style="font-family:calibri;font-size:25px;color:#000000;font-weight:bold;padding-top:20px;font-family: 'Smooch Sans', sans-serif;">
                                <i class="fas fa-shopping-cart"> </i>
                                (<?=$qty?>) Quantity Added
                            </p>
                            <span style="font-size:20px;font-family: 'Amaranth', sans-serif;">Cart Total ₦
                                <?=$total_amount;?></span><br>
                            <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;"><b>Please
                                    Proceed By Checking Out Below:</b></span>
                            <div style="float:right"><span
                                    style="font-family:calibri;font-size:15px;color:black;font-weight:bold;"> </div></a>
                            <br><br><br><br>
                            <div id="Sign In" align="center"><a href="checkout.php" class="btn btn-primary"><span
                                        style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">Check Out
                                        <i class="fas fa-arrow-circle-right"></i></span></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
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
                        <p><i class="fa fa-map-marker-alt mr-2"></i>315, 2nd Floor, Daroga Market,<br> &nbsp &nbsp Main
                            Burari
                            Chowk, Delhi -84, India.</p>
                        <p><i class="fa fa-phone mr-2"></i>+91 9910878709 </p>
                        <hr>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>5 Pan Road, Unit 3 Nicollete Place, <br> &nbsp &nbsp
                            La Rochelle, Johannesburg 2190,
                            <br> &nbsp &nbsp Republic of South Africa.
                        </p>
                        <p><i class="fa fa-phone mr-2"></i>+27 614658024</p>
                        <p><i class="fa fa-phone mr-2"></i>+27 679565871</p>
                        <hr>
                        <p><i class="fa fa-map-marker-alt mr-2"></i> A 43 Nnadi Line, <br>&nbsp &nbsp Umuaka Community
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
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu
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
    <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>