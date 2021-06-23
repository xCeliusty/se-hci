<!DOCTYPE html>
 <?php //include('Rlogo.html');
    include('DatabaseConnection.php');
    ?>
  <html>
  <title>Search For patient</title>
   <head>
   <!--link rel="stylesheet" href="cssR/SearchForPatientStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head-->
    
    <body>
           
<h1 class="header">Search For patient</h1>

<?php 
      $db_handle = new DB();
       
        $result2=mysqli_query($db_handle->conn,"SELECT * FROM `patient`ORDER BY patient_first_name ");
       
    while( $row= mysqli_fetch_assoc($result2)){
?>
  <a class='Atag' href='X-ray.php?Pid=<?php echo $row['patient_system_id'];?> & Pname=<?php echo $row['patient_first_name']; ?>'>
  <!--input type='hidden' name='Pid' value='<php echo $row['patient_system_id'] ?>'/>
  <input type='hidden' name='Pname' value='<php echo $row['patient_first_name'] ?>'/-->
   <?php
     echo $output2= "
   <table><tr> <th>patient ID</th> <th>Patient First Name</th> <th>Patient Last Name</th></tr><tr> <td>".$row['patient_system_id']."</td> <td>"
             
              .$row['patient_first_name']. "</td><td>" .$row['patient_last_name'].
              "</td></tr></table>
              ";
     ?>
     </a>
     <?php  
    }
          
     ?>

</body>
</html>


    <style>
body{
       
     background-image: url('images/seamless.jpg');
  background-repeat: no-repeat;
    background-size: cover;
    
}
    </style>

