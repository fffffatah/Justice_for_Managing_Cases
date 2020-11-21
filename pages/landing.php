<?php
    include_once "../php_codes/landing_validation.php";
?>
<html>
    <head>
        <title>Justice - for Managing Cases</title>
        <link rel="stylesheet" type="text/css" href="../css/landing.css">
    </head>
    <body>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><img src="../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="center" id="login-box-style">
                            <h4>Login</h4>
                            <input type="text" name="login_email" placeholder="Email" value="<?php echo $login_email;?>"><span style="color:red;">*<?php echo $err_login_email;?></span><br><br>
                            <input type="password" name="login_pass" placeholder="Password" value="<?php echo $login_pass;?>"><span style="color:red;">*<?php echo $err_login_pass;?></span><br>
                            <a href="forgot_pass.php">Forgot password?</a><br><br>
                            <input type="submit" name="login_button" value="Login">
                        </td>
                        <td align="center" id="signup-box-style">
                            <h4>Signup</h4>
                            <input type="submit" name="signup_lawyer_button" value="As Lawyer"><br><br>
                            <input type="submit" name="signup_complainant_button" value="As Complainant"><br>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>
