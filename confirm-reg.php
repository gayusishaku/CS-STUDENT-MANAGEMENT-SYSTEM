<?php
include("connect.php");

$uname = $_REQUEST["username"];
$pword = $_REQUEST["password"];
$cpword = $_REQUEST["cpassword"];
$lname = $_REQUEST["lname"];
$fname = $_REQUEST["fname"];

// echo $uname;
// echo $pword;
// echo $cpword;
// echo $lname;
// echo $fname;

if( ($uname == "") || ($pword == "")  || ($cpword == "")  || ($lname == "")  || ($fname == "") )
{
	session_start();
	$_SESSION["reg-failed"] = "no";
	header("Location: registerchat.php");
}
else
	{
		if($pword == $cpword)
		{
			//add account
			$add = mysqli_query($conn,"INSERT INTO userstb VALUES('','$uname','$pword','$lname','$fname') ");

			//add theme
			$addclr = mysqli_query($conn,"INSERT INTO colortb VALUES('','$uname','skyblue','white') ");
			
			$_SESSION["reg-success"] = "yes";
			if($add)
			{
				//mysqli_query($conn,$add);
				//mysqlii_execute($add);
				$_SESSION["reg-success"] = "yes";
				$_SESSION['login-failed'] = "clear";
				header("Location: loginchat.php");
			}
			
		}
		else
			{
				session_start();
				$_SESSION['login-failed'] = "clear";
				$_SESSION["reg-success"] = "no";
				header("Location: register.php");
			}
	}

?>