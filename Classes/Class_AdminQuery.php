<?php
include_once './DBConection/DbConnection.php';
 class Class_AdminQuery{
    private $Db_object;
    
    //__________________________________________________________________________________Construct
    public function __construct() {
        $this->Db_object=new DbConnection();
    }
    //__________________________________________________________________________________ Get_AllOrder
    public function Get_AllOrder(){

        $query="SELECT * FROM `order`";
        return $this->Db_object->select($query);

    }
    //__________________________________________________________________________________ Get_TableProductInfo
    public function Get_TableProductInfo(){
        $dbName = $this->Db_object->db_name;
        $query=" 
            SELECT `COLUMN_NAME` ,`DATA_TYPE` 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE `TABLE_SCHEMA`= '$dbName'
            AND `TABLE_NAME`='product' 
        ";
        return $this->Db_object->select($query);

    }
}
?>