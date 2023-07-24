<?php include 'model-api.php';
session_start();
?>
<?php
$type=isset($_GET['type'])?$_GET['type']:'';

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

$SQL="SELECT * FROM cart";
$row_cart=$conn->query($SQL);
?>


<!doctype html>
<html>

<head>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
    margin: 0;

}

#navbar {
    background-color: #333;
    position: fixed;
    top: 7px;
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
.quick {
    background-color: #000;
    color: #fff;
    padding: 8px;
    position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(-50%, -50%);
    display: none;
    opacity: 0.8;
    float:left;
    font-family: 'Yanone Kaffeesatz', sans-serif;
}

.img_hover:hover .quick {
    display: block;
   

}
</style>

<body>

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

    <div class="popup" id="show">
        <span style="font-size:30px;float:right;cursor:pointer;" onclick="hide()">&times;</span>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:40px;text-align:center;">Login In Below</p>
        <form action="access-services.php" method="post" name="Login" id="Login">
            <input type="email" name="email" id="User" Placeholder="Email"
                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"><br>

            <input type="text" name="password" id="Password" Placeholder="Password"
                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"><br><br>
            <p style="text-align:center"> <button type="submit" class="btn btn-primary"
                    style="color:#fff;height:40px;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">Submit
                    Now</button></p>
        </form><br>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-align:center;">Forgot Password?</p>
    </div>
    <div style="height:40px"></div>

    <?php include 'header.php';?>

    <div id="navbar" class="sticky-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <a href="index.php" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Emmanuel
                        International
                        Pvt. Ltd</span></a>
                </div>
                <div class="col-md-7">
                    <div id="Sign In" align="end">
                        <a href="Tel:+91 9910878709"><i class="fa fa-phone"
                                style="font-size:20px;color:white"></i>&nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                        <a href=""><i class="fa fa-whatsapp" style="font-size:20px;color:white"></i> <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                                          </div>
                </div>
            </div>
        </div>
    </div>
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
                                                                                                <a class="dropdown-item"style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:#000000;"
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
<div style="height:40px"></div>
    <div class="price">
        <div class="container">
            <div class="row">


                <?php
$id=isset($_GET['s_id'])?$_GET['s_id']:'';
if($id!='')
$cur_page = isset($_GET["page"])?$_GET["page"]:1;
$limit = 8;
$SQL="SELECT count(*) as Total FROM product as P INNER JOIN product_image as PM ON PM.PRODUCT_ID=P.ID WHERE P.SUB_CAT_ID=$id";
$total_row=$conn->query($SQL);
if($total_row->num_rows>0)
{
	while($data=$total_row->fetch_assoc())
	{
        $total  = $data["Total"];
    }
}

$total_page = ceil($total/$limit);
if($cur_page == 0)
    $cur_page = 1;
if($cur_page <= $total_page){
    $offset = ($cur_page-1)*$limit;
    $SQL="SELECT P.*,PM.RATING,PM.PRODUCT_OFFER,PM.P_MODE,PM.IMG1,PM.IMG2,PM.IMG3,PM.IMG4,PM.IMG5 FROM product as P INNER JOIN product_image as PM ON PM.PRODUCT_ID=P.ID WHERE P.SUB_CAT_ID=$id LIMIT $limit OFFSET $offset";
}
$next = $cur_page+1;
$pre = $cur_page-1;
if($next>$total_page){
    $next = $cur_page;
}

$ROW=$conn->query($SQL);
$width=250;
$height=250;
if($ROW->num_rows>0)
{
	while($data=$ROW->fetch_assoc())
	{
$type_name=isset($_GET['type_name'])?$_GET['type_name']:'';

if(trim($type_name)=="Mobile")
{
$width=200;
$height=380;
}	
		
		?>

                <div class="col-md-3">
                    <a href="view.php?pid=<?=$data['ID'];?>&s_id=<?=$_GET['s_id'];?>">
                        <div class="img_hover">
                            <img src="upload_img/<?=$data['IMG1'];?>" width="70%" >
                            <a href="view.php?pid=<?=$data['ID'];?>&s_id=<?=$_GET['s_id'];?>"
                                style="text-decoration:none;" class="quick">QUICK VIEW</a>
                    </a>
                </div>
                <div class="col-md-12 " style="margin-top:10px;font-size:20px;color:#000000;">

                    <span
                        style="card-text;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:18px;text-indent:2em;">
                        <b><?=$data['PRODUCT_TITLE'];?></b></span><br>
                    <span
                        style="card-text;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-indent:2em;">
                        <b>Rating:</b>
                        <?php
	                          for($x=0;$x<$data['RATING'];$x++)
							  echo "<b style='color:orange;'>&star;</b>"
						  ?>
                    </span><br><br>
                </div>
            </div>

            <?php	
	}
}		
		?>
        </div>
    </div>
    </div>
<div id="Sign in"align="center">
<a href="?page=<?=$pre?>&s_id=<?=$_GET["s_id"]?>&type_name=<?=$_GET["type_name"]?>"style="text-decoration:none"><i class="fa fa-long-arrow-left" style="font-size:20px;color:#d6d6c2"></i>&nbsp</a>  <?=$cur_page?> <a href="?page=<?=$next?>&s_id=<?=$_GET["s_id"]?>&type_name=<?=$_GET["type_name"]?>" style="text-decoration:none">&nbsp <i class="fa fa-long-arrow-right" style="font-size:20px;color:#d6d6c2"></i></a>
</div> 

    <hr>
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

</body>

</html>