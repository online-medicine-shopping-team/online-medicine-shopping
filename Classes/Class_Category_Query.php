<?php
include_once './DBConection/DbConnection.php';
class Class_Category_Query{
   public $Db_object;

    //__________________________________________________________________________________Construct
    public function __construct() {
       $this->Db_object=DbConnection::getInstance();
     
   }
   //__________________________________________________________________________________
   public function GetAllCategorys(){

       $query="SELECT DISTINCT cat_name FROM `product`";
       return $this->Db_object->select($query);
   }

   public function Get_CategoryProducts($search){

    $search = trim($search); 
    $query="SELECT * FROM `product` WHERE cat_name like '$search%' ";
    return $this->Db_object->select($query);

}
}
?>