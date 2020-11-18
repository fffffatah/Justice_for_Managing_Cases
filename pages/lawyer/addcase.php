<?php
    include_once "../../php_codes/lawyer_addcase_validation.php";
    if(!isset($_COOKIE["login_email"])){
		//header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Lawyer - Add Case</title>
        <link rel="stylesheet" type="text/css" href="../../css/lawyer_addcase.css">
    </head>
    <body>
        <center>
            <h1>Add New Case</h1>
            <form action="" method="POST">
                <table id="add-case-style">
                    <tr>
                        <td align="right">Case Title:</td>
                        <td align="left"><input type="text" name="case_title" value="<?php echo $case_title; ?>" placeholder="Case Title"><span style="color:red;">*<?php echo $err_case_title;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Case Description:</td>
                        <td align="left"><textarea name="case_description" value="<?php echo $case_description; ?>" placeholder="Case Description"></textarea><span style="color:red;">*<?php echo $err_case_description;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">NID (Complainant)</td>
                        <td align="left"><input type="number" name="case_complainant_nid" value="<?php echo $case_complainant_nid; ?>" placeholder="Case Title"><span style="color:red;">*<?php echo $err_case_complainant_nid;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">NID (Client)</td>
                        <td align="left"><input type="number" name="case_client_nid" value="<?php echo $case_client_nid; ?>" placeholder="Case Title"><span style="color:red;">*<?php echo $err_case_client_nid;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Attach Document:</td>
                        <td align="left"><input type="file" name="add_doc"><span style="color:red;">*<?php echo $err_add_doc;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Date Added:</td>
                        <td align="left"><input type="date" name="date_added"><span style="color:red;">*<?php echo $err_date_added;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Hearing Date:</td>
                        <td align="left"><input type="date" name="hearing_date"><span style="color:red;">*<?php echo $err_hearing_date;?></span></td>
                    </tr>
                    <tr>
                        <td align="right">Initial Status:</td>
                        <td align="left">
                            <select name="initial_status">
                                <option disabled selected>Select Status</option>
                                <option>Hearing Done(1)</option>
                                <option>Hearing Done(2)</option>
                                <option>Finished</option>
                                <option>Postponed</option>
                            </select><span style="color:red;">*<?php echo $err_initial_status;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="dashboard.php">Cancel</a></td>
                        <td align="right"><input type="submit" name="add_case_button" value="Add"><br><br></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>