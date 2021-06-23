<?php
include("user.php");

if(isset($_POST['success'])){
    $message = new User();
    $message->sendMessage($_POST);
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/s1.css">

<style>
body {
  background-color: white;
}
h1{
	text-algin:center;
	margin-left:600px;
	color:white;
	
}
h2{
	color:black;
	margin-left:80px;
	margin-top:10px;
}
h5{
	color:black;
	margin-left:80px;
	margin-bottom:10px;
}
        

</style>
</head>
<body>
<div class="header">
 
  <div class="header-right">
    
    <a>Contact US</a>
   
  </div>
</div>

<p class="example1"></p>
<h2>Send Message</h2>
<h5>make and appointment using the form or send us an email at </h5>



<section class="contact">

<div class="container">

<div class="contactForm">
<form method="post">
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
<div class="container">
  <img src="7.png" style="position:fixed; right:300px; bottom:30px; width:450px; height:450px; border:none;" >
  <img src="8.png" style="position:fixed; right:300px; bottom:500px; width:450px; height:90px; border:none;" >
  
 
</div>
</section>
</body>
<!--End of Contact form-->


</html>
