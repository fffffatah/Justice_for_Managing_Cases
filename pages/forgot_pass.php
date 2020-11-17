<?php
    include_once "../php_codes/forgot_pass_validation.php";
?>
<html>
    <head>
        <title>Justice - Reset Password</title>
        <link rel="stylesheet" type="text/css" href="../css/forgot_pass.css">
    </head>
    <body>
     <center>
     <form action="" method="POST">
        <table>
            <tr>
                <td><img src="../assets/justicelogo.png"; width="380" height="480"></td>
                <td align="center" id="forgot-pass-email-box-style">
                    <h4>Enter Your Email</h4>
                    <input type="text" name="forgot_pass_email" placeholder="Email"><span style="color:red;">*<?php echo $err_forgot_pass_email;?></span><br><br>
                    <a href="../../pages/landing.php">Cancel</a> <input type="submit" name="forgot_pass_button" value="Submit">
                </td>
            </tr>
        </table>
     </form>
     </center>
    </body>
</html>