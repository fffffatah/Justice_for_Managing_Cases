<?php
    include_once "../../php_codes/lawyer_clientdetails_validation.php";
    if(!isset($_COOKIE["login_email"])){
		//header("Location: ../landing.php");
	}
?>
<html>
    <head>
        <title>Lawyer - Client Details</title>
    </head>
    <body>
        <center>
        <table id="clientdetails-style">
            <h1>Demo client details</h1>
            <tr>
                <td>Name: John Doe</td>
                <td>NID: 1231231</td>
                <td>Current Case: demo case</td>
                <td>Status:
                    <select name="client_status">
                        <option disabled selected>Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <form action="" method="POST">
                        <table id="attach-doc-style">
                            <h4>Documents</h4>
                            <tr>
                                <td>Document(1):</td>
                                <td><input type="file"></td>
                            </tr>
                            <tr>
                                <td>Document(2):</td>
                                <td><input type="file"></td>
                            </tr>
                            <tr>
                                <td>Document(3):</td>
                                <td><input type="file"></td>
                            </tr>
                            <tr>
                                <td>Document(4):</td>
                                <td><input type="file"></td>
                            </tr>
                            <tr>
                                <td>Document(5):</td>
                                <td><input type="file"></td>
                            </tr>
                            <tr>
                                <td><!--EMPTY--></td>
                                <td><input type="submit" name="attach_doc_button" value="Attach"></td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="" method="POST">
                        <table id="meeting-box-style">
                            <h4>Schedule A Meeting</h4>
                            <tr>
                                <td>Next Meeting: 11-11-2020</td>
                                <td><!--EMPTY--></td>
                            </tr>
                            <tr>
                                <td align="right">Meeting Title:</td>
                                <td align="left"><input type="text" name="meeting_title" placeholder="Title" value="<?php echo $meeting_title;?>"><span style="color:red;">*<?php echo $err_meeting_title;?></td>
                            </tr>
                            <tr>
                                <td align="right">Meeting Descrition:</td>
                                <td align="left"><textarea name="meeting_description" placeholder="Description" value="<?php echo $meeting_description;?>"></textarea><span style="color:red;">*<?php echo $err_meeting_description;?></td>
                            </tr>
                            <tr>
                                <td align="right">Meeting Date:</td>
                                <td align="left"><input type="date" name="meeting_date"><span style="color:red;">*<?php echo $err_meeting_date;?></td>
                            </tr>
                            <tr>
                                <td><!--EMPTY--></td>
                                <td><input type="submit" name="schedule_meeting_button" value="Schedule"></td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
        </center>
        <a href="clients.php">Back</a>
    </body>
</html>