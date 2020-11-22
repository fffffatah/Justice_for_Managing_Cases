<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="css/style.css">
</head>
    <body>
	  
	  <div class="profile">
	     <form action="" method="post">
		     <table>
			 <tr>
		 <td <td align="right" id="registration-box-style">
		  <center><h3 style="color:Green;">Profile</h3></center>
		 </td>
		 </tr>
			 
			 <?php
							 
				$clients = simplexml_load_file("client.xml");
				$data = $clients->client;
				$name="";
				$uname="";
				$email="";
				$phone="";
				$password="";
				$nid="";
				$birthday="";
				$gender="";
				$address="";
			
				$name=$data->name;
				$uname=$data->username;
				$email=$data->email;
				$phone=$data->phone;
				$password=$data->password;
				$nid=$data->nid;
				$birthday=$data->birthday;
				$gender=$data->gender;
				$address=$data->address;

				echo "
				<tr>
				     <td>Full Name:</td>
					 <td>$name</td>
				</tr>
				<tr>
				     <td>User Name:</td>
					 <td>$uname</td>
				</tr>
				<tr>
				     <td>Email:</td>
					 <td>$email</td>
				</tr>
				<tr>
				     <td>Phone:</td>
					 <td>$phone</td>
				</tr>
				<tr>
				     <td>Password:</td>
					 <td>$password</td>
				</tr>
				<tr>
				     <td>NID:</td>
					 <td>$nid</td>
				</tr>
				<tr>
				     <td>Birthday:</td>
					 <td>$birthday</td>
				</tr>
				<tr>
				     <td>Gender:</td>
					 <td>$gender</td>
				</tr>
				<tr>
				     <td>Address:</td>
					 <td>$address</td>
				</tr>";
				?>
					<tr>
						<td colspan="2" align="center">
							  <a href="Edit Profile.php"> <input type ="button" name ="" value ="Edit Profile"></a> 
						</td>
					</tr>
			 </table>
			  <h5><a href='client1.php'>Go back</a></h5>
		 </form>
		 </div>
    </body>

</html>

