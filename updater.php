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
table {
    border-collapse: collapse;
    width: 100%;
}

tr,
td,
th {

    background-color: green;
    color: #fff;
    padding: 5px;
    text-align: center;
}

td:hover {
    background-color: yellow;
    color: black;
}
</style>

<body style="background-color:orange">

    <div style="background-color:#e5e5cc">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/emma-logo.png" style="width:80px;height:80px;adding-top:20px;">&nbsp <span
                        style="font-family: 'Yanone Kaffeesatz', sans-serif;color:#000066;font-size:35px;padding-top:10px;"><b>Emmanuel
                            International
                            Private
                            Ltd</b></span>
                </div>

                <div class="col-md-6">
				<marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                            onmouseout="this.start();">
                            <p style="font-size:35px;font-family: 'Yanone Kaffeesatz', sans-serif;padding-top:10px;">Customers Details Is Very Important Regarding Delivery Of Goods. All Customers Details Must Be Done Correctly!!</p>
                        </marquee>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div id="Sign-In" align="center">
            <?php
$conn=new mysqli("localhost","root","","emm");
if(isset($_GET['updatesubmit']))
{

$ID=$_GET['Cou_ID'];
$Name=$_GET['Name'];
$add_1=$_GET['Sender'];
$add_2=$_GET['Sender_Address'];
$add_3=$_GET['Sender_Email'];
$add_4=$_GET['Sender_Number'];
$add_9=$_GET['Receiver'];
$add_10=$_GET['Receiver_Address'];
$add_11=$_GET['Receiver_Email'];
$add_12=$_GET['Receiver_Number'];
$add_13=$_GET['Name_Item'];
$add_14=$_GET['Number_Item'];
$add_15=$_GET['Color_Item'];
$add_16=$_GET['Weight_Item'];
$add_18=$_GET['Sent'];
$add_19=$_GET['Delivery'];
$add_20=$_GET['Amount'];
$add_21=$_GET['Bill'];



$sql="update reacts set Name='$Name',Sender='$add_1',Sender_Address='$add_2',Sender_Email='$add_3',Sender_Number='$add_4',Receiver='$add_9',Receiver_Address='$add_10',Receiver_Email='$add_11',Receiver_Number='$add_12',Name_Item='$add_13',Number_Item='$add_14',Color_Item='$add_15',Weight_Item='$add_16',Sent='$add_18',Delivery='$add_19',Amount='$add_20',Bill='$add_21' WHERE Cou_ID=$ID";

if($conn->query($sql))
{
	header('Location:insertlogin.php');
	
}
echo "Your Details Has Been Updated. Thank You.";
}

?>
        </div>
    </div>



    <div style="height:20px"></div>



    <div class="section">
        <div id="Sign-In" align="center">


            <?php
if(isset($_GET['update']))
{
	$id=$_GET['update'];
$sql="select * from reacts WHERE Cou_ID=$id";
$row=$conn->query($sql);
if($row->num_rows>0)
{
	while($data=$row->fetch_assoc())
	{
		?>

            <form action="updater.php">


                <div style="background-color:orange">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:40px;"> UPDATE
                                    CUSTOMERS TRACKING DETAILS</p>
									<p style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;"> Updated
                                    Details Of Both Receiver And Sender Must Be done Carefully.</p>
                                <table border='1' style="width:60%;">
                                    <tbody>

                                        <input type="hidden" name="Cou_ID"
                                            value="<?php  echo $data['Cou_ID'];?>"><br><br>




                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Receiver Name: </td>
                                            <td colspan="3"><input type="text" name="Name"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Name'];?>"> Required</td><br><br>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Sender Name:</td>
                                            <td colspan="3"> <input type="text" name="Sender"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Sender'];?>">Required</td>
                                        </tr>


                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">Way
                                                Bill Number:</td>
                                            <td colspan="3"> <input type="text" name="Bill"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Bill'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Sender Address:</td>
                                            <td colspan="3"> <input type="text" name="Sender_Address"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Sender_Address'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Sender Email:</td>
                                            <td colspan="3"><input type="text" name="Sender_Email"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Sender_Email'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Sender Number:</td>
                                            <td colspan="3"><input type="text" name="Sender_Number"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Sender_Number'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Receiver Name:</td>
                                            <td colspan="3"><input type="text" name="Receiver"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Receiver'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Receiver Address:</td>
                                            <td colspan="3"><input type="text" name="Receiver_Address"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Receiver_Address'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Receiver Email:</td>
                                            <td colspan="3"><input type="text" name="Receiver_Email"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Receiver_Email'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Receiver Number:</td>
                                            <td colspan="3"><input type="text" name="Receiver_Number"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Receiver_Number'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Name Of Goods:</td>
                                            <td colspan="3"><input type="text" name="Name_Item"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Name_Item'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Number Of Goods:</td>
                                            <td colspan="3"><input type="text" name="Number_Item"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Number_Item'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Color Of Goods:</td>
                                            <td colspan="3"><input type="text" name="Color_Item"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Color_Item'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Weight Of Goods:</td>
                                            <td colspan="3"><input type="text" name="Weight_Item"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Weight_Item'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Sent Date:</td>
                                            <td colspan="3"><input type="text" name="Sent"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Sent'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Delivery Date:</td>
                                            <td colspan="3"><input type="text" name="Delivery"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Delivery'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                                                Amount Paid:</td>
                                            <td colspan="3"><input type="text" name="Amount"
                                                    style="width:400px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;"
                                                    value="<?php  echo $data['Amount'];?>"></td>
                                        </tr>

                                        <tr>
                                            <td colspan="3"><input type="submit"
                                                    style="width:120px;background-color:blue;border-radius:10px;color:#ffffff;"
                                                    value="Update Now" name="updatesubmit">
                                            </td>
                                        </tr>

            </form>
            </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    <?php
		
		
	}
}
	
}

?>




</body>

</html>