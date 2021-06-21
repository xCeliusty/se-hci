<?php
include("classes/User.php");

if(isset($_POST['success'])){
    

    User::sendMessage($_POST);
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="layouts/css/contact.css">
<link rel="stylesheet" type="text/css" href="layouts/css/style.css">

<style>
body {
  background-color: white;
}
h1{
	text-algin:center;
	/* margin-left:600px; */
	color:white;
	
}
h2{
	color:black;
	/* margin-left:80px; */
	margin-top:10px;
	text-align: center;
	
}
h4{
	color:black;
	/* margin-left:80px; */
	margin-bottom:10px;
	text-align: center;
  
}
        

</style>
</head>
<body id="form">
<?php
   include("includes/header.php");?>


<p class="example1"></p>


<?php
if (isset($mess) == 1) {
	echo "Success";
}else{
	echo "";
}
?>

<section class="contact">
<h2>Send Message</h2>
<h4>Make and appointment using the form or send us an email  </h4>
<div class="contactForm flex">

<form method="post" class="fl-1">
	<div class="checkbox">
	<input type="radio"required="required" name = "radio" value = "Emergency">
	<span>Emergency</span>
	<input type="radio" required="required" name = "radio" value = "Regular">
	<span>Regular</span>
	</div>

	<div class="inputBox">
	<input type="text" required="required" name = "fname">
	<span>Full Name</span>
	</div>
	<div class="inputBox">
	<input type="text" required="required" name = "phone">
	<span>Phone</span>
	</div>
	<div class="inputBox">
	<input type="text" required="required" name = "subject">
	<span>Subject</span>
	</div>
	<div class="inputBox">
	<input type="text" required="required" name = "email">
	<span>Email</span>
	</div>
	<div class="inputBox">
	<textarea required="required" name = "message"></textarea>
	<span>Type your message.....</span>
	</div>
	<div class="inputBox">
	<input type="submit" name="success"   value="Make an appointment">

	</div>
</form>
</div>
</div>

</section>
</body>
<!--End of Contact form-->


</html>
