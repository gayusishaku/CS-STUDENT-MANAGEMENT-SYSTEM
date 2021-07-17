<?php
	session_start();
	if($_SESSION["fname"] == "")
	{
		//header("Location: index.php");
	}
	else
	{
		header("Location: homechat.php");
	}
?>

<html>
<head>
	<title>CS Student Management System Group Chat</title>
	<script type="text/javascript">
		function redirr()
		{
			location.href = "indexchat.php";
		}
	</script>
</head>

<body>

<center>

	<div id="main">
		
	
		<h1>
			<font style="color:red; font-family:Calibri;">CS Group - Chat</font>
			<p>
		</h1>
		
		<h4>
			<?php
				if($_SESSION['reg-success'] == "yes" && $_SESSION['login-failed'] == "clear" )
				{
					echo("/registration successful");
				}
				if($_SESSION['login-failed'] == "yes" && $_SESSION['reg-success'] = "clear")
				{
					echo("/login failed. Username and password not found");
				}
			?>
		</h4>
		
		<form action="confirm-login.php" method="POST">
			<table>
			<tr>
				<td>Enter Username:</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			
			
			
			<tr>
			
				<td><hr color="black"></hr> </td><td></td><td></td>
			</tr>
			
			<tr>
			
				<td>Enter password: </td><td>:</td><td><input class="txt" type="password" required name="password" /></td>
			</tr>
				
			<tr>
			
				<td><hr color="black"></hr> </td><td></td><td></td>
			</tr>
			
			<tr>
			
			<tr>
				<td colspan = "3" align="center">
					<a href="registerchat.php"><input id="reg" type="button" value="Register" /></a>
					<input id="login" type="submit" value="log-in" />
				<hr color="black">
				<hr color="black">
			
		
			
				<font style="color:green; font-family:Calibri;">For users to join the Group Chat, they have to create new accout for the chat.
				<font style="color:yellow; font-family:Calibri;">Sir you can use any of this usernames to <b>login:</b>
				<font style="color:green; font-family:tahoma;">1. sixtus, 2.saul and 3. solome.<p><font style="color:red; font-family:Calibri;">All passwords are the same as the user name. <i><font style="color:green; font-family:tahoma;">passwords</i></p>
				<a href="profile.php">
			<h3><p><font style="color:red; font-family:Calibri;">Back to Profile?</a>
			</h3>
		
				</td> 
			</tr>
		</form>
	</div>

</center>
	
</body>

</html>

<style>

h2
{
	color:green;
}
.txt
{
	border-radius:10px;
	border:1px;
	height:30px;
}
#a
{
	text-decoration:none;
}

#reg,#login
{
	width:110px;
	height:30px;
	border-radius:15px;
	border:0px;
	color:white;
}

#reg
{
	background:green;

}

#login
{
	background:skyblue;
}


#main
{
	height:auto;
	width:400px;
	border:2px white solid;
	float:center;
	margin-top:120px;
}
body
{
	background:black;
	color:white;
}
</style>
