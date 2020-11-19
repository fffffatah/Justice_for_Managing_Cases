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
                            <td>SR. NO</td>
                            <td>FULL NAME</td>
                            <td>CASES</td>
                            <td>STATUS</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>1</td>
                            <td>Active</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Doe</td>
                            <td>1</td>
                            <td>Inactive</td>
                        </tr>
                    </table>
                </td>
                <td align="center">
                    <h1>Payments</h1>
                    <table border="2">

                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>