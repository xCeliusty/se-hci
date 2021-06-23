<!DOCTYPE html>
 <?php include('Rlogo.html');
    include('DatabaseConnection.php');
    ?>
  <html>
  <title>Search For patient</title>
   <head>
   <!--link rel="stylesheet" href="cssR/SearchForPatientStyleAll.css">
<meta name="viewport" content="width=device-width, initial-scale=1"-->
    </head>
    
    <body>
           
<h1 class="header">Search For patient</h1>

<?php 
      $db_handle = new DB();
       
        $result2=mysqli_query($db_handle->conn,"SELECT * FROM `patients`ORDER BY fname ");
       
    while( $row= mysqli_fetch_assoc($result2)){
?>
  <a class='Atag' href='X-ray.php?Pid=<?php echo $row['id'];?> & Pname=<?php echo $row['Fname']; ?>'>
  <!--input type='hidden' name='Pid' value='<php echo $row['patient_system_id'] ?>'/>
  <input type='hidden' name='Pname' value='<php echo $row['patient_first_name'] ?>'/-->
   <?php
     echo $output2= "
   <table ><tr> <th>patient ID</th> <th>Patient First Name</th> <th>Patient Last Name</th></tr><tr> <td>".$row['id']."</td> <td>"
             
              .$row['fname']. "</td><td>" .$row['lname'].
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
        /*.user-img{
    position: absolute;
    top: 20px;
    left: 30px;
}*/
body {   
    background-image: url('images/seamless.jpg');
    background-repeat: no-repeat;
    background-size: cover;
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
    

table {
    /*border: 1px solid black;*/
     margin-left: 100px;
    margin-top: 30px;
     margin-left: auto;
  margin-right: auto;
    width: 50%;
    font-size: 24px;
    font-family: 'times new roman',→ times, serif;
    
}
.Atag{
    text-decoration: none;
}
th, td {
    padding: 10px;
    text-align: center;
  
}
th{
 color:black ;
    text-align: center;
      border-bottom: 1px solid black;
}
td{
    
 /* background:#DBDBE5  ;*/
     height: 100px;
    text-align: center;
}


    
<style>