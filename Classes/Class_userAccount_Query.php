<?php
include_once './DBConection/DbConnection.php';
class Class_userAccount_Query
{
    public $Db_object;

    //__________________________________________________________________________________Construct
    public function __construct()
    {
        $this->Db_object = DbConnection::getInstance();
    }
    //__________________________________________________________________________________
    public function GetUserOrders($user_id)
    {

        $query = "SELECT `ord_id`, `order_date`,`TotalPrice`  FROM `orders` WHERE user_id =$user_id";
        return $this->Db_object->select($query);
    }
    //__________________________________________________________________________________
    public function GetOrderProduct($Order_id)
    {

        $query = "SELECT  `pro_id`,`product_quantity`  FROM `product_order` WHERE ord_id =$Order_id";
        return $this->Db_object->select($query);
    }
    //__________________________________________________________________________________
    public function GetProduct($pro_id)
    {

        $query = "SELECT  `name`,`price`  FROM `product` WHERE pro_id =$pro_id";
        return $this->Db_object->select($query);
    }
}
