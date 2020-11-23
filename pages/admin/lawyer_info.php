<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
	<head>
		<title>Lawyer Information</title>
		<link rel="stylesheet" type="text/css" href="../../css/lawyer_info.css">
	</head>
	<body>
		<center>
		<h1>Lawyer Information</h1>
		<table>
			<tr>
				<td align="left"><a href="add_lawyer.php">Add Lawyer</a></td>
		</table>
		<table border="2" id="lawyer-info">
            <tr>
                <td><b>ID. NO</b></td>
                <td><b>LAWYER NAME</b></td>
                <td><b>MOBILE NO</b></td>
                <td><b>NID</b></td>
                <td><b>REMOVE</b></td>
				<td><b>UPDATE</b></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Abul Kalam</td>
                <td>0199999999922</td>
                <td>199855764733</td>
                <td><img src="../../assets/delete.png"></td>
            </tr>
		</center>
		<a href="admin_dashboard.php">Back</a>
	</body>
</html>