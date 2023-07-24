<?php include 'model-api.php';
error_reporting(0);
if(isset($_POST['review'])){
    insertcomment();
}
?>
<?php
$type = isset($_GET['type']) ? $_GET['type'] : '';
$cart_success = 0;
if ($type == 'cart') {
    if (!isset($_SESSION["user_id"])) {
        header('Location:index.php?stype=login');
    }
    $amount = $_GET['price'];
    $quantity = $_GET['quantity'];
    $product_id = $_GET['product_id'];
    $product_name = $_GET['product_name'];
    $product_image = $_GET['product_image'];
    $user_id = $_GET['user_id'];
    $SQL = "SELECT * FROM cart WHERE PRODUCT_ID=$product_id";
    $row_cart = $conn->query($SQL);
    if ($row_cart->num_rows > 0) {
        $SQL = "UPDATE cart SET QUANTITY=$quantity WHERE PRODUCT_ID=$product_id AND CUSTOMER_ID=$user_id";
        $conn->query($SQL);

        $cart_success = 1;
    } else {
        $SQL = "INSERT INTO cart(PRODUCT_ID,QUANTITY,P_TITLE,AMOUNT,P_NAME,CUSTOMER_ID,P_IMAGE) 
	VALUES('$product_id','$quantity','$product_title','$amount','$product_name',$user_id,'$product_image')";
        $conn->query($SQL);
        $cart_success = 1;
    }
}
$SQL = "SELECT * FROM cart";
$row_cart = $conn->query($SQL);
$pid = $_GET['pid'];
$SQL = "SELECT * FROM cart WHERE PRODUCT_ID=$pid";
$q = $conn->query($SQL);
$qt = 0;
if ($q->num_rows > 0)
    while ($data = $q->fetch_assoc())
        $qt = $data["QUANTITY"];
?>


