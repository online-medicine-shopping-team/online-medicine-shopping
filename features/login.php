<?php

  session_start();
  include_once '../Classes/Class_user.php';
  
  $flag = 0;
 if(isset($_POST['login']))
 {
   $username=$_POST['username'];
   $password=$_POST['password'];
   $flag = 1 ;
   
 }
 else if( isset($_COOKIE['username'])&&isset($_COOKIE['password']) )
 {

    $username=$_COOKIE['username'];
    $password=$_COOKIE['password'];
    $flage = 1;
 }else
 {
    header("location:../login.html");
 }

 if($flag == 1)
 {
     
    $user_object =new Class_user();
    /*$user_object->set_username($username);
    $user_object->set_password($password);*/
    $return_value=$user_object->login($username,$password);

    if($return_value)
    { 
     
     $_SESSION['id']=$user_object->get_id();
     $_SESSION['username']=$user_object->get_username();
     $_SESSION['password']=$user_object->get_password();
     $_SESSION['fullname']=$user_object->fullname;
     $_SESSION['phone']=$user_object->phone;
     $_SESSION['type']=$user_object->get_user_type();
     $_SESSION['userid']=$user_object->get_id();


    
    if($_SESSION['type']=='1')
        header("location:../admin_home.php");
    else
        header("location:../user_account.php");
    
     //exit();
     }else
     {
           /*echo $return_value;
           $errormessage="<font color='red'>Invalid username or password,Try again</font>";*/
           header("location:../login.html?1");
           session_unset();//To Clear and Destroy the session if login again to disable the footer
     }
     $flag = 0;

 }

?>