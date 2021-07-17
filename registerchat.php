<html>
<head>
	<title>CS Group Chat Registration Page</title>
	<script>
		function check()
		{
			var p1 = document.getElementById['p1'].value;
			var p2 = document.getElementById['p2'].value;

			if(p1 <> p2)
			{
				alert("Password not match.");
			}

		}
	</script>
</head>


<body>
<center>
	<div id="main">
		<h1>
			<font style="color:red; font-family:Calibri;">CS Group Chat Registration </font>
		</h1>
	
		<?php
		Session_start();

		$_SESSION["login-success"] = 0;
		
		if($_SESSION["reg-failed"] == 1)
			{
				print("*registration failed");
			}

		if($_SESSION["fname"] == "")
		{
			//header("Location: loginchat.php");
		}
		else
		{
			header("Location: homechat.php");
		}
		?>

		<form action="confirm-reg.php" method="POST">
			<table>
			<tr>
				<td class="align-right">Select Username</td><td>:</td><td><input class="txt" type="text" required name="username" /></td>
			</tr>
			<tr>
			
				<td><hr color="black"></hr> </td><td></td><td></td>
			</tr>
			<tr>
				<td class="align-right">Enter Password</td><td>:</td><td><input  id="p1" class="txt" type="password" required name="password" /></td>
			</tr>
			<tr>
			
				<td><hr color="black"></hr> </td><td></td><td></td>
			</tr>
			
			<tr>
				<td class="align-right">Retype Password</td><td>:</td><td><input  id="p2" class="txt" type="password" required name="cpassword" /></td>
			</tr>
			<tr>
			
				<td><hr color="black"></hr> </td><td></td><td></td>
			</tr>
		
			<tr>
				<td class="align-right">Enter Last Name</td><td>:</td><td><input class="txt" type="text" required name="lname" /></td>
			</tr>
			<tr>
			
				<td><hr color="black"></hr> </td><td></td><td></td>
			</tr>
			<tr>
				<td class="align-right">Enter First Name</td><td>:</td><td><input class="txt" type="text" required name="fname" /></td>
			</tr>
			<tr>
			
				<td><hr color="black"></hr> </td><td></td><td></td>
			</tr>
			<tr>
				<td colspan = "3" align="center">
					<a href="index.php"><input id="login" type="button" value="log-in"/></a>-
					<input id="reg" type="submit" value="register" onclick="return check()" />
				</td>
			</tr>
			</table>
		</form>
	</div>
</center>
</body>

</html>

<style>
.txt
{
	border-radius:4px;
	border:1px;
	height:30px;
}

.align-right
{
	text-align:right;
}
#a
{
	text-decoration:none;
}

#reg,#login
{
	width:110px;
	height:30px;
	border-radius:5px;
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