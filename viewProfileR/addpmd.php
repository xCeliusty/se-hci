<html>
 <body>
<?php include('Rlogo.html');
    include('DatabaseConnection.php');?>
<title>Next Appointment</title>
<h1 class="view_patient_Profile_Title">Add Medical form for <?php echo $_GET['Pname']." " .$_GET['Pid'];?> </h1>

 <?php
     $db_handle = new DB();
     $get_user_id=1;
     $get_patient_id=$_GET['Pid'];
$surgeries='';$allergy='';$pregnant='';$breast_feeding='';$diagnosis='';$time_and_date='';
    // if($get_user_id==1 OR $get_user_id==2)

       
        //Where get_patient_id=$get_patient_id;
        $result=mysqli_query($db_handle->conn,"SELECT * FROM `medical_history` Where get_patient_id=$get_patient_id ");
       
    while($row=mysqli_fetch_assoc($result)){
        
     $surgeries=$row['surgeries'];
     $allergy=$row['allergy'];
     $pregnant=$row['pregnant'];
     $breast_feeding=$row['breast_feeding'];
     $diagnosis=$row['diagnosis'];
        $time_and_date=$row['time_and_date'];
    }

?>

<?php
     $get_patient=$_GET['Pid'];
     if(isset($_POST['submit']))
     {
         $surgeries=$_POST['surgeries'];
         $allergy=$_POST['allergy'];
         $pregnant=$_POST['pregnant'];
         $breast_feeding=$_POST['breast_feeding'];
         $diagnosis=$_POST['diagnosis'];
         $sq =mysqli_query($db_handle->conn,"INSERT INTO `medical_history` (`medical_id`, `allergy`, `surgeries`, `pregnant`, `breast feeding`, `diagnosis`, `get_patient_id`, `time_and_date`) VALUES (NULL, '$allergy', '$surgeries', '$pregnant', '$breast_feeding', '$diagnosis', '$get_patient_id', current_timestamp())");
        
        if ($sq) {
            echo '<script> window.close()</script>';//'<script>alert("Record removed successfully")</script>'; 
        } else
        {
            echo '<script>alert("Record is not removed, try again")</script>'; 
        }
     }
     
     
     ?>
<form method='post' action='addpmd.php?Pid=<?php echo $_GET['Pid'];?>&Pname=<?php echo $_GET['Pname']; ?>'>
  
   <div>
    <label class="LabelEP">Surgeries:</label>
       <input type="text"  name='surgeries' class="InputEP" value="<?php echo $surgeries; ?>">
    </div>
    
    <div> <label class="LabelEP">Allergy:</label>
       <input type="text"  name='allergy' class="InputEP" value="<?php echo $allergy; ?>">
       </div>
       
       <div> <label class="LabelEP">Pregnant:</label>
       <input type="text"  name='pregnant' class="InputEP" value="<?php echo $pregnant; ?>" >
       </div>
       
       <div> <label class="LabelEP">Breast Feeding:</label>
       <input type="text"  name='breast_feeding' class="InputEP" value="<?php echo $breast_feeding; ?>" >
       </div>
       
       <div> <label class="LabelEP">Diagnosis:</label>
       <input type="text"  name='diagnosis' class="InputEP" value="<?php echo $diagnosis; ?>" >
       </div>
       <input class="inputSub" type="submit" name="submit"/>
    
</form>









    </body>
 </html>
<style>
    body {   
    background-image: url('../images/seamless.jpg');
    background-repeat: no-repeat;
    background-size: cover;
        
}
    .inputSub{
         margin-left: 50px;
    }    
    .view_patient_Profile_Title{
    text-align: center;
      background: #ACD1FD;
      border-radius: 20px / 10px;
      /*position: static;
  top:-22px;*/
    margin-top: -10px;
    /*margin-bottom: 10px;*/
     width: 100%;
      height: 200px;
    }
.InputEP,.labelEP{
       /* text-align: center;*/
        margin-left: 250px;
    margin-bottom: 20px;
    font-size: 24px;
    font-family: 'times new roman',→ times, serif;
       
   }
    div{
        padding: 20px;
    }
   
    
    .InputEP{  border-bottom-style: solid;
   
        display:block;
        width:600px;
        height: 50px;
        
    }
    .Aptags{
    background-color:none;
  color: black;
  border: 2px solid blue;
        width:100px;
        height: 70px;
        margin: 10px;
        font-size: 24px;
    }
    
</style>