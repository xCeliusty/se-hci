<?php
	include("includes/head.php");

	if (isset($_POST['create'])) 
	{

		$email = $_POST['email'];
		$password = $_POST['password'];
		$date = date('Y-m-d H:i:s');

		if (DB::query('SELECT email FROM users WHERE email=:email', array(':email'=>$email)))
		{
			if (password_verify($password, DB::query('SELECT password FROM users WHERE email=:email', array(':email'=>$email))[0]['password']))
			{
		
				$cstrong = True;
				$token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
				$user = DB::query('SELECT id FROM users WHERE email=:email', array(':email'=>$email));
				$user_id = $user[0]['id'];
				DB::query('INSERT INTO login_tokens VALUES (\'\', :token, :user_id, :date)', array(':token'=>sha1($token), ':user_id'=>$user_id,':date'=>$date));
				echo '<script>alert("Logged In!")</script>';
				setcookie("USR", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
				setcookie("USR_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

				header('Location: healthrecord.php');
				exit;
			}
		}
	}
?>
     <!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Link to the google font  -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">
		<!-- Link to the CSS file  -->
		<link rel="stylesheet" href="layouts/css/style.css">
		<title>Dental clinic house goals</title>
	</head>
<body id="loginBody">
		<style>

			.form {
				width: 500px;
				height: 100%;
				margin: 0 auto;
				background-color: #dbdbe5;
				border-radius: 10px;
				padding: 20px;
				border: 1px solid #eee;
				margin-bottom: 100px;
				/* background-position: center; */
				background-size: cover;
				background-repeat: no-repeat;
			}

			form {
				width: 100%;
				height: 80%;
			
			}

			.form p {
				height: 20px;
			}

			.form .group-input {
				margin-bottom: 30px;
			}

			.form input {
				width: 100%;
				height: 50px;
				border-radius: 10px;
				border: 1px solid #eee;
				padding: 0 5px; /* Inner space inside the div */
				background-color: white;
				font-family: 'Roboto Slab', serif;  /* Font family  */
				outline: none;
				color: black;
				
			}

			.form input[type=text] , .form input[type=password] {
				box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.05);
			}

			.form .group-btn {
				width: 100%;
				text-align: center;
				margin-bottom: 30px;
			}

			.form .bButton {
				width: 120px;
				height: 40px;
				color: #ebf1f3;
				background-color:#21222d;
				border: 1px solid #6790a0;
				border-radius: 5px;
				padding 0 5px;
				cursor: pointer;
				transition: .3s all;
				text-align: center;
			}

			.checkInput {
				width: 10% !important;
				height: 20px !important;
				box-shadow: 0;
			}
		</style>
		<?php include("includes/header.php"); ?>
			<div class="form">
			<h1>login</h1>
				<form method="POST" action="logim.php">
					<div class="group-input">
						<input type="text" name="email" placeholder="Username.."> 
					</div>
					<div class="group-input">
						<input type="password" name="password" placeholder="Password..">
					</div>
						<div class="group-input flex" style="align-items: center;">
							<input type="checkbox" class="checkInput"> <p style="width:100%">Remember Me</p> 
						</div>
					
					<div class="group-btn">
						<input type="submit" class="bButton" name="create" value="Signin"> 
					</div>
						<a href="" class="ta-c"><h3>Forgot Your Password?<h3></a>
				</form>
			</div>
	</body>