<html>
    <?php include('HeaderOfViewPatientProfile.php'); ?>
<title>View Patient Profile</title>
   <head>
   <!--link rel="stylesheet" href="cssR/SearchForPatientStyleAll.css"-->
    </head>
    

</html>

<?php
$surgeries='';$allergy='';$pregnant='';$breast_feeding='';$diagnosis='';$time_and_date='';
$db_handle = new DB();
       $get_patient_id=$_GET['Pid'];
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

<div ><h1 class="name">surgeries: <?php echo $surgeries; ?></h1></div> 
<div ><h1 class="name">allergy: <?php echo $allergy; ?></h1></div>
<div ><h1 class="name">pregnant: <?php echo $pregnant; ?></h1></div>
<div ><h1 class="name">breast feeding: <?php echo $breast_feeding; ?></h1></div>
<div ><h1 class="name">diagnosis: <?php echo $diagnosis; ?></h1></div>
<div ><h6 class="nam">time and date: <?php echo $time_and_date; ?></h6></div>

<!------------------------------------------EDIT FILE---------------------------------------->
<a class="Aptag"href="EdifMedicalHistory.php?Pid=<?php echo $_GET['Pid'];?> & Pname=<?php echo $_GET['Pname']; ?>"
   onclick="window.open(this.href,'targetWindow',
                                   `toolbar=no,
                                    location=no,
                                    status=no,
                                    menubar=no,
                                    scrollbars=yes,
                                    resizable=yes,
                                    width=SomeSize,
                                    height=SomeSize`);
 return false;">Edit File</a>

 <!------------------------------------------ADD new Record----------------------------------------> 
 <a class="Aptag"href="addpmd.php?Pid=<?php echo trim($_GET['Pid']);?>&Pname=<?php echo trim($_GET['Pname']); ?>">ADD Medical history</a>
 

 
 
<style>
    .name,.nam{
      
        margin-left: 250px;
        padding:10px;
       
    }  
    
    .name{  border-bottom-style: solid;}
    .Aptags{
    background-color:none;
  color: black;
  border: 2px solid blue;
        width:100px;
        height: 70px;
        margin: 10px;
        font-size: 24px;
    }
   
    .Aptag{
        text-decoration: none;
        margin-left: 60px;
        border-style:solid;
        border-color: black;
        color:black;
        padding: 5px 5px;
        background:#BCBCC7 
    }
   
    </style>