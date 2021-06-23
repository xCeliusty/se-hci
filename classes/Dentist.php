<?php
class Dentist {

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


}







?>