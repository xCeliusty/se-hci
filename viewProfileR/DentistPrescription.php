<?php include('HeaderOfViewPatientProfile.php'); ?>
  <html>
<body>
    
    <div>
    <textarea class="paragraph_text" name="paragraph_text" cols="50" rows="10" placeholder="Add Precription...."></textarea>
    </div>
    <input class="inputSub" type="submit" name="submit"/>
    <?php
$surgeries='';$allergy='';$pregnant='';$breast_feeding='';$diagnosis='';$time_and_date='';
$db_handle = new DB();
       $get_patient_id=$_GET['Pid'];
    $spaceSeletion="";
        //Where get_patient_id=$get_patient_id;
        $result=mysqli_query($db_handle->conn,"SELECT * FROM `prescription` Where get_patient_id=$get_patient_id ordered by time_and_date");
       
    /*while($row=mysqli_fetch_assoc($result)){

   echo  $Medicine_name=$row['medicine_name'];
  
   echo  $time_and_date=$row['time_and_date'];
        if($time_and_date!=$spaceSeletion)
        {
            echo "<br><br>";
        }
       $spaceSeletion= $row['time_and_date'];
    }*/

?>
    
    
    
</body>        
  </html>  
    
<style>
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