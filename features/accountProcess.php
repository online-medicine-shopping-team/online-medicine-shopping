<?php
session_start();
if (isset($_SESSION['type']))
{
    include_once '../Classes/Class_user.php';
    $user_object =new Class_user();
    $Account = $user_object->get_permission($_SESSION['type'],'Account');
    $Account = $Account[0]['permission'];
    header("location:../$Account");


}else{
    die('<H1 style="width: 1500px;height: 50px; font-size:200px; text-align :-moz-center;margin-top:170px "> Sorry 404</H1>');
}
