<?php include 'header.php';?>
<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
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
<body style='background-image:url(image/world-map.jpg);padding-bottom:100px;relative;'>
    <?php header_top();?>


    <div class="container" style="margin-top:150px;">
        <div class="row justify-content-center">
            <div class="md-4">
                <form action="courier-info.php">
                    <div class="form-group">
                        <label for="formGroupExampleInput"
                            style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:35px;">Enter Tracking
                            Number</label>
                        <input type="text" class="form-control" name="c_id" id="formGroupExampleInput"
                            style="width:300px">
                     </div>
                    <div class="form-group">

                        <input type="submit" class="form-control btn btn-primary">
                     </div>

                </form>
             </div>
         </div>

     </div>
     <div style="height:100px"></div>
     <div class="container" style="margin-top:130px;">
        <div class="row justify-content-center">
            <div class="md-4">
            <div id="Sign-In" align="center">
                    <div style="padding-top:5px;width:500px;background-color:#000;height:2px;border-radius:10px;"></div>
                    <p style="font-family: 'Amaranth', sans-serif;color:#000000;font-size:15px;text-align:center;">
                        &#169;
                        Emmanuel International Private Limited. All Rights Reserved 2022.</p>
                </div>
             </div>
         </div>
     </div>

</body>

</html>