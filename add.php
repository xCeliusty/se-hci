
    <?php
    //  include("includes/head.php");
	// include("classes/DB.php");
	
	include("classes/Addnewpatient.php");
	include("classes/Login.php");
     if(!Login::isLoggedIn()) {
        die("Not Logged In");
      }


      $allusers = DB::query("SELECT * FROM users");

      if(isset($_POST['create'])) {
          $user = $_POST['user'];
          $date= $_POST['date'];
          $time = $_POST['time'];

          DB::query('INSERT INTO appointments VALUES(NULL,:user_id,:date,:time)',array(':user_id'=>$user,':date'=>$date,':time'=>$time));


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
		<title>Add Appointment</title>
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

	.form input , select{
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

?>
			<div class="form">
			<h1>Add New Appointment </h1>
				<form method="POST" action="add.php">
					<div class="flex">
						<div class="group-input fl-1 mr-10"><p>User Name</p>
							<select name="user" id="" style="width:100%">
                            <?php
                                foreach($allusers as $user) {
                            
                            ?>

                            <option value="<?php echo $user['id']; ?>"><?php echo $user['fname'].' '.$user['lname']; ?></option>
                            <?php } ?>
                            </select>
						</div>
					</div>
					<div class="flex">
						<div class="group-input fl-1 mr-10"><p>Phone number</p>
							<input type="date" name="date" placeholder="Enter your Phone Number"> 
						</div>
						<div class="group-input fl-1"><p>Date of birth</p>
							<input type="time" name="time" placeholder="Enter your date of birth"> 
						</div>
					</div>
                    
                    
					<div class="group-btn">
						<input  type="submit" class="bButton" name="create" value="Add">
						
				</form>
			</div>
	</body>

	</html>
	</html>