<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Top Trending Lawyer</title>
        <link rel="stylesheet" type="text/css" href="../../css/top_trending_lawyer.css">
    </head>
	<body>
	    <center>
            <table border="2" id="review-box-style">
                <h4>Top Rated</h4>
                <tr>
                    <td><b>SR. NO</b></td>
                    <td><b>REVIEW</b></td>
                    <td><b>RATING</b></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Nurul Haque</td>
                    <td><b>5/5</b></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nurul Bhuian</td>
                    <td>5/5</td>
                </tr>
            </table>
        </center>
        <a href="admin_dashboard.php">Back</a>
	
	</body>
</html>	