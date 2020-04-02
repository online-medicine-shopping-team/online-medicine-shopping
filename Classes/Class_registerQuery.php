<?php
include_once './DBConection/DbConnection.php';
 class Class_registerQuery{
    private $Db_object;

     //__________________________________________________________________________________Construct
     public function __construct() {
        $this->Db_object=new DbConnection();
    }
    //__________________________________________________________________________________
    public function signup($newpassword, $user_name, $phone, $fname,$lname,$email){

        $query="INSERT INTO `user` (`id`, `password`, `username`, `phone`, `type`, `fullname`, `email`) VALUES (NULL, '$newpassword', '$user_name', '$phone', '2', '$fname.$lname', '$email')";

        return $this->Db_object->Insert_WithStringQuery($query);

    }

}
?>