<?php include 'model-api.php'; ?>
<?php
if (isset($_POST['change_pass'])) {
    $error_mesage = "";
    forgetPassword($_POST['mobile'], $_POST['password']);
    $message = "Password reset successfully";
}
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
            <?=@$mesage?>
            <form action="" method="POST">
                <p><input type="password" placeholder="Enter New Password" name="password"></p>
                <p><input type="hidden" name="mobile" value="<?= @$_POST['email'] ?>"></p>
                <p><input type="submit" name="change_pass" value="Change Password"></p>
            </form>
    </body>
</html>