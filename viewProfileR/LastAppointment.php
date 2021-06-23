<html>

     <?php include('HeaderOfViewPatientProfile.php'); ?>
<title>Last Appointment</title>
  
   <?php 
    date_default_timezone_set('africa/Cairo'); 
$today= time();
//echo(date("Y-m-d",$today)); //echo month year day
//echo date("h:i:sa");  //shows time

    $Year=date("Y",$today);
   // echo "<br>";
     $Month=date("m",$today);
    ///echo "<br>";
     $Day=date("d",$today);
    //echo"<br>";
    //echo date("Y-m-d",$today);
    
$db_handle = new DB();
       $get_patient_id=$_GET['Pid'];
       $dentist_ID=1;
        //Where get_patient_id=$get_patient_id;
        $result=mysqli_query($db_handle->conn,"SELECT * FROM `schedule` Where get_patient_id=$get_patient_id AND month<=$Month And year<=$Year ");
      
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
<style>
    .lastAppointmen{
        border-style: solid;
        float: left;
          width: 20%;
        padding:10px 10px;
        margin: 2px 5px;
        text-align: center;
        background: white; 
    }    
    </style>