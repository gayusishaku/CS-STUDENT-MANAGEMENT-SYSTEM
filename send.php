<?php
include("connectchat.php");

$msg = $_REQUEST["txtarea"];

session_start();
$userid = $_SESSION["userid"];
$date = date("g:i a");

$send = mysqli_query($conn,"INSERT INTO chattb VALUES('','$userid','$msg','$date') ");

if($send)
{
	header("Location: homechat.php");
}

?>