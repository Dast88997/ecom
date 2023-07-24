<html>

<head>
    <title style="font-family: 'Yanone Kaffeesatz', sans-serif;font-size:30px;">Emmanuel International Pvt Ltd &mdash;
        Generate Bill</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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
</style>

<body>

    <div style="background-color:#f5f5f0;height:150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="Image/emma-logo.png" style="width:60px;height:60px;">&nbsp <span
                        style="font-family: 'Yanone Kaffeesatz', sans-serif;color:#b3b3ff;font-size:35px;"><b>Emmanuel
                            International
                            Private
                            Ltd</b></span>
                </div>
                <div class="col-md-7">
                    <div id="Sign In" align="center">
                        <ul class="nav nav-pills justify-content-left">
                            <li class="nav-item">
                                <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#000066;">&nbsp
                                    &nbsp &nbsp &nbsp
                                    Lagos</span><br>
                                <span style="font-size:20px;font-family:kalinga;color:#ffffff;">
                                    <p id='game' style="font-family: 'Smooch Sans', sans-serif;"></p>
                                </span>
                            </li>&nbsp &nbsp &nbsp
                            <li class="nav-item">
                                <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#000066;">&nbsp
                                    &nbsp &nbsp &nbsp
                                    Johannesburg</span><br>
                                <span style="font-size:20px;font-family:kalinga;color:#ffffff;">
                                    <p id='peace' style="font-family: 'Smooch Sans', sans-serif;"></p>
                                </span>
                            </li>&nbsp &nbsp &nbsp
                            <li class="nav-item">
                                <span style="font-size:20px;font-family: 'Smooch Sans', sans-serif;color:#000066;">&nbsp
                                    &nbsp &nbsp &nbsp New
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
                </div>
            </div>
        </div>
    </div>

    <div style="width:50%;height:20px;"></div>
    <div id="Sign-In" align="center">

        <?php
$conn=new mysqli("localhost","root","","emm");
$error_message='';
$id=0;
if(isset($_GET['search']))
{
$id=$_GET['id'];

?>

        <?php
	
	$status=0;
	$SQL="SELECT DELIVERY_STATUS FROM deliver WHERE COU_ID='$id'";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		
		$status=$data['DELIVERY_STATUS'];
	}
}
		
		?>


        <?php

if($id!='')
{
$SQL="SELECT * FROM reacts WHERE COUR_NO='$id'";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		$array=array();
		array_push($array,$data['Sender_Address']);
		$SQL="SELECT * FROM track WHERE CID='$id'";
        $row1=$conn->query($SQL);
		if($row1->num_rows>0)
		{
			while($data1=$row1->fetch_assoc())
			{
				array_push($array,$data1['ADDRESS']);
			}
		}
	}
}
}
		
		array_push($array,$data['Receiver_Address']);
		?>

        <?php
