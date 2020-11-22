<?php
       include_once"../validation/Edit_profile_validation.php";

?>

<<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
	    
		<div class="Editprofile">
        <center>
            <form  action="" method="post">
                <table>
                    <tr >
                        <td align="right" id="registration-box-style">
                            <center><h4 style="color:Green;">Edit Profile</h4></center>
                            <label for="profile">Profile Picture: </label><input type="file" name="reg_pp" accept="image/*"><span style="color:red;">*<?php echo $err_reg_pp;?></span><br><br>
                            <label for="fullname">Full Name: </label><input type="text" name="reg_fullname" placeholder="Full Name" value="<?php echo $reg_fullname; ?>"><span style="color:red;">*<?php echo $err_reg_fullname;?></span><br><br>
                            <label for="username">User Name: </label><input type="text" name="reg_username" placeholder="User Name" value="<?php echo $reg_username; ?>"><span style="color:red;">*<?php echo $err_reg_username;?></span><br><br>
                            <label for="email">Email: </label><input type="text" name="reg_email" placeholder="Email" value="<?php echo $reg_email; ?>"><span style="color:red;">*<?php echo $err_reg_email;?></span><br><br>
                            <label for="phone">Phone: </label><input type="number" name="reg_phone" placeholder="Phone Number" value="<?php echo $reg_phone; ?>"><span style="color:red;">*<?php echo $err_reg_phone;?></span><br><br>
                            <label for="password">Password: </label><input type="password" name="reg_pass" placeholder="Password"><span style="color:red;">*<?php echo $err_reg_pass;?></span><br><br>
                            
                            <label for="nid">NID: </label><input type="number" name="reg_nid" placeholder="NID" value="<?php echo $reg_nid; ?>"><span style="color:red;">*<?php echo $err_reg_nid;?></span><br><br>
                            <label for="birthday">Birthday: </label><input type="date" name="reg_dob" value="<?php echo $reg_dob; ?>"><span style="color:red;">*<?php echo $err_reg_dob;?></span><br><br>
                            <label for="gender">Gender: </label><input type="radio" name="reg_gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female<span style="color:red;">*<?php echo $err_reg_gender;?></span><br><br>
                            <label for ="address">City: </label><input type="text" name="city" placeholder="City"><span style="color:red;">*<?php echo $err_reg_city;?></span><br><br>
                            <label for ="address">State:<input type="text" name="state" placeholder="State"><span style="color:red;">*<?php echo $err_reg_state;?></span><br><br>
                            <label for ="address">Zip/Postal:<input type="text" name="zip" placeholder="postal/Zip-Code"><span style="color:red;">*<?php echo $err_reg_zip;?></span><br><br>
                              <input type ="submit" name ="reg_button" value ="Save">
                        </td>

                    </tr>
                </table>
            </form>
			</div>
        </center>
    </body>
</html>