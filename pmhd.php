<?php
class pmhd{
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
        $ssystolic = $_POST['ssystolic'];
        $ddiastotic = $_POST['ddiastotic'];
        $aaddnewitem = $_POST['aaddnewitem'];
        $ddetails = $_POST['ddetails'];
        $iinformation = $_POST['iinformation'];
        
        $query = "INSERT INTO `pmh`(`systolic`, `diastotic`, `addnewitem`, `details`, `information`, `role`) VALUES ('$ssystolic','$ddiastotic','$aaddnewitem','$ddetails', '$iinformation','$role')";
        $sql = $this->con->query($query);
        print("<script> alert('successfully')</script>");
            
    }
}

?>