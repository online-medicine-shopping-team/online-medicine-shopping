<?php
include_once './DBConection/DbConnection.php';
 class Class_SearchRresult_query{
    private $Db_object;

     //__________________________________________________________________________________Construct
     public function __construct() {
        $this->Db_object=DbConnection::getInstance();
    }
    //__________________________________________________________________________________
    public function selectRusalt($search){
        //$search= $this->Db_object->clean($search);
        $search = trim($search); 
        $query="SELECT * FROM `product` WHERE name like '$search%'";
        return $this->Db_object->select($query);

    }

}
?>