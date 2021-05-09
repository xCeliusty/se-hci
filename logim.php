

<?php 
   session_start(); 
?>
<?php

$server = "localhost";
$username = "root";
$password = "";
$DB = "";

$conn = mysqli_connect($server,$username,$password,$DB);
if (isset($_POST['login'])) 
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql= "SELECT email FROM signup WHERE email='{$email}'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) 
    {
        $sql2 = "SELECT password FROM register WHERE email = '{$email}'";
        $result2 = mysqli_query($conn,$sql2);
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
		<link rel="stylesheet" href="style.css">
		<title>login</title>
	</head>

	<body>
		
			<div class="form">
			<h1>login</h1>
			<h2>please fill in this form</h2>
				<form method="POST" action="login.php">
					<div class="group-input"> <b> <p></p></b>
						<input type="text" name="username" placeholder="Enter your username"> </div>
					<div class="group-input"> <b>  <p>username</p></b>
					<div class="group-input"> <b>  <p>Password</p></b>
						<input type="password" name="password" placeholder="Enter your password"> </div>
			    	<h5>I accept the Term of use & Privacy Policy</h5>
					<div class="group-btn">
						<input type="login" class="bButton" name="create" value="login"> </div>
						<h3>Lost your password?<h3>
				</form>
			</div>
	</body>