<?php
    session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError){
			$users = simplexml_load_file($_SERVER['DOCUMENT_ROOT']."/xmldata/users.xml");
            $flag=false;
            $cookie_uname="";
            $user_type="";
			foreach($users as $user){
                if(strcmp($user->uname,$_POST["uname"])==0 && strcmp($user->pass,$_POST["pass"])==0){
                    $flag=true;
                    $cookie_uname=$user->uname;
                    $user_type=$user->type;
					break;
                }
			}			
			if(!$flag){
				echo "Invalid Credentials!";
			}
			else{
				session_start();
			    $_SESSION["uname"] = $cookie_uname;
                setcookie("uname",$cookie_uname,time() + 120);
                if(strcmp($user_type,"admin")){
                    header("Location: ".$_SERVER['DOCUMENT_ROOT']."/pages/admin/dashboard.php");
                }
                elseif(strcmp($user_type,"lawyer")){
                    header("Location: ".$_SERVER['DOCUMENT_ROOT']."/pages/lawyer/dashboard.php");
                }
                else{
                    header("Location: ".$_SERVER['DOCUMENT_ROOT']."/pages/complainant/dashboard.php");
                }
			}
		}
	}
	
?>