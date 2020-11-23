<?php
    include_once "../../php_codes/new_admin_validation.php";
?>

<html>
    <head>
        <title>ADMIN - Registration</title>
        <link rel="stylesheet" type="text/css" href="../../css/admin_registration.css">
    </head>
    <body>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><img src="../../assets/justicelogo.png"; width="380" height="480"></td>
                        <td align="right" id="registration-box-style">
                            <h4>ADMIN Registration</h4>
                            <label for="profile">Profile Picture: </label><input type="file" name="reg_pp" accept="image/*"><span style="color:red;">*<?php echo $err_reg_pp;?></span><br><br>
                            <label for="fullname">Full Name: </label><input type="text" name="reg_fullname" placeholder="Full Name" value="<?php echo $reg_fullname; ?>"><span style="color:red;">*<?php echo $err_reg_fullname;?></span><br><br>
                            <label for="username">User Name: </label><input type="text" name="reg_username" placeholder="User Name" value="<?php echo $reg_username; ?>"><span style="color:red;">*<?php echo $err_reg_username;?></span><br><br>
                            <label for="email">Email: </label><input type="text" name="reg_email" placeholder="Email" value="<?php echo $reg_email; ?>"><span style="color:red;">*<?php echo $err_reg_email;?></span><br><br>
                            <label for="phone">Phone: </label><input type="number" name="reg_phone" placeholder="Phone Number" value="<?php echo $reg_phone; ?>"><span style="color:red;">*<?php echo $err_reg_phone;?></span><br><br>
                            <label for="password">Password: </label><input type="password" name="reg_pass" placeholder="Password"><span style="color:red;">*<?php echo $err_reg_pass;?></span><br><br>
                            <label for="confirm_password">Confirm Password: </label><input type="password" name="reg_cpass" placeholder="Confirm Password"><span style="color:red;">*<?php echo $err_reg_cpass;?></span><br><br>
                            <label for="nid">NID: </label><input type="number" name="reg_nid" placeholder="NID" value="<?php echo $reg_nid; ?>"><span style="color:red;">*<?php echo $err_reg_nid;?></span><br><br>
                            <label for="birthday">Birthday: </label><input type="date" name="reg_dob"><span style="color:red;">*<?php echo $err_reg_dob;?></span><br><br>
                            <label for="gender">Gender: </label><input type="radio" name="reg_gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female<span style="color:red;">*<?php echo $err_reg_gender;?></span><br><br>
                            <label for="present_address">Present Address: </label><input type="text" name="pre_reg_address" placeholder="Address" value="<?php echo $pre_reg_address; ?>"><span style="color:red;">*<?php echo $pre_err_reg_address;?></span><br><br>
							<label for="permanent_address">Permanent Address: </label><input type="text" name="per_reg_address" placeholder="Address" value="<?php echo $per_reg_address; ?>"><span style="color:red;">*<?php echo $per_err_reg_address;?></span><br><br>
                            <a href="../../pages/landing.php">Cancel</a> <input type="submit" name="reg_button" value="Register"><br><br>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
		<a href="admin_dashboard.php">Back</a>
    </body>
</html>