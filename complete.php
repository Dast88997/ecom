<?php include 'model-api.php';?>
<?php
$SQL="TRUNCATE cart";
$conn->query($SQL);
?>
<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Encode+Sans+Condensed:wght@300&family=Georama:wght@200&family=Oranienbaum&family=Smooch+Sans:wght@300&family=Yanone+Kaffeesatz:wght@300&display=swap"
        rel="stylesheet">
</head>
<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
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
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel:+91 9910878709
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

    <div class="sect sticky-top" style="background-color:#1f2e2e">
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
                            <a class="nav-link active menu dropdown-toggle" data-toggle="dropdown" href="#"><span
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:white;"><?php echo $data['CAT_NAME'];?></span></a>

                            </a>
                            <?php
  $user_id=$data['ID'];
  $SQL="SELECT * FROM subcategory WHERE CAT_ID=$user_id AND SUB_CAT_STATUS=1";
$SROW=$conn->query($SQL);

if($SROW->num_rows>0)
{
	print_r(" <div class='dropdown-menu'>");
	while($sdata=$SROW->fetch_assoc())
	{
		?>
                            <a class="dropdown-item"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:#000000;"
                                href="product_view.php?s_id=<?=$sdata['ID']?>"><?php echo $sdata['SUB_CAT_NAME'];?></a>

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

    <hr>
    <div style="height:120px"></div>
    <div id="Sign In" align="center">
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">Your Confirmed Delivery Address :<br>
            <?=@$_GET["address"]?></p>
        <img src="Image/check.gif" style="width:10%;text-align:center;"></img>
        <h1 style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;text-align:center;">WE HAVE
            CONFIRMED YOUR ORDER. YOUR ORDER NUMBER IS<br> :<?=$_GET['order_id'];?></h1><br><br>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;t">Thanks For Pratonising Our Products.
            Hope To Vist Us Again.
    </div>

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