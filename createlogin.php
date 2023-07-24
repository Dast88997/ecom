<!doctype html>
<html>

<head>
    <link rel="icon" type="png" href="glosal-services.png" style="width:100%">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amaranth:ital@1&family=Asap+Condensed:ital@1&family=Barlow+Semi+Condensed:wght@300&family=Big+Shoulders+Display:wght@300&family=DM+Sans:ital,wght@1,500&family=Dosis:wght@300;500&family=EB+Garamond:ital@1&family=Fauna+One&family=Italianno&family=Niconne&family=Smooch+Sans&family=Thasadith:ital@1&family=Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
</head>
<style>
td {
    padding: 2px;
    background-color: green;
}
</style>

<body style="background-color:orange">


    <div style="background-color:#e5e5cc">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="Image/emma-logo.png" style="width:80px;height:80px;adding-top:20px;">&nbsp <span
                        style="font-family: 'Yanone Kaffeesatz', sans-serif;color:#000066;font-size:35px;padding-top:10px;"><b>Emmanuel
                            International
                            Private
                            Ltd</b></span>
                </div>

                <div class="col-md-6">
                    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                        <p style="font-size:35px;font-family: 'Yanone Kaffeesatz', sans-serif;padding-top:10px;">
                            Customers Details Is Very Important Regarding Delivery Of Goods. All Customers Details Must
                            Be Done Correctly!!</p>
                    </marquee>
                </div>
            </div>
        </div>
    </div><br><br>

    <div id="Sign-In" align="center">
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:40px;"> UPDATE
            CUSTOMERS TRACKING DETAILS</p>
        <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;"> Updated
            Details Of Both Receiver And Sender Must Be done Carefully.</p>
        <form action="insertlogin.php">
            <div style='float:center;width:30%;'>
                <table border='1' style="width:500px;">
                    <tbody>
                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Way Bill Number</td>
                            <td colspan="3"><input type="text" name="Bill"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>


                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Receiver Name</td>
                            <td colspan="3"><input type="text" name="Name"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Sender</td>
                            <td colspan="3"><input type="text" name="Sender"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Sender Address</td>
                            <td colspan="3"><input type="text" name="Sender_Address"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Sender Email</td>
                            <td colspan="3"><input type="text" name="Sender_Email"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Sender Number</td>
                            <td colspan="3"><input type="text" name="Sender_Number"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Receiver Name</td>
                            <td colspan="3"><input type="text" name="Receiver"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Receiver Address</td>
                            <td colspan="3"><input type="text" name="Receiver_Address"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Receiver Email</td>
                            <td colspan="3"><input type="text" name="Receiver_Email"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Receiver Number</td>
                            <td colspan="3"><input type="text" name="Receiver_Number"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Name Of Goods</td>
                            <td colspan="3"><input type="text" name="Name_Item"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Number Of Goods</td>
                            <td colspan="3"><input type="text" name="Number_Item"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Color Of Goods</td>
                            <td colspan="3"><input type="text" name="Color_Item"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Weight Of Goods</td>
                            <td colspan="3"><input type="text" name="Weight_Item"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Sent Date</td>
                            <td colspan="3"><input type="text" name="Sent"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Delivery Date</td>
                            <td colspan="3"><input type="text" name="Delivery"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>

                        <tr>
                            <td
                                style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:150px;color:#ffffff99">
                                Cargo Fee</td>
                            <td colspan="3"><input type="text" name="Amount"
                                    style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;width:340px;height:30px;">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><br>
            <div class="submit"><input name="submit" value="Submit Customers Details"
                    onclick='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("ctl00$ContentPlaceHolder1$SUBMIT", "", true, "chk", "", false, false))'
                    id="ctl00_ContentPlaceHolder1=SUBMIT" class="btn btn-block bg-default btn-flat "
                    style="width:200px; color:#fff;  margin-bottom:30px; background:#D4090C;font-family: 'Yanone Kaffeesatz', sans-serif; "
                    type="submit"></div>
        </form>
    </div>



</body>

</html>