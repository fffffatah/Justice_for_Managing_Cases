<?php
    include_once "../../php_codes/lawyer_clients_validation.php";
    if(!isset($_COOKIE["login_email"])){
		//header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Lawyer - My Clients</title>
        <link rel="stylesheet" type="text/css" href="../../css/lawyer_clients.css">
    </head>
    <body>
        <table>
            <tr>
                <td align="center">
                    <h1>My Clients</h1>
                    <table border="2">
                        <tr>
                            <td><b>SR. NO</b></td>
                            <td><b>FULL NAME</b></td>
                            <td><b>CASES</b></td>
                            <td><b>STATUS</b></td>
                            <td><b>REMOVE</b></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="clientdetails.php">John Doe</a></td>
                            <td>1</td>
                            <td>Active</td>
                            <td><img src="../../assets/delete.png"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="clientdetails.php">Jane Doe</a></td>
                            <td>1</td>
                            <td>Inactive</td>
                            <td><img src="../../assets/delete.png"></td>
                        </tr>
                    </table>
                </td>
                <td align="center">
                    <h1>Payments</h1>
                    <table border="2">
                        <tr>
                            <td><b>SR. NO</b></td>
                            <td><b>CLIENT NAME</b></td>
                            <td><b>CLIENT NID</b></td>
                            <td><b>PAID(BDT)</b></td>
                            <td><b>BALANCE(BDT)</b></td>
                            <td><b>DUE</b></td>
                            <td><b>DUE DATE</b></td>
                            <td><b>PAYMENT DATE</b></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Jane Doe</td>
                            <td>132131</td>
                            <td>30000</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11-11-2020</td>
                            <td>19-11-2020</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><!--EMPTY--></td>
                            <td><input type="number" name="client_pay_nid" placeholder="Client NID"></td>
                            <td><!--EMPTY--></td>
                            <td><!--EMPTY--></td>
                            <td><input type="number" name="client_pay_due" placeholder="Due Amount"></td>
                            <td><input type="date" name="client_pay_due_date"></td>
                            <td><input type="submit" name="add_pay_button" value="Add"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table>
            <h1>Clients That Wants To Hire You</h1>
            
        </table>
    </body>
</html>