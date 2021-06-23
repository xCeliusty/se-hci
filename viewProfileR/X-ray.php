<html>
    <?php include('HeaderOfViewPatientProfile.php'); ?>
<title>View Patient Profile</title>
   <head>
   
    </head>
</html>


<?php 

$db_handle = new DB();
       $get_patient_id=$_GET['Pid'];
        //Where get_patient_id=$get_patient_id;
        $result=mysqli_query($db_handle->conn,"SELECT * FROM `images` Where get_patient_id=$get_patient_id ORDER BY  time_and_date");
       
    while($row=mysqli_fetch_assoc($result)){


  /*<!--input type='hidden' name='Pid' value='<php echo $row['patient_system_id'] ?>'/>
  <input type='hidden' name='Pname' value='<php echo $row['patient_first_name'] ?>'/-->*/
     echo $output2= "
   <img class='myImage' src='".$row['image']."' width='500' height='600' /> " ;
    
    }

?>
<style>
 
 
.myImage {
   
    float:left;
    Margin:20px;
}

    
</style>