<?php
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Lawyer - Report and Reviews</title>
        <link rel="stylesheet" type="text/css" href="../../css/print_report.css">
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
		<a href = "admin_dashboard.php"?>Back</a>