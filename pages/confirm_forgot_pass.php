<?php
    include_once "../php_codes/confirm_forgot_pass_validation.php";
?>
<html>
    <head>
        <title>Justice - Reset Password</title>
        <link rel="stylesheet" type="text/css" href="../css/confirm_forgot_pass.css">
    </head>
    <body>
     <center>
     <form action="" method="POST">
        <table>
            <tr>
                <td><img src="../assets/justicelogo.png"; width="380" height="480"></td>
                <td align="center" id="forgot-pass-confirm-box-style">
                    <h4>Reset Password</h4>
                    <input type="text" name="forgot_pass_new" placeholder="New Password"><span style="color:red;">*<?php echo $err_forgot_pass_new;?></span><br><br>
                    <input type="password" name="forgot_pass_confirm" placeholder="Confirm New Password"><span style="color:red;">*<?php echo $err_forgot_pass_confirm;?></span><br><br>
                    <a href="../../pages/landing.php">Cancel</a> <input type="submit" name="forgot_pass_confirm_button" value="Reset">
                </td>
            </tr>
        </table>
     </form>
     </center>
    </body>
</html>