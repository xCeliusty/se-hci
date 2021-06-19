<?php
class User {

    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $password;

    public __construct() {

    }

    public static createUser($POSTS) {
        $fname = $POSTS['fname'];
        $lname = $POSTS['lname'];
        $email = $POSTS['email'];
        $password = $POSTS['password'];
        $repassword = $POSTS['repassword'];

        if ($password == $repassword) {
            DB::query('INSERT INTO users VALUES(NULL,:fname,:lname,:email,:password)',
            array(':fname'=>$fname,':lname'=>$lname,':email'=>$email,':password'=>password_hash($password, PASSWORD_BCRYPT)));
        }



        
    }

    public static viewSpecficUser($id) {
        $user = DB::query("SELECT * FROM users WHERE id=:id",array(':id'=>$id))[0];
        return $user;
    }

    public static viewUsers($id) {
        $allUsers = DB::query("SELECT * FROM users");
        return $allUsers;
    }

    public static deleteUser($id) {
        DB::query("DELETE FROM users WHERE id=:id",array(':id'=>$id));

    }

    public static updateUser($POSTS) {
        $fname = $POSTS['fname'];
        $lname = $POSTS['lname'];
        $email = $POSTS['email'];
        $password = $POSTS['password'];
        $repassword = $POSTS['repassword'];

        if($password == $repassword) {
            DB::query("UPDATE users SET fname=:fname,lname=:lname,email=:email,password=:password WHERE id=:id",array(":fname"=>$fname,":lname"=>$lname,":email"=>$email,":password"=>$password,":id"=>$id));
        }
    }
}

?>