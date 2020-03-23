<?php



/**
 * Description of DbConnection
 *
 * @author Team_One+
 */
class DbConnection {
    
    private $host="localhost";
    private $username="root";
    private $password="";
    public $db_name="online_medicine_shopping"; //database name 
    private  $database_connection;  

    public function __construct() {

            $this->database_connection =  $this->database_connect($this->host, $this->username,$this->password);
            $this->database_select($this->db_name);
      
    }
    //__________________________________________________________________________________________connect
    //return connection info
    private function database_connect($database_host, $database_username, $database_password) {
        @ ($connection = mysqli_connect($database_host, $database_username, $database_password)) or  die( '<H1 style="width: 1500px;height: 50px; font-size:200px; text-align :-moz-center;margin-top:170px ">DB Connect Erorr(xampp)</H1>' );

            return $connection;
   
    }

    private function database_select($database_name) {
        return mysqli_select_db($this->database_connection,$database_name)
            or die("No database is selecteted");
    }
    
    public   function database_close() {
        if(!mysqli_close($this->database_connection)) die ("Connection close failed.");
           
    } 

    //_________________________________________________________________________________________Query And Encode

    //return  Assoc Array mysqli_result Object with the num of row and field
    public function database_query($database_query) {
        $this->encode();
        $query_result = mysqli_query($this->database_connection,$database_query);
        return $query_result;
    }

    //return Assoc inside index Array of Query result
    public function fetch($database_result) {
        $array_return=array();
        while ($row = mysqli_fetch_assoc($database_result)) {
            $array_return[] = $row;
        }
        return $array_return;
    }
    
    public  function encode(){
        mysqli_query($this->database_connection,"SET NAMES utf8");
    }
  //_________________________________________________________________________________________Select
  function select($database_query){
    //$database_query = $this.clean($database_query);

   return $this-> fetch($this->database_query( $database_query ) );
   
}
     //_________________________________________________________________________________________Insert "INSERT INTO `test` (id,Permeation) VALUES(\'22\',\'hy\')";
     function insert($table_name,$t_column=array(),$t_value=array()){
        $sql="INSERT INTO `$table_name` ";
        $count=0;
        foreach ($t_column as $column) {
        
        
         if($count==count($t_column)-1)
            { 
                if($count==0) {$sql.='(';}
                
                $sql.=$column.')';
            }else
            {
                $sql.=$column.",";
            }
            $count++;
        }
        $sql.=" VALUES(";
        $count=0;
        foreach($t_value as $value)
        {  if($count==count($t_value)-1)
            {
                $sql.="'$value'".')';
            }else
            {
                $sql.="'$value'".",";
            }
            $count++;
        }
        //return $sql;
        if($this->database_query($sql)){
            return true;
        }
        else return false;


     }
    //_________________________________________________________________________________________Insert_WithStringQuery
     function Insert_WithStringQuery($database_query){
        return $this->database_query( $database_query )  or die("Insert error") ;
     } 
    //_________________________________________________________________________________________Update
    function Update($database_query){
       return $this->database_query( $database_query )  or die("Update error") ;
    }   
    //_________________________________________________________________________________________delete
    function delete($database_query){
        return $this->database_query( $database_query )  or die("delete error") ;    
     }

 }