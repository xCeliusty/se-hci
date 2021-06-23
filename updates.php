<?php 
include("classes/DB.php");
include("classes/Login.php");

$user_id = Login::isLoggedIn();


$msg = ""; 
$errmsg = "";
session_start();
$id=$user_id;
// If upload button is clicked ... 
if (isset($_POST['submit'])) { 
	$db = mysqli_connect("localhost", "root", "", "curedentalhouse"); 
//Photo Upload START
if(!empty($_FILES["img"]["name"])){
  $target_dir = "uploads/";
  $file_name = mktime().'-'.basename($_FILES["img"]["name"]);
  $target_file = $target_dir . $file_name;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["img"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $errmsg .= "Failed to upload image: File is not an image.<br>";
    $uploadOk = 0;
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    $errmsg .= "Failed to upload image: File already exists.<br>";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["img"]["size"] > 300000) {
    $errmsg .= "Failed to upload image: File is too large (max: 250KB) <br>";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $errmsg .= "Failed to upload image: Allowed formats are \"PNG, JPG, JPEG\" <br>";
    $uploadOk = 0;
  }
  if($uploadOk == 1) {
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
      $sql = "UPDATE users SET Picture= '{$target_file}' WHERE ID= '{$id}'";
	  	mysqli_query($db, $sql); 
      $_SESSION['picture'] = $target_file;
  } else {
      $errmsg .=  "Sorry, there was an error uploading your file.<br>";
    }
  }
}
//Photo Upload END
		  $fname= $_POST['name'];
  $email= $_POST['Email'];
  $password= $_POST['password'];
  $address=$_POST['Address'];

$sql="UPDATE users SET fname='{$fname}', email='{$email}'  , password='{$password}' WHERE id=:id ";

// DB::query('INSERT INTO editprofile VALUES(NULL,:fname,:phone,:subject,:email,:message,1)',
//             array(':fullName'=>$fname,':phone'=>$phone,':subject'=>$subject,':email'=>$email,':message'=>$message));

		// Execute query 
		DB::query($sql, array(':id'=>$id)); 
 
    // header("Location:home.php");
  
}  
?>