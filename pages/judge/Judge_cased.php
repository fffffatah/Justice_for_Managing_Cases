<?php
    include_once "../../php_codes/lawyer_casedetails_validation.php";
    if(!isset($_COOKIE["login_email"])){

	}
?>
<html>
    <head>
        <title>Case Details</title>
        <link rel="stylesheet" type="text/css" href="../../css/lawyer_case_details.css">
    </head>
    <body>
        <center>
            <h1><u>Case Details</u></h1>
            <form action="" method="POST">
                <table id="case-details-style">
                <tr>
                        <td align="right">Case Title:</td>
                        <td align="left"><textarea>demo description from db</textarea></td>
                    </tr>
                    <tr>
                        <td align="right">Case Description:</td>
                        <td align="left"><textarea>demo description from db</textarea></td>
                    </tr>


                    <tr>
                        <td align="right"> Hearing Date:</td>
                        <td align="left">10-12-2020</td>
                    </tr>
                    <tr>
                        <td align="right">Initial Status:</td>
                        <td align="left">Postponed</td>

                    </tr>
                    <tr>
                        <td align="right">Lawyer:</td>
                        <td align="left">Ross</td>

                    </tr>
                    <tr>
                      <tr>
                          <td align="right">Change Lawyer:</td>
                          <td align="left">
                              <select name="initial_status">
                                  <option disabled>Lawyer</option>
                                  <option>Ross</option>
                                  <option>Ben</option>
                                  <option>Sam</option>
                              </select>
                          </td>
                      </tr>
                      <tr>
                        <td><a href="cases.php">Back</a></td>
                        <td align="right"><input type="submit" name="lawyer_button" value="Update"><br><br></td>
                      </tr>

                </table>
            </form>
        </center>
    </body>
</html>
