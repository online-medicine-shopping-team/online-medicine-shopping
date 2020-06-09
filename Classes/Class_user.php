<?php

/**
 * the class is just for methods that related to User and connect to database
 *
 * @author Ahmed
 */
include_once '../DBConection/DbConnection.php';
class Class_user
{
    private $id;
    private $username;
    private $password;
    public  $fullname;
    private $type;
    public $phone;
    public $Db_object;
    public $user_values_query_result;
    //__________________________________________________________________________________Construct
    public function __construct($user_id = "")
    {
        $this->Db_object = DbConnection::getInstance();
    }
    //__________________________________________________________________________________
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($id)
    {
        $this->id = $id;
    }
    public function get_username()
    {
        return $this->username;
    }
    public function set_username($username)
    {
        $this->username = $username;
    }
    public function set_password($password)
    {
        $this->password = $password;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function set_user_type($type)
    {
        $this->id = $type;
    }
    public function get_user_type()
    {
        return $this->type;
    }
    //___________________________________________________________________________________Set_User_Value
    public function get_user_values()
    {
        //return $this->Db_object->fetch($this->user_values_query_result);
        $this->set_user_values($this->Db_object->fetch($this->user_values_query_result));
    }
    private  function set_user_values($data)
    {
        $this->id = $data[0]['id'];
        $this->username = $data[0]['username'];
        $this->password = $data[0]['password'];
        $this->fullname = $data[0]['fullname'];
        $this->phone = $data[0]['phone'];
        $this->type = $data[0]['type'];
    }

    //___________________________________________________________________________________Login
    public function  login($username, $password)
    {


        $this->username = $this->Db_object->clean($username);
        $this->password = $this->Db_object->clean($password); //just UserName & Password

        $select_user_SQL = "SELECT * FROM `user`  where username='$this->username' and password='$this->password'";

        $select_user_Result = $this->Db_object->select($select_user_SQL);

        if (!empty($select_user_Result[0]['id'])) {
            $this->set_user_values($select_user_Result);
            return TRUE;
        } else {
            return FALSE;
        }
    }
    //___________________________________________________________________________________Login
    public function  login_Permission($type)
    {
        $result = $this->Db_object->select("SELECT * FROM `permission` WHERE type_id='$type'");
        return $result;
    }
    //___________________________________________________________________________________get permission
    public function get_permission($permissionType, $permissionName)
    {
        $sql = "SELECT `permission` FROM `permission` WHERE `type_id` =$permissionType AND permission_name = '$permissionName'";
        $select_permission_Result = $this->Db_object->select($sql);

        return $select_permission_Result;
    }

    //-----------------------------------------------------------------------------------
    /*public function __construct($user_id="") {
        $this->Db_object=new DbConnection();
        if($user_id !=""){
                    $Db_object=new DbConnection();
                    $select_user_SQL="SELECT * FROM `users`  where id=$user_id";
                    $data=$this->Db_object->get_row($select_user_SQL);
                    $this->id=$data['id'];
                    $this->username=$data['username'];
                    $this->password=$data['password'];
                    $this->first_name=$data['fname'];
                    $this->last_name=$data['lname'];
                    $this->email=$data['email'];
                    $this->user_type_id=$data['user_type_id'];
                    
        }
         
    }*/
    //-----------------------------------------------------------------------------------



}
