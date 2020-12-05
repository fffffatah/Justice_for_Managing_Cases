<?php
    if(!isset($_COOKIE["login_email"])){
	}
?>
<html>
	<head>
		<title> judge dashboard</title>
    <link rel="stylesheet" type="text/css" href="../../css/judge.css">


	</head>
	<body>
    <header>
   <a href="../landing.php" > <h3>Logout</h3></a>
</header>
		<center>
		<h1 style="color:#64a859"><u>Welcome To Judge Dashboard</u></h1><br>
    <a href="cases.php"> <h3>View cases</h3></a><br><br>
    <a href=""><h3>Communicate With Client</h3></a><br><br>
    <input type="text" name="" placeholder="search for client and lawyer" class="search">
    <button  type="button" class="btn">Search</button>
		</center>

    <div class="footer">
      <div class="footer">
    <p>justice</p>
  </div>
  </div>

	</body>
</html>
