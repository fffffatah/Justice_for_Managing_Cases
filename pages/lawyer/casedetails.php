<?php
    include_once "../../php_codes/lawyer_casedetails_validation.php";
    if(!isset($_COOKIE["login_email"])){
		header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Lawyer - Case Details</title>
        <link rel="stylesheet" type="text/css" href="../../css/lawyer_case_details.css">
    </head>
    <body>
        <center>
            <h1>Case Details</h1>
            <form action="" method="POST">
                <table id="case-details-style">
                <tr>
                        <td align="right">Case Title:</td>
                        <td align="left"><input type="text" name="case_title" value="<?php echo "demo title from db"; ?>" placeholder="Case Title"><span style="color:red;">*<?php echo $err_case_title;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Case Description:</td>
                        <td align="left"><textarea name="case_description" value="<?php echo "demo description from db"; ?>" placeholder="Case Description"></textarea><span style="color:red;">*<?php echo $err_case_description;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Attach Document:</td>
                        <td align="left"><input type="file" name="add_doc" value="<?php echo "demo_doc.pdf"; ?>"><span style="color:red;">*<?php echo $err_add_doc;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Date Updated:</td>
                        <td align="left"><input type="date" name="date_added" value="<?php echo date(); ?>"><span style="color:red;">*<?php echo $err_date_added;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Hearing Date:</td>
                        <td align="left"><input type="date" name="hearing_date" value="<?php echo "11-11-2020"; ?>"><span style="color:red;">*<?php echo $err_hearing_date;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Initial Status:</td>
                        <td align="left">
                            <select name="initial_status">
                                <option disabled>Select Status</option>
                                <option>Hearing Done(1)</option>
                                <option selected>Hearing Done(2)</option>
                                <option>Finished</option>
                                <option>Postponed</option>
                            </select><span style="color:red;">*<?php echo $err_initial_status;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Close Case:</td>
                        <td align="left">
                            <select name="closing_status">
                                <option disabled>Select Closing Status</option>
                                <option>Won</option>
                                <option>Lost</option>
                                <option>Running</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Comment:</td>
                        <td align="left"><textarea name="closing_comment" placeholder="Closing Comment"></textarea></td>
                    </tr>
                    <tr>
                        <td><a href="dashboard.php">Cancel</a></td>
                        <td align="right"><input type="submit" name="update_case_button" value="Update"><br><br></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>