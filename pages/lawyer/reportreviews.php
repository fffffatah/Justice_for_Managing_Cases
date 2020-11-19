<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Lawyer - Report and Reviews</title>
        <link rel="stylesheet" type="text/css" href="../../css/lawyer_reportreviews.css">
    </head>
    <body>
        <center>
            <table id="report-box-style">
                <h4>Generate Reports</h4>
                <tr>
                    <td align="right">Monthly:</td>
                    <td align="left"><input type="submit" name="print_button_monthly" value="Print"></td>
                </tr>
                <tr>
                    <td align="right">Weekly:</td>
                    <td align="left"><input type="submit" name="print_button_weekly" value="Print"></td>
                </tr>
                <tr>
                    <td align="right">Money Transaction:</td>
                    <td align="left"><input type="submit" name="print_button_money" value="Print"></td>
                </tr>
                <tr>
                    <td align="right">Hearing:</td>
                    <td align="left"><input type="submit" name="print_button_hearing" value="Print"></td>
                </tr>
                <tr>
                    <td align="right">Case Stats:</td>
                    <td align="left"><input type="submit" name="print_button_stat" value="Print"></td>
                </tr>
            </table>
        </center>
        <center>
            <table border="2" id="review-box-style">
                <h4>Reviews</h4>
                <tr>
                    <td><b>SR. NO</b></td>
                    <td><b>REVIEW</b></td>
                    <td><b>RATING</b></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>demo</td>
                    <td><b>3/5</b></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>demo</td>
                    <td>5/5</td>
                </tr>
            </table>
        </center>
    </body>
</html>