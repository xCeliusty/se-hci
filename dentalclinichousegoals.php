<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Link to the google font  -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<!-- Link to the CSS file  -->
    <link rel="stylesheet" href="layouts/css/style.css">
		<title>Dental clinic house goals </title>
	</head>
  <!-- <style>
 
</style> -->
    <body id="dentalclinic">
    <?php
   include("includes/header.php");?>
   <style>
     .column{
       margin:0 10px;
     }
   </style>
        <div class="view-container" style="text-align:center;margin-top: 100px;">
        <div class="row" style="width: 100%;margin:0 auto;text-align:center;">
          <a href="healthrecord.php"><div class="column">
            <img src="layouts/imgs/ehr.svg" alt="Create Electronic Health Records"width="150px" >
            <h3 style="padding-bottom: 10%;">Create Electronic Health Records</h3>
          
          </div></a>
          <a href="add.php">
          <div class="column">
            <img src="layouts/imgs/calendar.svg" alt="calendar" width="150px ">
            <h3 style="padding-bottom: 10%;">Schedule Appointments </h3>
          </div>
          </a>
          
          <div class="column">
            <img src="layouts/imgs/reminders.svg" alt="Reminder" width="150px">
            <h3 style="padding-bottom: 10%;">Send Automated Reminders</h3>
          </div></a>
          <br>
        </div>
        <div class="row" style="width: 100%;margin:0 auto;text-align:center; ">
        <div class="column">
            <img src="layouts/imgs/treatment-plans.svg" alt="treatment"  width="150px">
            <h3 style="padding-bottom: 40%;">Build Treatment Plans</h3>
          </div>
          <a href="viewProfileR/SearchForPatient.php">
          <div class="column">
          
            <img src="layouts/imgs/inventory.svg" alt="inventory"  width="150px">
            <h3 style="padding-bottom: 40%;">Manage Your Inventory</h3>
          </div>
          </a>
          <div class="column">
            <img src="layouts/imgs/revenue.svg" alt="Revenue"  width="150px">
            <h3 style="padding-bottom: 40%;">Track Your Revenue</h3>
          </div>
        </div>
        </div>

</body>
  </html>