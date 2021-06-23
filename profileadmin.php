<?php session_start(); 

include("classes/DB.php");
include("classes/Login.php");
$user_id = Login::isLoggedIn();
$data = DB::query('SELECT * FROM users WHERE id=:id', array(':id'=>$user_id))[0];

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="perfect.css">
<body>
  <header>
    <div class="topleft">
      <a href="home.php"><h1 class="wsname" >Dental<span class="brain" >Clinic </span></h1></a>
    </div>
    <div class="topright">
       <a href="home.php"><p class="sign"><img class="icons" src="home.png">&nbsp;&nbsp;Home</p></a>
       <a href="logout.php"><p class="sign"><img class="icons" src="log-in.png">&nbsp;&nbsp;Log out</p></a>

        
      </a>
    </div>

    <div class="navitems">
       <a href="message.php"><p class="nbitems">Messages &nbsp;&nbsp; <img class="icons" src="qus.png"></p></a>
       <a href="Healthrecord.php"><p class="nbitems"> Add patient&nbsp;&nbsp; <img class="icons" src="add.png"></p></a>
      <a href="allpatients.php"><p class="nbitems"> view/Remove patient&nbsp;&nbsp; <img class="icons" src="minus.png"></p></a>
      <a href="add.php"><p class="nbitems">Add Appointment &nbsp;&nbsp;<img class="icons" src="add.png"></p></a>
      
      <a href="EditProfile.php"><p class="nbitems">Settings&nbsp;&nbsp;<img class="icons" src="settings.png"></p></a>
            
    </div>
  </header>
  <div class="profdiv" >
    <div class="innerdiv" >
      <div class="underpic" >
      <img class="profimg img-fluid img-thumbnail"   src="profile.jpg" style=' width:250px; height: 250px;'>
      <div class="nbitems2holder">
  
      
      </div>
      </div>
      <div class="textdiv">
        <h3 class="profname"></h3>
        <p class="profsub">Admin</P>
        <h4><?php echo $data['fname'].' '.$data['lname']; ?></h4>
        <h3><?php echo $data['email']; ?></h3>
        <br><br>
      
    </div>
  </div>
</body>
</html>
