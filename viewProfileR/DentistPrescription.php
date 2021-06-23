<?php include('HeaderOfViewPatientProfile.php'); ?>
  <html>
<body>
    <form method='post' action=''>
    <div>
    <textarea class="paragraph_text" name="paragraph_text" cols="50" rows="10" placeholder="Add Precription...."></textarea>
    </div>
    <input class="inputSub" type="submit" name="submit"/>
    </form>
    <?php

$db_handle = new DB();
       $get_patient_id=$_GET['Pid'];
    
        //Where get_patient_id=$get_patient_id;
        $result=mysqli_query($db_handle->conn,"SELECT * FROM `prescription` Where get_patient_id=$get_patient_id order by time_and_date");
    
          while($row=mysqli_fetch_assoc($result)){

echo"<div  class='LastAppointmen'>
<div ><h1 class='name'>Medicine: " .$row['medicine_name']. "</h1></div> 
<div ><h1 class='name'>dentist-code: " .$row['get_dentist_id']."</h1></div>
<div ><h1 class='name'>time_and_date: " .$row['time_and_date']. "</h1></div>
   </div>";
    }
    
    if(isset($_POST['submit']))
    {
       /* $result=mysqli_query($db_handle->conn,"INSERT into `prescription`(medicine_name,get_dentist_id,get_patient_id)values VALUES ('medicine_name', '1', '$get_patient_id') ");*/
    }
?>
    
    
    
</body>        
  </html>  
    
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
.paragraph_text {
    margin-left: 400px;
    margin-top: 40px;
    font-size: 25px;
    }

.inputSub{
    margin-top:10px;
         margin-left:400px;
    width:60px;  
height: 30px;  
 background:#BCBCC7; 
    }   
    
</style>  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <style>
body {   
    background-image: url('images/seamless.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}</style>
 <?php