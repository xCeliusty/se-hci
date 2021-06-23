<?php
include("DB.php");

class User {

    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $password;

    // public __construct() {

    // }

    public static function createUser($POSTS) {
        $fname = $POSTS['firstname'];
        $lname = $POSTS['lastname'];
        $email = $POSTS['email'];
        $password = $POSTS['password'];
        $repassword = $POSTS['repassword'];
        $type = $_POST['type'];

        if ($password == $repassword) {
            DB::query('INSERT INTO users VALUES(NULL,:fname,:lname,:email,:password,:user_type)',
            array(':fname'=>$fname,':lname'=>$lname,':email'=>$email,':password'=>password_hash($password, PASSWORD_BCRYPT),':user_type'=>$type));
        }



        
    }

    public static function viewSpecficUser($id) {
        $user = DB::query("SELECT * FROM users WHERE id=:id",array(':id'=>$id))[0];
        return $user;
    }

    public static function viewUsers() {
        $allUsers = DB::query("SELECT * FROM users");
        return $allUsers;
    }

    public static function deleteUser($id) {
        DB::query("DELETE FROM users WHERE id=:id",array(':id'=>$id));
    }

    public static function updateUser($POSTS) {
        $fname = $POSTS['fname'];
        $lname = $POSTS['lname'];
        $email = $POSTS['email'];
        $password = $POSTS['password'];
        $repassword = $POSTS['repassword'];

        if($password == $repassword) {
            DB::query("UPDATE users SET fname=:fname,lname=:lname,email=:email,password=:password WHERE id=:id",array(":fname"=>$fname,":lname"=>$lname,":email"=>$email,":password"=>$password,":id"=>$id));
        }
    }

    public static function sendMessage($POSTS) {
        $fname = $_POST['fname'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        DB::query('INSERT INTO chat VALUES(NULL,:fullName,:phone,:subject,:email,:message,1)',
            array(':fullName'=>$fname,':phone'=>$phone,':subject'=>$subject,':email'=>$email,':message'=>$message));
    }
}

?>