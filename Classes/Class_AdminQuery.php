<?php
 @ include_once './DBConection/DbConnection.php';
 @ include_once '../DBConection/DbConnection.php';
 class Class_AdminQuery{
    private $Db_object;
    
    //__________________________________________________________________________________Construct
    public function __construct() {
        $this->Db_object=DbConnection::getInstance();;
        
    }
   //__________________________________________________________________________________Get_AllProduct
    public function Get_AllProduct()
    {

        $query="SELECT * FROM `product`";
        return $this->Db_object->select($query);
    
    }
    //__________________________________________________________________________________ Get_AllUser
    public function Get_AllUsers(){

        $query="SELECT * FROM `user`";
        return $this->Db_object->select($query);

    }
    //__________________________________________________________________________________ Get_AllOrder
    public function Get_AllOrder()
    {

        $query="SELECT * FROM `orders`";
        return $this->Db_object->select($query);

    }
    //__________________________________________________________________________________ Get_TableProductInfo
    public function Get_TableProductInfo()
    {
        $dbName = $this->Db_object->db_name;
        $query=" 
            SELECT `COLUMN_NAME` ,`DATA_TYPE` 
            FROM `INFORMATION_SCHEMA`.`COLUMNS` 
            WHERE `TABLE_SCHEMA`= '$dbName'
            AND `TABLE_NAME`='product' 
        ";
        return $this->Db_object->select($query);

    }
    //__________________________________________________________________________________ DeleteProduct
    public  function DeleteProduct($id)
    {
        $query="delete from product where pro_id =".$id;
        return $this->Db_object->delete($query);
    }
    //__________________________________________________________________________________ UpdateProduct
    public  function UpdateProduct($POST,$id)
    {
        $count = 0 ;
        $query = "UPDATE `product` SET ";
        foreach($POST as $COLUMN_NAME => $value)
        {
            if($count==count($POST)-1) break;
            $value=$this->Db_object->clean($value);
            if($count==count($POST)-2)
            $query.= "$COLUMN_NAME". "=" . "'$value'" ;
            else
            $query.= "$COLUMN_NAME". "=" . "'$value'" .",";
            $count++;
        }
        $count = 0;
        foreach($_FILES as $key => $value)
        {
            if ($value['size']!=0)
            {

                $query.= ",";
                $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
                if($count>=count($_FILES)-1)
                $query.= "$key" . "= " ."'$image'";
                else
                $query.= "$key" . "= " ."'$image'"." , ";

            } 

        }
        $query.= " where `pro_id` =" . "$id"; 
        $this->Db_object->Update($query);


    }
    
}

?>