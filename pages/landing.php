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
                            <input type="text" name="login-email" placeholder="Email"><br><br>
                            <input type="password" name="login-pass" placeholder="Password"><br>
                            <a href="forgot_pass.php">Forgot password?</a><br><br>
                            <input type="submit" name="login-button" value="Login">
                        </td>
                        <td align="center" id="signup-box-style">
                            <h4>Signup</h4>
                            <input type="submit" name="signup-lawyer-button" value="As Lawyer"><br><br>
                            <input type="submit" name="signup-complainant-button" value="As Complainant"><br>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>