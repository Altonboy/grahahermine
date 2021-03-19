<?php
session_start();

require '../assets/core/init.php';

if(logged_in() === TRUE) 
{
	header('location: Dashboard.php');
}
// form submitted
if($_POST) 
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username && $password) 
	{
		if(userExists($username) == TRUE) 
		{
			$login = login($username, $password);
			if($login) 
			{
				header('location: Dashboard.php');
				exit();
			} 
			else 
			{
				$notuserpass = true;
			}
		} 
		else
		{
			$nouser = true;
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"/>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			height: 100%;
			width: 100%;
			overflow: hidden;
			background: url("../assets/images/01.jpg") no-repeat center center fixed;
			-webkit-background-size: cover;
     		-moz-background-size: cover;
     		-o-background-size: cover;
     		background-size: cover;
     		white-space: normal;
		}

		input{
			width:93%;
  			margin:8px auto;
  			padding:10px;
  			background:#fff;
  			border-color: black;
  			color:#000;
  			font-weight:700;
  			letter-spacing:0.125em;
  			text-align:center;
		}

		button{
			width:100%;
			margin:1px auto;
			padding:10px;
			background:#fff;
			border: none;
			color:#2c2c2c;
			font-weight:700;
			letter-spacing:0.125em;
			text-align:center;
			text-transform:uppercase;
			cursor: pointer;
		}

		button:hover{
			background: #f0f0f0;
		}

		.header{
			width: 100%;
			height: auto;
			max-height: 
			margin: auto;
			text-align: center;
  			font-family: "Roboto", sans-serif;
  			font-size: 30px;
  			font-weight: bold;
  			color: rgb(0, 123, 59);
  			padding:8px;
  			background-color: white;
		}

		.loginheader{
			background-color: rgb(0, 123, 59);
			width: 100%;
			text-align: center;
			color: white;
			font-family: "Roboto", sans-serif;
			vertical-align: middle;
			font-size: 25px;
			padding: 10px 0px;
		}

		.footer{
			background-color: rgb(0, 123, 59);
			width: 100%;
			text-align: center;
			color: white;
			font-family: "Roboto", sans-serif;
			vertical-align: middle;
			font-size: 15px;
			padding: 10px 0px;
			bottom: 0;
			position: fixed;
		}

		.loginbg{
			width:30%;
			height: 100%;
  			right: 0px;
  			background:rgba(255,255,255, 0.9);
  			position: fixed;
		}

		.loginform{
			width:85%;
			height: 100%;
			margin:40% auto;
		}
	</style>
</head>
<body>
	<div class="header">
		<img src="../assets/image/logo_gh_2.png" style="max-height: 90px; vertical-align: middle;"> Rs. Graha Hermine
	</div>
	<div class="loginheader">
		Login
	</div>
	<div class="loginbg">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<div class="loginform">
				
					<input type="text" name="username" required autocomplete="off" placeholder="Username" id="username" /><br>
					<input type="password" name="password" id="password" required autocomplete="off" placeholder="Password" /><br>

					<?php if (isset($notuserpass) ) { ?>
						<p>Incorrect Username / Password!</p>
					<?php } ?>

					<?php if (isset($nouser) ) { ?>
						<p>Username doesn't exist!</p>
					<?php } ?>

					<br>
					<button type="submit">LOGIN</button>
				
			</div>
		</form>
		</div>
	<div class="footer">
		COPYRIGHT
	</div>
</body>
</html>