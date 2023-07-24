<?php include 'model-api.php'; ?>
<?php
$error_mesage = "";
$form = 0;
$message = "";
if (isset($_POST['check_mail'])) {
   
    if (checkEmail($_POST['mobile'])) {
        $email = $_POST['mobile'];
        $form = 1;
        $to = $email;
        $subject = "HTML email";

        $message = "
                    <html>
                    <head>
                    <title>HTML email</title>
                    </head>
                    <body>
                    <form action='https://www.emmanuelinternationalpvt.com/change-pass.php' method='POST'>
                        <input type='hidden' name='email' value='".$email."'>
                        <input type='submit' value='Change Password' style='color:blue;padding:10px;'>
                    </form>
                    
                    </body>
                    </html>
";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From:info@emmanuelinternationalpvt.com' . "\r\n";
        mail($to, $subject, $message, $headers);
    } else {
        $error_mesage = "Mobile no is not valid";
    }
}





?>
<!doctype html>
<html>

<head>

</head>

<body>
    <?php
    if ($form == 0) {
    ?>
        <p><?= $error_mesage ?></p>
        <form action="" method="POST">
            <p><input type="text" name="mobile" placeholder="Enter Email ID"></p>
            <p><input type="submit" name="check_mail" value="Send Email"></p>
        </form>
    <?php
    }

    ?>
    <?php
    if ($form == 1) {
    ?>
    <h1>Check Email for change password</h1>
    <?php
    }

    ?>
</body>

</html>