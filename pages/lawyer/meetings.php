<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Lawyer - My Meetings</title>
        <link rel="stylesheet" type="text/css" href="../../css/lawyer_meetings.css">
    </head>
    <body>
        <center>
        <table border="2" id="meetings-style">
            <h1>My Meetings</h1>
            <tr>
                <td><b>SR. NO</b></td>
                <td><b>CLIENT NAME</b></td>
                <td><b>MEETING DATE</b></td>
                <td><b>MEETING TIME</b></td>
                <td><b>REMOVE</b></td>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>11-11-2020</td>
                <td>11-30-AM</td>
                <td><img src="../../assets/delete.png"></td>
            </tr>
        </table>
        </center>
        <a href="dashboard.php">Back</a>
    </body>
</html>