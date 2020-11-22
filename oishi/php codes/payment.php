<?php
$Due="";
$err_Due="";
$PaidAmount="";
$err_PaidAmount="";





?>
<html>
<head>
    <title>Payment Details</title>
	  <link rel="stylesheet" href="css/style.css">
  </head>
     <body>
        
		 <div class="payment">
		
		<form action="" method="post">
		  <table>
		
		
		 <tr>
		 <td <td align="right" id="registration-box-style">
		 <center><h3 style="color:Green;">Payment</h3></center>
		 </td>
		 </tr>
		 
		 <tr>
		     <td>Due:</td>
			 
			  <td><span style="color:red;"><?php echo $err_Due;?></span></td>
		 </tr>
				
				
		<tr>
			<td>Paid:Amount:</td>
			  <td><span style="color:red;"><?php echo $err_PaidAmount;?></span></td>
		</tr>
				
				
			
						
       
  
  </table>
  <h5><a href='client1.php'>Go back</a></h5>
  
  </form>
  </div>

 

</body>
</html>