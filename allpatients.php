<?php

// include("DB.php");

  include("classes/Addnewpatient.php");

  $allpatient =add_new_patient::viewpatient();

  if(isset($_GET['delete'])) {
    $user_id = $_GET['delete'];

    add_new_patient::deletepatient($user_id);
  }


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="layouts/css/style.css">
<title> Patients</title>
</head>

<body id="patient">
  <style>
    
.topber__profile {
  height: 12.5vh;
  float: right;
  padding-right: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 2rem;
}

.topber__profile--icon {
  color: #4EADAF;
  font-size: 20px;
}

.topber__profile button {
  color: #377A98;
  line-height: 10px;
  font-weight: bold;
}

.topber__profile button:hover {
  color: crimson;
}

.topber__profile .dropdown-menu {
  margin-top: 10px;
  -webkit-box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
          box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
}

.topber__profile .dropdown-menu a:focus,
.topber__profile .dropdown-menu a:active {
  color: crimson;
}

.topber__profile .dropdown-menu a:hover {
  color: crimson;
}



  </style>

   <!--------------------------------- Secondary Navber -------------------------------->
   <section class="topber">
   <?php
   include("includes/header.php");?>
    <div class="topber__title">
        <span class="topber__title--text">


        </span>
    </div>

    <style>
      .sideber {
        height: 100vh;
        width: 300px;
        background-color: white;
        margin-top: -100px;
        z-index; 999;
      }

      table td {
        width: 10%;
      }
    
    </style>

   
</section>


<!--------------------------------- Main section -------------------------------->
<section class="main" style="color:black"><h1> All Patients </h1>
  <div class="container" style="top:550px">
  <div class="tablev" style="top:350px">
      
  <table class="table" style="top:350px;font-size: 24px;color:black">
    <thead>
        <tr>
          <th >#</th>
          <th >First Name</th>
          <th >Last Name</th>
          <th >Phone number</th>
          <th >Date of birth</th>
          <th >Address</th>
          <th >Gender</th>
          <th >Reason</th>
          <th >Past doc name</th>
          <th >Health care</th>
          <th >Action</th>
        </tr>
      </thead>
      <tbody style="text-align:center">
          <?php
              foreach($allpatient as $patients) {
          ?>
            <tr>
                <td><?php echo $patients['id'] ?></td>
                <td><?php echo $patients['fname'] ?></td>
                <td><?php echo $patients['lname'] ?></td>
                <td><?php echo $patients['phonenumber'] ?></td>
                <td><?php echo $patients['dateofbirth'] ?></td>
                <td><?php echo $patients['adress'] ?></td>
                <td><?php echo $patients['gender'] ?></td>
                <td><?php echo $patients['reason'] ?></td>
                <td><?php echo $patients['pastdocname'] ?></td>
                <td><?php echo $patients['healthcare'] ?></td>
                <td><a href="allpatients.php?delete=<?php echo $patients['id']; ?>"><button style="color:black">Delete</button></a></td>
            </tr>
          <?php } ?>

      </tbody>
    </table>
  </div>

  </div>

</section>

<!--------------------------------- #Main section -------------------------------->

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "sidetab") {
    x.className += " responsive";
  } else {
    x.className = "sidetab";
  }
}
</script>
<!-- Optional JavaScript -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="./assets/js/app.js"></script>

</body>
</html>


?>