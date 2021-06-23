<?php
include("pmhd.php");

if(isset($_POST['success'])){
    $message = new pmhd();
    $message->sendMessage($_POST);
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css"  href="layouts/css/style.css">

<style>

h1{
	text-algin:center;
	margin-left:600px;
	color:white;
	
}
h2{
	color:white;
	margin-left:80px;
	margin-top:10px;
}
h6{
		width:250px;
			margin-left:700;
			position:top;
			
			padding:10px;
			font-size:18px;
			 position: absolute;
  left: 20px;
  bottom: 350px;
}
        

</style>
</head>

<body id="pmd">
<div class="header">
 
  <div class="header-right">
    
    <a>Patient medical history</a>
   
  </div>
</div>



<section class="contact">


<div class="contactForm">
<form method="post">


<div class="inputBox">
<h3>Blood pressure</h3>
<input type="text" required="required" name = "ssystolic">
<span>Systolic</span><br>
<input type="text" required="required" name = "ddiastotic">
<span>Diastotic</span><br>
<input type="text" required="required" name = "aaddnewitem">
<span>Add a new item</span>
</div>
<div class="checkbox">
<h4>Are you a smoker?</h4>
<input type="radio"required="required" name = "radio" value = "Yes">
<span>Yes</span>
<input type="radio"required="required" name = "radio" value = "No">
<span>No</span><br>
<input type="text" required="required" name = "ddetails">
<label>Details...</label><br>
</div>
<div class="inputBox">
<h5>More information for visit</h5>
<textarea required="required" name="iinformation"></textarea>
<span>Type your information.....</span>
</div>




<div class="inputBox">
<input type="submit" name="success"   value="Done">
 
</div>
</form>
</div>
</div>

 
  
  
 
</div>
</section>
</body>



</html>
