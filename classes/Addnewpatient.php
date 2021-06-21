<?php
// include('DB.php');

class add_new_patient {
    private $fname;
    private $lname;
    private $phonenumber;
    private $dateofbirth;
    private $adress;
    private $gender;
    private $reason;
    private $healthcare;


    public static function createpatient($POSTS) {
        $fname = $POSTS['fname'];
        $lname = $POSTS['lname'];
        $phonenumber = $POSTS['PhoneNumber'];
        $dateofbirth = $POSTS['Dateofbirth'];
        $adress = $POSTS['Address'];
        $gender = $POSTS['gender'];
        $reason = $POSTS['Reasonofvisit'];
        $healthcare = $POSTS['healthcare'];
        
      
        DB::query('INSERT INTO patients VALUES (NULL,:fname,:lname,:phonenumber,:dateofbirth,:adress,:gender,:reason,0,:healthcare)',
            array(':fname'=>$fname,':lname'=>$lname,':phonenumber'=>$phonenumber,':dateofbirth'=>$dateofbirth,':adress'=>$adress,':gender'=>$gender,':reason'=>$reason,':healthcare'=>$healthcare));
    }
}
 //   public static function 
?>

