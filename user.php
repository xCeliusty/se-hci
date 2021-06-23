<?php
class User{
    private $servername = "localhost";
    private $username = "root";
    private $pass = "";
    private $database = "curedentalhouse";
    public $con;
    
    public function __construct(){
     $this->con = new mysqli($this->servername, $this->username, $this->pass, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->con;
        }
    }
    
    public function sendMessage($post){
        
        $role = $_POST['radio'];
        $fname = $_POST['fname'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $query = "INSERT INTO `chat`(`fullName`, `phone`, `subject`, `email`, `message`, `role`) VALUES ('$fname','$phone','$subject','$email', '$message','$role')";
        $sql = $this->con->query($query);
        print("<script> alert('message sent successfully')</script>");
            
    }
}

?>