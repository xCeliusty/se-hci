
<html>
<?php include('Rlogo.html');
    include('DatabaseConnection.php');?>
<title>View Patient Profile</title>
   <head>
   <link rel="stylesheet" href="cssR/HeaderOfViewPatientProfile.css">
    </head>
<body>
    
    <h1 class="view_patient_Profile_Title"><?php echo $_GET['Pname']." " .$_GET['Pid'];?> </h1>


 
 <table class="headerofviewpatient">
    <tr class="TR">
        <th class='TH'><a href="X-ray.php?Pid=<?php echo $_GET['Pid'];?> & Pname=<?php echo $_GET['Pname']; ?>">X-ray/Images</a></th>
        
        <th class='TH'><a href="PatientMedicalHistory.php?Pid=<?php echo $_GET['Pid'];?> & Pname=<?php echo $_GET['Pname']; ?>">Medical History</th>
        
      <th class='TH'><a href="DentistPrescription.php?Pid=<?php echo $_GET['Pid'];?> & Pname=<?php echo $_GET['Pname']; ?>">Prescription</th>
        
     <th class='TH'><a href="LastAppointment.php?Pid=<?php echo $_GET['Pid'];?> & Pname=<?php echo $_GET['Pname']; ?>">Last Appointment</th>
        <th class='TH'><a href="NextAppointment.php?Pid=<?php echo $_GET['Pid'];?> & Pname=<?php echo $_GET['Pname']; ?>">Next Appointment</th>
        
    </tr>
    
</table>
</body>
</html>

<style>
body {   
    background-image: url('images/seamless.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}.view_patient_Profile_Title{
    text-align: center;
      background: #ACD1FD;
      border-radius: 20px / 10px;
      /*position: static;
  top:-22px;*/
    margin-top: 10px;
    /*margin-bottom: 10px;*/
     width: 100%;
      height: 200px;
    }
.headerofviewpatient  {
    /*border: 1px solid black;*/
     margin-left: 100px;
    margin-top: 30px;
     width: 80%;
     
   
}
.TH, .TD {
    padding: 10px;
    
}
.TH{
 background:#BCBCC7 ;
}
.TD{
    
  background:#DBDBE5  ;
     height: 100px;
}</style>