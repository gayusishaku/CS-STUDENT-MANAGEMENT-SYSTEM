<?php
	session_start();
	if($_SESSION["fname"] == "")
	{
		//header("Location: index.php");
	}
	else
	{
		header("Location: home.php");
	}
?>

<html>
<head>
	<title>CS Student Management System Group Chat</title>
	<script type="text/javascript">
		function redirr()
		{
			location.href = "index.php";
		}
	</script>
</head>

<body>
<center>

	<div id="main">
		
	
		<h1>
			<font style="color:red; font-family:Calibri;">CS Group - Chat</font>
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
					<a href="register.php"><input id="reg" type="button" value="Register" /></a>
					<input id="login" type="submit" value="log-in" />
				<hr color="black">
				<hr color="black">
			
			<a href="sis">
			<h3><p><font style="color:red; font-family:Calibri;">Back to Profile?</h3></a>
		
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