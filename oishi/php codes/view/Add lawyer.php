<?php

$Firstname="";
$err_Firstname="";
$lastname="";
$err_lastname="";
$Email="";
$err_Email="";
$Address="";
$err_Address=""





?>
<html>
<head>
    <title>Lawyer Lists</title>
	
	 <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
		 <div class="payment">
		  <form action="" method="post"></form>
		  <table>
		   <tr>
		 <td <td align="right" id="registration-box-style">
		 <center><h3 style="color:Green;">lawyer Information</h3></center>
		 </td>
		 </tr>
		 
		 
		 
			        <tr>
						<td>First Name:</td>
						<td><span style="color:red;"><?php echo $err_Firstname;?></span></td>
					</tr>
					
					
					<tr>
						<td>last Name:</td>
						<td><span style="color:red;"><?php echo $err_lastname;?></span></td>
					</tr>
					
					<tr>
						<td>Email:</td>
						<td><span style="color:red;"><?php echo $err_Email;?></span></td>
					</tr>
					
					<tr>
						<td>Address:</td>
						<td><span style="color:red;"><?php echo $err_Address;?></span></td>
					</tr>
		 
		 
		 
		 
		 
		 
		 
		 
		 <table>
		 <h5><a href='client1.php'>Go back</a></h5>
		 </form>
		  </div>

    

 
 


  

 

</body>
</html>