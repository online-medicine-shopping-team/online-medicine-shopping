<?php
include_once './DBConection/DbConnection.php';
 class Class_HomeQuery{
    private $Db_object;

     //__________________________________________________________________________________Construct
     public function __construct() {
        $this->Db_object=new DbConnection();
    }
    //__________________________________________________________________________________
    public function Get_HomeObjects(){

        $query="SELECT * FROM `product`";
        return $this->Db_object->select($query);

    }

}
?>