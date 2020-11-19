<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
	<head>
		<title>Lawyer - Dashboard</title>
		<link rel="stylesheet" type="text/css" href="../../css/lawyer_dashboard.css">
	</head>
	<body>
		<center>
		<h1>Lawyer - Dashboard</h1>
		<table border="2" id="lawyer-dashboard-style">
            <tr>
                <td align="left"><a href="addcase.php">Add New Case</a></td>
				<td><a href="clients.php">Clients</a></td>
				<td><a href="meetings.php">Clients</a></td>
				<td></td>
				<td></td>
				<td></td>
				<td align="right"><a href="../landing.php">Logout</a></td>
            </tr>
            <tr>
                <td><b><u>SR.NO</u></b></td>
                <td><b><u>CASE TITLE</u></b></td>
                <td><b><u>COMPLAINANT</u></b></td>
                <td><b><u>CLIENT</u></b></td>
				<td><b><u>NEXT HEARING</u></b></td>
				<td><b><u>STATUS</u></b></td>
                <td><b><u>DELETE</u></b></td>
            </tr>
            <tr>
				<td>1</td>
                <td><a href="casedetails.php">Demo Case 1</a></td>
                <td>John</td>
                <td>Jane</td>
				<td>12-12-2020</td>
				<td>Hearing Done(1st)</td>
                <td><img src="../../assets/delete.png"></td>
			</tr>
			<tr>
				<td>2</td>
                <td><a href="casedetails.php">Demo Case 2</a></td>
                <td>Jack</td>
                <td>James</td>
				<td>12-12-2020</td>
				<td>Postponed</td>
                <td><img src="../../assets/delete.png"></td>
			</tr>
			<tr>
				<td>3</td>
                <td><a href="casedetails.php">Demo Case 3</a></td>
                <td>Jimmy</td>
                <td>Jade</td>
				<td>12-12-2020</td>
				<td>Finished</td>
                <td><img src="../../assets/delete.png"></td>
			</tr>
        </table>
		</center>
	</body>
</html>