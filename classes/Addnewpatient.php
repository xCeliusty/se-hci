<?php
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
        $phonenumber = $POSTS['phonenumber'];
        $dateofbirth = $POSTS['dateofbirth'];
        $adress = $POSTS['adress'];
        $gender = $POSTS['gender'];
        $reason = $POSTS['reason'];
        $healthcare = $POSTS['healthcare'];
        
      
        DB::query('INSERT INTO patient VALUES(NULL,:fname,:lname,:phonenumber,:dateofbirth,:adress,:gender,:reason,:pastdocname,:health)',
            array(':fname'=>$fname,':lname'=>$lname,':phonenumber'=>$phonenumber,':dateofbirth'=>$dateofbirth,':adress'=>$adress,':gender'=>$gender,':reason'=>$reason,':pastdocname'=>$pastdocname,':healthcare'=>$healthcare,));
    }
}

?>