$sql="select * from reacts where COUR_NO='$id'";
$row=$conn->query($sql);
if($row->num_rows>0)
{
	?>

        <?php
	while($data=$row->fetch_assoc())
	{
		?>
        <table class="header">
            <tr style="font-size:15px;">
                <td colspan="2" style="font-size:20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                    <b>Tracking Number</b>
                </td>
                <td width="50%" rowspan="9" class="terms"
                    style="border-left:1px solid #A4A4A4;border-bottom:1px solid #A4A4A4;">
                    <h2 style="text-align:center;font-family: 'Yanone Kaffeesatz', sans-serif;"> Terms and Conditions
                    </h2>
                    <ol>
                        <li style="font-family: 'Yanone Kaffeesatz', sans-serif;">This Waybill is issued for a contract
                            of Carriage which is not covered by a Bill of Lading
                            or similar document or title. </li>
                        <li style="font-family: 'Yanone Kaffeesatz', sans-serif;">A signed Waybill is returned to the
                            shipper and a copy of it is applied as an input source
                            document to a computerized system for data transmission of particulars as described on page
                            2 hereof to the country of destination. Upon receipt of
                            the data so transmitted, Carrier or its agent in the country of destination will forward
                            such data to the consignee and notify party. </li>
                        <li style="font-family: 'Yanone Kaffeesatz', sans-serif;"> Carrier shall not be liable for any
                            loss or damage or delay to or in connection with the
                            Goods or any consequential or indirect damage to Merchant arising unintentionally from
                            erroneous input into the computer system or from wrongful data transmission.
                        </li>
                        <li style="font-family: 'Yanone Kaffeesatz', sans-serif;"> This contract of Carriage shall be
                            subject to the International law which would have been
                            compulso- rily applicable if a Bill of Lading rather than a Waybill had been issued. </li>
                        <li style="font-family: 'Yanone Kaffeesatz', sans-serif;"> The terms and conditions of Carrier’s
                            applicable tariff are incorporated herein, including
                            but not limited to the terms and conditions relating to demurrage and detention.Car- rier’s
                            standard tariff can be accessed online at www.emmanuelinternationalpvt.com. In the case of
                            any
                            inconsistency between this Waybill and the applicable tariff, this Waybill shall prevail.
                        </li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <?=$data['COUR_NO'];?></td><br><br>
            </tr>
            <tr>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Origin</b>
                </td>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Destination</b>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                    <?php print_r($data['Sender_Address']);?></td>
                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                    <?php print_r($data['Receiver_Address']);?></td>
            </tr>
            <tr>
                <?php 

?>

                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Sent On</b>
                    <p style="font-weight:normal;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?php print_r($data['Sent']);?></p>
                </td>
                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Delivered On</b>
                    <p style="font-weight:normal;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?php print_r($data['Delivery']);?></p>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Waybill:</b>
                    <p style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?php print_r($data['Bill']);?>
                    </p>
                </td>

                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Weight</b>
                    <p style="font-weight:normal;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?php print_r($data['Weight_Item']);?></p>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Amount</b>
                    <p style="font-weight:normal;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?php print_r($data['Amount']);?></p>
                </td>
                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Number Of Goods</b>
                    <p style="font-weight:normal;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?php print_r($data['Number_Item']);?></p>
                </td>
            </tr>
            <tr>

                <td rowspan="2" style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <img width="100px" height="80px"
                        src="data:image/png;base64,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" />
                </td>
            </tr>
            <tr>
                <td>
                    <img width="140px" height="30px"
                        src="data:Image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQwAAAAeAQMAAADjK7L0AAAABlBMVEX///8AAABVwtN+AAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAADdJREFUOI1j+MzDzGzDw/PBwPjA+fOfz/Pz29gYGHw4//nzh/M8Nn9s+M98YBhVMqpkVMlIUwIAoE7tTjITwxAAAAAASUVORK5CYII=" />
                </td>
            </tr>
        </table>
        <table class="header-table">
            <tr>
                <td width="15%" style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Sender Name:</b>
                </td>
                <td width="35%" style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <?php print_r($data['Sender']);?></td>
                <td width="15%" style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Receiver Name:</b>
                </td>
                <td width="35%" style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <?php print_r($data['Receiver']);?></td>
            </tr>
            <tr>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Sender Contact #:</b>
                </td>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <?php print_r($data['Sender_Number']);?></td>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Receiver Contact #:</b>
                </td>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <?php print_r($data['Receiver_Number']);?></td>
            </tr>
            <tr>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Sender Address</b>
                </td>
                <td rowspan="2" valign="top"
                    style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <?php print_r($data['Sender_Address']);?></td>
                <td style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <b>Receiver Address</b>
                </td>
                <td rowspan="2" valign="top"
                    style="font-size: 15px;font-family: 'Yanone Kaffeesatz', sans-serif;font-size:20px;">
                    <?php print_r($data['Receiver_Address']);?></td>
            </tr>
        </table><br>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <span style="font-size:20px;font-family: 'Yanone Kaffeesatz', sans-serif;"><b>Name
                            Of Goods:</b></span>
                    <span
                        style="font-weight:normal;color:#000000;font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                        <?php print_r($data['Name_Item']);?></span>
                </div>          

            </div>
        </div>
        <div style="padding-top:5px;padding-bottom:5px;width:100%;">
            <div class="container ">
                <div class="row justify-content-center">

                    <table class="table table-dark" style="margin-top:30px;">
                        <thead>
                            <tr>

                                <th scope="col" style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    TRACKING NUMBER</th>
                                <th scope="col" style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    SENDER ADDRESS</th>
                                <th scope="col" style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    DELIVERY ADDRESS</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

if($id!='')
{
$SQL="SELECT * FROM reacts WHERE COUR_NO='$id'";
$row=$conn->query($SQL);

if($row->num_rows>0)
{
	
	while($data=$row->fetch_assoc())
	{
		$array=array();
		array_push($array,$data['Sender_Address']);
		$SQL="SELECT * FROM track WHERE CID='$id'";
        $row1=$conn->query($SQL);
		if($row1->num_rows>0)
		{
			while($data1=$row1->fetch_assoc())
			{
				array_push($array,$data1['ADDRESS']);
			}
		}
		
		
		array_push($array,$data['Receiver_Address']);
		?>
                            <tr>
                                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    <?=$data['COUR_NO'];?></td>
                                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    <?=$data['Sender_Address'];?></td>
                                <td style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">
                                    <?=$data['Receiver_Address'];?></td>
                            </tr>
                            <?php	
	}
	
}


}

?>


                        </tbody>
                    </table>
                </div>
            </div>





        </div>
    </div>

    </div>
    </div>
    </section>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <b style="font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">Imortant Notice:</b><br>
                <span style="color:#000000;font-size: 20px;font-family: 'Yanone Kaffeesatz', sans-serif;">Shipment
                    should be cleared on time to avoid Demurage Charges</span>
            </div>
        </div>
    </div>


    <div style="width:100%;height:100px;"></div>





    <?php

	}
	
}else{
    
    ?>

    <?php
    
}
}
?>

    <script>
    (function() {
        window.print();
    })();
    </script>
</body>

</html>