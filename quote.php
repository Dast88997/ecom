<head>
    <title>Emmanuel International Private Limited</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
</head>
<style>
body {
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}
</style>

<style>
body {
    margin: 0;
    background-color: #f1f1f1;
    font-family: Arial, Helvetica, sans-serif;
}

#navbar {
    background-color: #333;
    position: fixed;
    top: -50px;
    width: 100%;
    display: block;
    transition: top 0.3s;
}

#navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 10px;
    text-decoration: none;
    font-size: 17px;
}

#navbar a:hover {
    background-color: #ddd;
    color: black;
}
</style>

<body style="background-image: url(images/cargo-ship-night-8645999.jpg);">

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
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel:+91 9910878709 </span></a>
                        <a href=""><i class="fa fa-whatsapp" style="font-size:20px;color:white"></i> <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Tel: +91 9910878709 </span></a>
                        <a href="mailto:info@emmanuelinternationalpvt.com"><i class="fa fa-envelope"
                                style="font-size:20px;color:white"></i>&nbsp <span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Email
                                Us:&nbsp info@emmanuelinternationalpvt.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color:#ff990099;height:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding-top:10px">
                    <img src="Image/emma-logo.png" style="width:80px;height:80px;">&nbsp <span
                        style="font-family: 'Yanone Kaffeesatz', sans-serif;color:#000066;font-size:40px;"><b>Emmanuel
                            International
                            Private
                            Ltd</b></span>
                </div>

                <div class="col-md-4">
                    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                        <p style="font-size:35px;font-family: 'Yanone Kaffeesatz', sans-serif;padding-top:10px;">
                            Customers Details Is Very Important Regarding Delivery Of Goods. All Customers Details Must
                            Be Done Correctly!!</p>
                    </marquee>
                </div>
            </div>
        </div>
    </div><br><br>


    <?php

$conn=new mysqli("localhost","root","","emm");
$Name=$_POST['Name'];
$Company=$_POST['Company'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Service=$_POST['Service'];
$Description=$_POST['Description'];
$From_Suburb=$_POST['From_Suburb'];
$From_City=$_POST['From_City'];
$From_Country=$_POST['From_Country'];
$To_Suburb=$_POST['To_Suburb'];
$To_City=$_POST['To_City'];
$To_Country=$_POST['To_Country'];
$Item_Length=$_POST['Item_Length'];
$Item_Width=$_POST['Item_Width'];
$Item_Height=$_POST['Item_Height'];
$Item_Weight=$_POST['Item_Weight'];
$Message=$_POST['Message'];
$sql="insert into dools(Name,Company,Email,Mobile,Service,Description,From_Suburb,From_City,From_Country,To_Suburb,To_City,To_Country,Item_Length,Item_Width,Item_Height,Item_Weight,Message) values('$Name','$Company','$Email','$Mobile',
'$Service','$Description','$From_Suburb','$From_City','$From_Country','$To_Suburb','$To_City','$To_Country','$Item_Length','$Item_Width','$Item_Height','$Item_Weight','$Message')";
if($conn->query($sql)==TRUE)
{?>


    <div style="height:150px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div
                    style="width:600px;height:280px;border:1px solid #66999999; background-color:#66999999;margin:auto;padding:5px;float:center;border-radius:20px;">
                    <div id="Sign-In" align="center"><br>
                        <p style="color:#000080"><span
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:40px;">Dear
                                Esteem Customer!!</span></p>
                        <span style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:25px;">Thank You For Sending
                            You Quotations To Us For Delivery.
                            Our Representative Shall Contact You Soon.</span><br><br>
                        <a href="index.php"><button type="button" class="btn btn-success"
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Do Log Out Now
                            </button></a>
                    </div>
                </div><br>
                <?php
}
else
{?>
                <div style="width:100%;height:100px;"></div>
                <div class="section">
                    <p><span style="font-family:calibri;font-size:30px;">Datas Not Saved Successfully. Try
                            Again!!!!</span></p>

                    <a href="index.php"><span style="font-family:calibri;font-size:30px;">Home</span></a>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
    </div><br>
    <div style="height:40px;"></div>
    <div>
    <div class="container">
            <div style="height:10px"></div>
            <div class="row">
                <div class="col-md-12">
                    <div id="Sign-In" align="center">
                        <div style="padding-top:5px;width:500px;background-color:#00000099;height:2px;border-radius:10px;">
                        </div>
                        <p style="font-family: 'Amaranth', sans-serif;color:#00000099;font-size:15px;text-align:center;">
                            &#169;
                            Emmanuel International Private Limited. All Rights Reserved 2022.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    // When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
    }
    </script>

</body>

</html>