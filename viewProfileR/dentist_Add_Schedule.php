<?php //include('Rlogo.php');
include('DatabaseConnection.php');
?> 
<html>

<title>Schedule</title>
 <div class="user-img" >
                <img style="background:none" src="images/logo.jpeg" alt="logo.jpeg">
            </div>
            <h1 class="header"><?php echo 'dentist Name'; ?></h1>
  
   <?php 
$db_handle = new DB();
       $dentist_ID=1;
    $dentist_Name="";
        //Where get_patient_id=$get_patient_id;
        $result=mysqli_query($db_handle->conn,"SELECT * FROM `schedule` Where get_dentist_id=$dentist_ID ");
      
     while($row=mysqli_fetch_assoc($result)){

echo"<div  class='LastAppointmen'>
     
<div ><h1 class=''>Year:" .$row['year']. "</h1></div> 
<div ><h1 class=''>Month:" .$row['month']."</h1></div>
<div ><h1 class=''>Day:" .$row['day']."</h1></div>
<div ><h1 class=''>from:" .$row['start_time']. "</h1></div>
<div ><h1 class=''>to:" .$row['end_time'] ."</div>
   </div>";
    }
//$m="";$d="";$y="";$f="";$as="";$t="";
?>     
<form action="" method='post'>
   
<div  class='appX'>
   <div><label class="lnames">Patient Name:</label><input class="Inp" type="text" name="p"></div>
   <div><label class="lnames">Assisment:</label><input class="Inp" type="text" name="assistant"></div>
    <div><label class="lnames">Year:</label><input class="Inp" type="text" name="year"></div>
    <div><label class="lnames">Month:</label><input class="Inp" type="text" name="month"></div>
    <div><label class="lnames">Day:</label><input class="Inp" type="text" name="day"></div>

    <div><label class="lnames">From:</label><input class="Inp" type="text" name="from"></div>
    <div><label class="lnames">To:</label><input class="Inp" type="text" name="to"></div>
    <div><input class="inputADD" type="submit" value="Add Appointment" name="Add"/></div>
</div>
 </form>   
    </html>
    <?php
 
    if(isset($_POST['Add'])){
        $m=$_POST['month'];$d=$_POST['day'];$y=$_POST['year'];$f=$_POST['from'];$as=$_POST['assistant'];$t=$_POST['to'];
        $sql='INSERT INTO schedule (get_dentist_id,get_patient_id,assistant_name,month,start_time,end_time,day,year )values ($dentist_ID,1,$as,$m,$f,$t,$d,$y)';
    $result=mysqli_query($db_handle->conn,$sql);
    }
?>
    
<style>
    .lnames{
        font-size: 24px;
      margin: 2px;
        padding:10px;
    }    
    .Inp{  
        width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
    }
    .inputADD{
    /*margin-top:400px;
      margin-left:-880px;*/
    width:120px;  
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
    .appX{
        border-style: solid;
        float: right;
          width: 20%;
        padding:10px 10px;
        margin: 2px 5px;
        height: 600px;
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



