<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="layouts/css/style.css">


</head>

<body>

    <?php
   include("includes/header.php");?>


<?php
if (isset($mess) == 1) {
	echo "Success";
}else{
	echo "";
}
?>

<section class="contact">

<div class="form">
<form action="patientmedicalhistory.php" method="post">


<div class="inputBox">
<h3>Blood pressure</h3>
<input type="text" name="" required>
<span>Systolic</span><br>
<input type="text" name="" required>
<span>Diastotic</span><br>
<input type="text" name="" required>
<span>Add a new item</span>
</div>
<div class="checkbox">
<h4>Are you a smoker?</h4>
<input name="smoker" type="radio"required>
<span>Yes</span>
<input name="smoker"type="radio" required>
<span>No</span><br>

</div>
<div class="inputBox">
<h5>More information for visit</h5>
<textarea required="required"></textarea>
<span>Type your information.....</span>
</div>
<div class="inputBox">
<h6>Past pictures & x-rays</h6>
<input type="submit1" name=""   value="Upload">

</div>

<div class="inputBox">
<input type="submit" name=""   value="Done">
 
</div>
</form>
</div>
</div>

 
  
  
 
</div>
</section>
</body>



</html>
