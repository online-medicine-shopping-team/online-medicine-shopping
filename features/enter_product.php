<?php
//if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
    include_once './DBConection/DbConnection.php';

    if(isset($_POST['submit']))
    {
        $column=array();
        $value=array();
        $value[]='';

        for ($counter = 1 ; $counter < count($_SESSION['COLUMN_NAME']); $counter++) 
        {
            $value[]=$_POST[ $_SESSION['COLUMN_NAME'][$counter] ];
        }
       

       $db_object=new DbConnection();
        @ ($name=$_FILES['image']['name']) or die('<H1 style="width: 1500px;height: 50px; font-size:100px; text-align :-moz-center;margin-top:170px ">SORRY For Wasting your time plz Upload image and write all information </H1>');
       if(isset($name)){
        //_______________________________________________________________________Image

        $name=explode('.',$name);
        $extensions=array('jpg','png','gif','jpeg');
        if(in_array($name[1],$extensions))
         {  
             $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
             $value[]="$image";
         }


      
        if($db_object->insert("product",$column,$value)){ echo "true";}

        }else{ die("Enter Medicine picture");}
    }

else 
{
    echo "<H1 style='width: 1500px;height: 50px; font-size:100px; text-align :-moz-center;margin-top:170px '>SORRY For Wasting your time : you can't open this page directly</H1>";
}

    header("location:./admin_home.php");
?>


