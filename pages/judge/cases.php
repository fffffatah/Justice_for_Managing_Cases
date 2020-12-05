<?php
    if(!isset($_COOKIE["login_email"])){
	}
?>
<html>
	<head>
		<title>view cases</title>
		<link rel="stylesheet" type="text/css" href="../../css/judge.css">
	</head>
	<body>
		<center>
		<h1><u>CASES</u></h1>
		<table border="2" id="view">
            <tr>
                <td><b><u>SR.NO</u></b></td>
                <td><b><u>CASE TITLE</u></b></td>
                <td><b><u>COMPLAINANT</u></b></td>
                <td><b><u>CLIENT</u></b></td>
				        <td><b><u>NEXT HEARING</u></b></td>
				        <td><b><u>STATUS</u></b></td>
                <td><b><u>Lawyer</u></b></td>
                <td><b><u>Judge</u></b></td>
                <td><b><u>Dismiss Case</u></b></td>
            </tr>
            <tr>
				<td>1</td>
                <td><a href="judge_cased.php">Demo Case 1</a></td>
                <td>John</td>
                <td>Jane</td>
			        	<td>12-12-2020</td>
				        <td>Hearing Done(1st)</td>
                <td>Ross</td>
                 <td>Alex</td>
                <td><img src="../../assets/delete.png"></td>
			</tr>
			<tr>
				<td>2</td>
                <td><a href="judge_cased.php">Demo Case 2</a></td>
                <td>Jack</td>
                <td>James</td>
				        <td>12-12-2020</td>
			       	  <td>Postponed</td>
                <td>Ross</td>
                <td>Alex</td>
                <td><img src="../../assets/delete.png"></td>
			</tr>
			<tr>
				<td>3</td>
                <td><a href="judge_cased.php">Demo Case 3</a></td>
                <td>Jimmy</td>
                <td>Jade</td>
				        <td>12-12-2020</td>
				        <td>Finished</td>
                <td>Ben</td>
                <td>Alex</td>
                <td><img src="../../assets/delete.png"></td>
			</tr>
        </table>
        <br>
          <a align="center" href="jud_dashboard.php">Back to the Dashboard</a>

		</center>

	</body>
</html>
