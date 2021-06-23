<?php //include('Rlogo.php');
include('DatabaseConnection.php');
?> 
<html>

<title>Schedule</title>
 <div class="user-img" >
                <img style="background:none" src="images/logo.jpeg" alt="logo.jpeg">
            </div>
            <h1 class="header"><?php echo 'dentist_Name'; ?></h1>
  
   <?php 
$db_handle = new DB();
       $dentist_ID=20202020;
    $dentist_Name="";
        //Where get_patient_id=$get_patient_id;
        $result=mysqli_query($db_handle->conn,"SELECT * FROM `schedule` Where get_dentist_id=$dentist_ID ");
      
     while($row=mysqli_fetch_assoc($result)){

echo"<div  class='LastAppointmen'>
     
<div ><h1 class='name'>Year:" .$row['year']. "</h1></div> 
<div ><h1 class='name'>Month:" .$row['month']."</h1></div>
<div ><h1 class='name'>start_time:".$row['start_time']."</h1></div>
<div ><h1 class='name'>from:" .$row['start_time']. "</h1></div>
<div ><h1 class='name'>to:" .$row['end_time'] ."</div>
   </div>";
    }

?>
    <input class="inputADD" type="submit" name="Add Appointment"/>
    </html>
<style>
    .inputADD{
    margin-top:10px;
         margin-left:400px;
    width:60px;  
height: 30px;  
 background:#BCBCC7; 
    } 
.user-img{
    position: absolute;
    top: 20px;
    left: 30px;
}
body {   
    background-image: url('images/seamless.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
    .lastAppointmen{
        border-style: solid;
        float: left;
          width: 20%;
        padding:10px 10px;
        margin: 2px 5px;
        text-align: center;
        background: white; 
    } 
.header{
      text-align: center;
      background: #ACD1FD;
      border-radius: 20px / 10px;
      /*position: static;
      top:-22px;*/
      margin-top: -10px;
     /*margin-bottom: 10px;*/
      width: 100%;
      height: 200px;
  /*  vertical-align: center;*/
}    
    </style>



