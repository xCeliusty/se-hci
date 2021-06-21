
    <?php
     include("includes/head.php");
     if(!Login::isLoggedIn()) {
        die("Not Logged In");
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
		<title>Add patient</title>
	</head>

	<body id="signupBody">
	<style>

	.form {
		width: 500px;
		height: 100%;
		margin: 0 auto;
		background-color: #dbdbe5;
		border-radius: 10px;
		/* padding: 20px 10px; */
		border: 1px solid #eee;
		margin-bottom: 100px;
		/* background-position: center; */
		background-size: cover;
		background-repeat: no-repeat;
		box-shadow: 0px 10px 4px rgba(0, 0, 0, 0.05);
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
		/* width: 100%; */
		height: 50px;
		border-radius: 10px;
		border: 1px solid #eee;
		padding: 0 5px; /* Inner space inside the div */
		background-color: white;
		font-family: 'Roboto Slab', serif;  /* Font family  */
		outline: none;
		color: black;
		/* margin: 5px 10px; */
	}

	.form input[type=text] , .form input[type=password] , .form input[type=email] {
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

	.group-input p {
		width: 100%;
	}

	.form form {
		width: 100%;
		margin: 0 auto;
	}
	</style>
<?php include("includes/header.php");
if (isset($_POST['create'])) 
{
	//  $fname = $POST['fname'];
	//  $lname = $POSTS['lname'];
	//  $phonenumber = $POSTS['phonenumber'];
	//  $dateofbirth = $POSTS['dateofbirth'];
	//  $adress = $POSTS['adress'];
	//  $gender = $POSTS['gender'];
	//  $reason = $POSTS['reason'];
	//  $healthcare = $POSTS['healthcare'];
	add_new_patient::createpatient($_POST);

}
?>
			<div class="form">
			<h1>Add patient </h1>
				<form method="POST" action="healthrecord.php">
					<div class="flex">
						<div class="group-input fl-1 mr-10"><p>First Name</p>
							<input type="text" name="fname" placeholder="Enter your first name"> 
						</div>
						<div class="group-input fl-1"><p>Last Name</p>
							<input type="text" name="lname" placeholder="Enter your last name"> 
						</div>
					</div>
					<div class="flex">
						<div class="group-input fl-1 mr-10"><p>Phone number</p>
							<input type="text" name="PhoneNumber" placeholder="Enter your Phone Number"> 
						</div>
						<div class="group-input fl-1"><p>Date of birth</p>
							<input type="text" name="Dateofbirth" placeholder="Enter your date of birth"> 
						</div>
					</div>
					<div class="flex">
						<div class="group-input fl-1 mr-10"><p>Address</p>
							<input type="text" name="Address" placeholder="Enter your address"> 
						</div>
						<div class="group-input fl-1"><p>Reason of visit</p>
							<input type="text" name="Reasonofvisit" placeholder="Enter your reason of visit"> 
						</div>
					</div>
					<div class="flex">
						<div class="group-input fl-1"><p>Health care</p>
							<input type="text" name="healthcare" placeholder="Enter your health"> 
						</div>
						<div class="fl-1">
						<p>Gender</p>
							<div class="group-input flex"><br>
							<p>
								<input type="radio" name="gender" placeholder="Enter your Gender"> Male
							</p>
							<p>
								<input type="radio" name="gender" placeholder="Enter your Gender"> Female
							</p>
								
							</div>
						</div>
					</div>
                    
                    
					<div class="group-btn">
						<input type="submit" class="bButton" name="create" value="Done"> </div>
						
				</form>
			</div>
	</body>

	</html>
	</html>