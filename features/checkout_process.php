<?php
session_start();
if (!empty($_POST)) {
    include_once '../DBConection/DbConnection.php';
    $Db_object = DbConnection::getInstance();

    //GetOrderId
    $query = "SELECT max(ord_id)  FROM `orders`";
    $orderId = $Db_object->select($query);
    $order_Id = $orderId[0]['max(ord_id)']+1;

    if ($_POST['checkoutButton'] == 'Submit') {
        $userid=$_SESSION['userid'];
        $totalprice=$_SESSION['total'];
        $address =$_POST['address'];
        $phone =$_POST['phone'];
        $date=date('d(l)-m-y /h:i:s');
        $query = "INSERT INTO `orders` VALUES($order_Id,$userid,'$date',$totalprice,'$address','$phone')";
        $Db_object->Insert_WithStringQuery($query);
        foreach ($_SESSION['cart'] as $product ){
            $product_id=$product['pro_id'];
            $product_Quantity=$product['qty'];
            $query = "INSERT INTO `product_order` VALUES($order_Id,$product_id,'$product_Quantity')";
            $Db_object->Insert_WithStringQuery($query);
            
        }
        unset($_SESSION['cart']);
        unset($_SESSION['total']);
        header("location:../home.php");

    } 
} else {
    die('<H1 style="width: 1500px;height: 50px; font-size:200px; text-align :-moz-center;margin-top:170px "> Sorry 404</H1>');
}

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