<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Encode+Sans+Condensed:wght@300&family=Georama:wght@200&family=Oranienbaum&family=Smooch+Sans:wght@300&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
</head>
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
        width: 60%;
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
        bottom: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 0;
            opacity: 0;
        }
    }

    .btn_inc {
        padding: 6px;
        background-color: lightgray;
        color: #000;
        cursor: pointer;
        margin: 8px;
        width: 30px;
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
    <div id="snackbar"><?= $qt ?> Added</div>
    <?php
    if ($cart_success == 1) {
    ?>
        <script>
            function myFunction() {
                var x = document.getElementById("snackbar");
                x.className = "show";
                setTimeout(function() {
                    x.className = x.className.replace("show", "");
                }, 3000);
            }
            myFunction();
        </script>
    <?php
    }
    ?>


    <div class="popup" id="show">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background-color:#1a1aff;border-radius:20px;">
                    <p style="text-align:left;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:40px;padding-top:50px;color:#ffffff;">
                        <b>Login</b>
                    </p>
                    <p style="text-align:left;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:30px;color:#ffffff;">
                        Get access to your Orders, Wishlist and Recommendations.</p>

                    <p style="text-align:center;padding-top:50px;"> <img src="Image/How-Automation-will-help-you-drive-more-eCommerce-Traffic.gif" style="width:50%">
                    </p>
                </div>
                <div class="col-md-6">
                    <span style="font-size:30px;float:right;cursor:pointer;" onclick="hide()">&times;</span>
                    <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;text-align:center;padding-top:30px;"><b>&#9733; Sign In &#9733;</b></p>
                    <form action="model.php" method="get">
                        <input type="mobile" name="mobile" id="User" Placeholder="Mobile Number" style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;border:1px #ddd;border-radius:15px;"><br>

                        <input type="text" name="password" id="Password" Placeholder="Password" style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;border:1px #ddd;border-radius:15px;"><br><br>
                        <p style="text-align:center"> <button type="submit" class="btn btn-primary" style="color:#fff;width:200px;height:40px;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;">Submit
                                Now</button></p>
                    </form><br>
                    <p style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;text-align:center;">Forgot
                        Password?</p>
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


    <div style="height:23px"></div>
    <?php include 'header.php'; ?>

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
                        <a href="Tel:+91 78380 18996"><i class="fa fa-phone" style="font-size:20px;color:white"></i>&nbsp <span style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                        <a href=""><i class="fa fa-whatsapp" style="font-size:20px;color:white"></i> <span style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709
                            </span></a>
                        <a href="mailto:info@emmanuelinternationalpvt.com"><i class="fa fa-envelope" style="font-size:20px;color:white"></i>&nbsp <span style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Email
                                Us:&nbsp info@emmanuelinternationalpvt.com</span></a>
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
                        $SQL = "SELECT * FROM category WHERE CAT_STATUS=1";
                        $ROW = $conn->query($SQL);

                        if ($ROW->num_rows > 0) {
                            while ($data = $ROW->fetch_assoc()) {
                        ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link active menu dropdown-toggle" data-toggle="dropdown" href="index.php"><span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;color:white;"><?php echo $data['CAT_NAME']; ?></span></a>

                                    </a>
                                    <?php
                                    $id = $data['ID'];
                                    $SQL = "SELECT * FROM subcategory WHERE CAT_ID=$id AND SUB_CAT_STATUS=1";
                                    $SROW = $conn->query($SQL);
                                    if ($SROW->num_rows > 0) {
                                        print_r("<div class='dropdown-menu' style='width:600px;position:absolute !important;left:0;padding:20px;'>");

                                        $i = 1;
                                        while ($sdata = $SROW->fetch_assoc()) {

                                    ?>


                                            <a class="btn btn-secondary" style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;display:inline-block;width:37%;margin-top:8px;" href="product_view.php?s_id=<?= $sdata['ID'] ?>&type_name=<?= $data['CAT_NAME']; ?>"><?php echo $sdata['SUB_CAT_NAME']; ?>
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
                            if (isset($_SESSION["user_id"])) {
                            ?>
                                <p style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    <?= $_SESSION["name"] ?>

                                    <a href="index.php?type=logout" style="text-decoration:none;color:#fff;margin-left:30px;"><span>Logout</span></a>

                                </p>
                            <?php
                            } else {
                            ?>
                                <a href="#" onclick="show()" style="text-decoration:none">
                                    <p style="color:white;font-size:20px;text-align:right;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
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
                            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
                            $SQL = "SELECT * FROM cart WHERE CUSTOMER_ID=$user_id";
                            $row_cart = $conn->query($SQL);
                            @$cart_items = 0;
                            if ($row_cart->num_rows > 0) {
                                while ($data = $row_cart->fetch_assoc()) {
                                    $cart_items += $data["QUANTITY"];
                                }
                            }
                            ?>
                            <a href="cart.php" style="text-decoration:none">
                                <p style="font-family:calibri;font-size:20px;color:white;padding-top:10px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    <i class="fas fa-shopping-cart"> </i>
                                    <?= @$cart_items ?>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
    $id = isset($_GET['pid']) ? $_GET['pid'] : '';
    if ($id != '')
        $SQL = "SELECT P.*,PM.RATING,PM.PRODUCT_OFFER,PM.P_MODE,PM.IMG1,PM.IMG2,PM.IMG3,PM.IMG4,PM.IMG5 FROM product as P INNER JOIN product_image as PM ON PM.PRODUCT_ID=P.ID WHERE P.ID=$id";
    $ROW = $conn->query($SQL);

    if ($ROW->num_rows > 0) {
        $arr = array();
        while ($data = $ROW->fetch_assoc()) {
            $arr[] = $data;
        }
    }
    ?>


    <?php
    $id = $arr[0]['CAT_ID'];
    $SQL = "SELECT * FROM category WHERE ID=$id";
    $ROW = $conn->query($SQL);
    $width = 250;
    $height = 250;
    if ($ROW->num_rows > 0) {

        while ($data = $ROW->fetch_assoc()) {

            $cat_name = $data['CAT_NAME'];
            if (trim($cat_name) == 'Mobile') {
                $width = 200;
                $height = 200;
            }
        }
    }

    ?>

    <?php
    $sid = $arr[0]['SUB_CAT_ID'];
    $SSQL = "SELECT * FROM subcategory WHERE ID=$sid";
    $SSROW = $conn->query($SSQL);

    if ($SSROW->num_rows > 0) {

        while ($Sdata = $SSROW->fetch_assoc()) {

            $sub_cat_name = $Sdata['SUB_CAT_NAME'];
        }
    }

    ?>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <div style="height:20px;"></div>
                    <div style='width:30%;height:400px;'>
                        <table border='1' style="width:35%;height:350px;border:1px solid #ccccb3;">
                            <tbody>
                                <tr>
                                    <td><img class="im" src="upload_img/<?= $arr[0]['IMG1']; ?>" width="70" height="100">
                                    </td>

                                </tr>

                                <tr>
                                    <td><img class="im" src="upload_img/<?= $arr[0]['IMG2']; ?>" width="70" height="100">
                                    </td>

                                </tr>


                            </tbody>
                        </table>

                    </div>

                </div>
                <div class="col-md-1">
                </div>

                <div class="col-md-5">
                    <div style="height:20px;"></div>
                    <img id='app' src="upload_img/<?= $arr[0]['IMG1']; ?>" style="width:90%">

                    <p style="background-color:blue;width:400px;height:40px;font-size:30px;font-family: 'Yanone Kaffeesatz', sans-serif;color:#ffffff;margin-top:50px;text-align:center;">
                        <b> Product Description</b>
                    </p>


                    <span style="font-size:20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?= $arr[0]['PRODUCT_DESC']; ?>
                    </span><br><br>

                </div>


                <div class="col-md-5">
                    <div style="height:20px"></div>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;">Home</span></a>
                        </li>
                        <li><a href="product_view.php?&pid=<?= $_GET['pid']; ?>"><span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;"><?= $cat_name; ?></span></a>
                        </li>
                        <li><a href="#"><span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;"><?= $sub_cat_name; ?></span></a>
                        </li>
                        <li><span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;"><?= $arr[0]['PRODUCT_NAME']; ?>
                        </li>
                    </ul>
                    <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:30px;"><b><?= $arr[0]['PRODUCT_NAME']; ?></b>
                    </span><br>
                    <span style="card-text;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;"><?= $arr[0]['PRODUCT_TITLE']; ?></span><br>

                    <span style="font-family: 'Yanone Kaffeesatz', sans-serif; font-size:20px;">
                        <?php
                        for ($x = 0; $x < $arr[0]['RATING']; $x++)
                            echo "<b style='color:orange;'>&star;</b>"
                        ?>

                    </span><br>

                    <p style="color:green;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;"><i class="far fa-calendar-check"></i><span style="color:black"> New Arrivals</span></p>
                    <p style="color:green;font-family: 'Yanone Kaffeesatz', sans-serif; font-size:25px;"><i class="fas fa-tag"></i><span style="color:black"> No Special Discount On New Arrivals</span>
                    </p>
                    <p><i class="fa fa-inr" style="font-size:20px;color:#000000;"></i>
                        <b style="font-family: 'Abel', sans-serif;font-size:20px;">Price: ₦<?= $arr[0]['PRICE'] - ($arr[0]['PRICE'] / 100) * $arr[0]['PRODUCT_OFFER']; ?></b>

                        &nbsp <i class="fa fa-inr" style="font-size:12px;color:#666633;"></i><span style="font-size:12px;font-family:kalinga;color:#666633;"><br>
                            <?php

                            $per = $arr[0]['PRICE'] / 100 * $arr[0]['PRODUCT_OFFER'];
                            $discounted_price = $arr[0]['PRICE'] - $per;
                            ?>
                            &nbsp<b style="text-decoration:line-through;font-size:20px;font-family: 'Abel', sans-serif;">Real Amount: ₦ <?= $arr[0]['PRICE']; ?></b><br>

                            &nbsp <b style="color:red;font-size:20px;font-family: 'Abel', sans-serif;"> Special Discount: <?= $arr[0]['PRODUCT_OFFER']; ?>% OFF</b>
                    </p>
                    <label style="font-size: 18px;font-weight: bold;margin-top:30px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        Quantity*</label>
                    <form action="?type=cart">
                        <span class="btn_inc" id="dec">&nbsp;&nbsp;-&nbsp;&nbsp;</span><input type="number" min="1" id="qty" name='quantity' style="width:100px;text-align:center;" value="<?= $qt ?>"><span class="btn_inc" id="inc">&nbsp;&nbsp;+&nbsp;&nbsp;</span><br>
                        <input type="hidden" name="type" value="cart">
                        <input type="hidden" name="s_id" value="<?= $_GET['pid'] ?>">
                        <input type="hidden" name="pid" value="<?= $_GET['pid'] ?>">
                        <input type="hidden" name="product_id" value="<?= $_GET['pid'] ?>">
                        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                        <input type="hidden" name="price" value="<?= $discounted_price ?>">
                        <input type="hidden" name="product_name" value="<?= $arr[0]['PRODUCT_NAME'] ?>">
                        <input type="hidden" name="product_image" value="<?= $arr[0]['IMG1'] ?>">
                        <button type="submit" class="btn btn-warning mt-4" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                            <!-- <a href="?type=cart&quantity=1&s_id=<?= $_GET['pid']; ?>&pid=<?= $_GET['pid']; ?>&product_id=<?= $_GET['pid']; ?>&price=<?= $arr[0]['PRICE']; ?>&product_image=<?= $arr[0]['IMG1']; ?>&product_name=<?= $arr[0]['PRODUCT_NAME']; ?>">ADD TO CART </a> -->
                            ADD TO CART
                        </button><br><br>
                        <a href="cart.php"><button type="button" class="btn btn-warning" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"> ORDER NOW
                            </button>
                        </a>
                    </form>
                    <script>
                        let qty = document.querySelector("#qty");
                        let dec = document.querySelector("#dec");
                        let inc = document.querySelector("#inc");

                        inc.addEventListener("click", () => {
                            let val = qty.value;
                            qty.value = ++val;
                        })
                        dec.addEventListener("click", () => {
                            if (qty.value > 1) {
                                let val = qty.value;
                                qty.value = --val;
                            }
                        })
                    </script>
                </div>


            </div>
        </div>
        <script>
            var arr = document.getElementsByClassName('im');
            var main = document.getElementById('app');
            /*
            for(var i=0;i<arr.length;i++){
            	arr[i].onclick=()=>{
            	main.src=arr[i].src;
            }
            }
            */
            arr[0].onclick = () => {
                main.src = arr[0].src;
            }
            arr[1].onclick = () => {
                main.src = arr[1].src;
            }
            arr[2].onclick = () => {
                main.src = arr[2].src;
            }
            arr[3].onclick = () => {
                main.src = arr[3].src;
            }

            arr[4].onclick = () => {
                main.src = arr[4].src;
            }
        </script>



        <!--COMMENT -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <?php
                        $p_id = isset($_GET['pid']) ? $_GET['pid'] : '';
                        if ($p_id != "") {
                            foreach (get_all_review($p_id)  as $value) {
                        ?>
                                <p>Name    : <?= $value['customer_name'] ?> </p>
                                <p>Rating  : <span class="text-warning"><?= str_repeat("&star;",$value['product_rating']) ?></p></span>
                                <p>Message :
                                    <?= $value['comment_message'] ?>
                                    <small class="ml-5 text-secondary"><?= $value['product_comment_time'] ?></small>
                                </p>
                        <?php
                            }
                        }
                        ?>

                        <?php
                        if (@$_SESSION["user_id"]) {
                            $customer_id = $_SESSION['user_id'];
                            $customer_name = $_SESSION['name'];
                            $p_id = $_GET['pid'];
                        ?>
                            <p>Write Your Comment</p>
                            <form class="" action="" method="POST">
                                <input type="hidden" name="product_id" value="<?=$p_id?>">
                                <input type="hidden" name="product_name" value="-">
                                <input type="hidden" name="customer_id" value="<?=$customer_id?>">
                                <input type="hidden" name="customer_name" value="<?=$customer_name?>">
                                <p><input type="text" placeholder="Write Comment Here" name="comment_message" class="form-control"></p>
                                <p>Rating</p>
                                <p><label>1 &star;</label>
                                    <input type="radio" name="product_rating" value="1">
                                    <label>2*</label>
                                    <input type="radio" name="product_rating" value="2">
                                    <label>3*</label>
                                    <input type="radio" name="product_rating" value="3">
                                    <label>4*</label>
                                    <input type="radio" name="product_rating" value="4">
                                    <label>5*</label>
                                    <input type="radio" name="product_rating" value="5">
                                </p>
                                <p><input type="submit" class="btn btn-warning" name="review" value="Send Review"></p>
                            </form>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
            <div class="row pt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h3 class="text-primary mb-4">Get In Touch</h3>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-map-marker-alt mr-2"></i>315, 2nd Floor, Daroga Market,<br> &nbsp &nbsp
                                Main
                                Burari
                                Chowk, Delhi -84, India.</p>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-phone mr-2"></i>+91 9910878709 </p>
                            <hr>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-map-marker-alt mr-2"></i>5 Pan Road, Unit 3 Nicollete Place, <br> &nbsp
                                &nbsp
                                La Rochelle, Johannesburg 2190,
                                <br> &nbsp &nbsp Republic of South Africa.
                            </p>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-phone mr-2"></i>+27 614658024</p>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-phone mr-2"></i>+27 679565871</p>
                            <hr>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-map-marker-alt mr-2"></i> A 43 Nnadi Line, <br>&nbsp &nbsp Umuaka
                                Community
                                Park Shopping Plaza,<br> &nbsp &nbsp Afor Umuaka, Njaba, Imo State.
                                Nigeria.</p>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-phone mr-2"></i>+234-8033194895</p>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-phone mr-2"></i>+2348033442999</p>
                            <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-envelope mr-2"></i>info@emmanuelinternationalpvt.com</p>
                            <div class="d-flex justify-content-start mt-4">
                                <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h3 class="text-primary mb-4">Quick Links</h3>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="index.php" style=" text-decoration:none;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-angle-right mr-2"></i>At Emmanuel International Pvt Ltd</a>
                                <a class="text-white mb-2" href="cargo.php" style=" text-decoration:none;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-angle-right mr-2"></i>Our Air Cargo And Courier Services</a>
                                <a class="text-white mb-2" href="contact.php" style=" text-decoration:none;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-5">
                    <h3 class="text-primary mb-4">Newsletter</h3>
                    <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor.
                        Accu
                        kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
            <div class="row">
                <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="color:white;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">&copy; <a href="#" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;text-decoration:none;">G5H7 Technologies</a>. <span style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;color:#ffffff;">All Rights Reserved. Designed by </span><a href="#" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;text-decoration:none;">G5H7 Technologies.</a>
                    </p>
                </div>
                <div class="col-lg-6 text-center text-md-right">
                    <ul class="nav d-inline-flex">
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;text-decoration:none;">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;text-decoration:none;">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;text-decoration:none;">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#" style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;text-decoration:none;">Help</a>
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