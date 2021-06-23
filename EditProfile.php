<?php
include("includes/header.php");
include("classes/DB.php");
include("classes/Login.php");
session_start();
$user_id = Login::isLoggedIn();
$data = DB::query('SELECT fname, lname, email FROM users WHERE id=:id', array(':id'=>$user_id));

?>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Link to the google font  -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">
		<!-- Link to the CSS file  -->
		<link rel="stylesheet" href="layouts/css/editprofile.css">
		<title>edit profile</title>
	</head>
<body id="editprofile">
<style>
input[type=text], input[type=password], select, textarea {
  width: 20%; /* Full width */
position:relative; left:780px;
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 15px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=file] {
  background-color: 21222D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}input[type=submit] {
  background-color: 21222D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color:21222D;
}input[type=file]:hover {
  background-color: 21222D;
}



label{
  position:relative; left:290px;

color:black;
}
</style>
</head>


		

<div class="container">


<h1>Edit Profile</h1>

  <!-- <img id="previewImg" src="" alt="Placeholder"style="position:relative; left:480px;"><br> -->
   <p>     <form method="POST" action="Home.php" enctype="multipart/form-data">   
   
   
<!-- <input type="file" name="img" style="position:relative; left:300px;background-color: #45a049;" onchange="previewFile(this);"> -->
<!-- <label for="img">Select Profile photo:</label><br>
    <input type="file" id="img" style="position:relative; left:300px;background-color: 21222D;" onchange="previewFile(this);" name="img" accept="image/*"> -->

        </p>
      
      



 <label for="First name">First name</label>
  <input type="text" id="fname" name="name" placeholder="Your name.."style="position:relative; left:365px;">
  <br>
  <label for="Last name">last name</label>
  <input type="text" id="lname" name="name" placeholder="Last name.."style="position:relative; left:365px;">
  <br>

  <label for="Email">Email</label>
  <input type="text" id="email" name="Email" placeholder="Your Email.."style="position:relative; left:400px;">
  <br>

  <label for="Password">Password</label>

  <input type="password" id="password" name="password" placeholder="Your password.." value=""style="position:relative; left:370px;"><br>

  <input  name="submit"type="submit" value="Update"style="position:relative; left:500px;"> 

</form>
</div>


</body>