<?php
/**
 * Description of DbConnection
 *
 * @author Team_One+
 */

<<<<<<< HEAD
=======
class DbConnection
{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    public $db_name = "online_medicine_shopping"; //database name 
    private  $database_connection;

>>>>>>> newbranch
    //__________________________________________________________________________________________Singleton design pattern
    public static  $instance;
    public static function getInstance(){
        if (!isset(DbConnection::$instance))
            DbConnection::$instance = new DbConnection();

        return DbConnection::$instance;

    }

    private function __construct()
    {
<<<<<<< HEAD
=======
        $this->creatDatabase();
>>>>>>> newbranch
        $this->database_connection =  $this->database_connect($this->host, $this->username, $this->password);
        $this->database_select($this->db_name);
    }
    
    //__________________________________________________________________________________________connect
    //return connection info
    private function database_connect($database_host, $database_username, $database_password)
    {
        @($connection = mysqli_connect($database_host, $database_username, $database_password)) or  die('<H1 style="width: 1500px;height: 50px; font-size:200px; text-align :-moz-center;margin-top:170px ">DB Connect Erorr(xampp)</H1>');

        return $connection;
    }

    private function database_select($database_name)
    {
        return mysqli_select_db($this->database_connection, $database_name)
            or die("No database is selecteted");
    }

    public   function database_close()
    {
        if (!mysqli_close($this->database_connection)) die("Connection close failed.");
    }
    //__________________________________________________________________________________________Clean

    public function clean($str)
    {
        $str = trim($str);
        $str = stripslashes($str);
        $str = strip_tags($str);
        $str = mysqli_real_escape_string($this->database_connection, $str);
        return $str;
    }


    //_________________________________________________________________________________________Query And Encode

    //return  Assoc Array mysqli_result Object with the num of row and field
    public function database_query($database_query)
    {
        $this->encode();
<<<<<<< HEAD
        $query_result = mysqli_query($this->database_connection,$database_query) or die ("database_query Error  class DbConnection".mysqli_error($query_result));
=======
        $query_result = mysqli_query($this->database_connection, $database_query) or die("database_query Error  class DbConnection".mysqli_error($query_result));
>>>>>>> newbranch
        return $query_result;
    }

    //return Assoc inside index Array of Query result
    public function fetch($database_result)
    {
        $array_return = array();
        while ($row = mysqli_fetch_assoc($database_result)) {
            $array_return[] = $row;
        }
        return $array_return;
    }

    public  function encode()
    {
        mysqli_query($this->database_connection, "SET NAMES utf8");
    }
    //_________________________________________________________________________________________Select
    function select($database_query)
    {
        //$database_query = $this.clean($database_query);

        return $this->fetch($this->database_query($database_query));
    }
    //_________________________________________________________________________________________Insert "INSERT INTO `test` (id,Permeation) VALUES(\'22\',\'hy\')";
    function insert($table_name, $t_column = array(), $t_value = array())
    {
        $sql = "INSERT INTO `$table_name` ";
        $count = 0;
        foreach ($t_column as $column) {


            if ($count == count($t_column) - 1) {
                if ($count == 0) {
                    $sql .= '(';
                }

                $sql .= $column . ')';
            } else {
                $sql .= $column . ",";
            }
            $count++;
        }
        $sql .= " VALUES(";
        $count = 0;
        foreach ($t_value as $value) {
            if ($count == count($t_value) - 1) {
                $sql .= "'$value'" . ')';
            } else {
                $sql .= "'$value'" . ",";
            }
            $count++;
        }

        //return $sql;
        if ($this->database_query($sql)) {
            $this->fileWrite($sql.";");
            return true;
        } else return false;
    }
    //_________________________________________________________________________________________Insert_WithStringQuery
    function Insert_WithStringQuery($database_query)
    {
        if($this->database_query($database_query))
            $this->fileWrite($database_query.";");
    }
    //_________________________________________________________________________________________Update
    function Update($database_query)
    {
        if($this->database_query($database_query))
            $this->fileWrite($database_query.";");
    }
    //_________________________________________________________________________________________delete
    function delete($database_query)
    {
        if($this->database_query($database_query))
            $this->fileWrite($database_query.";");
    }
    //_________________________________________________________________________________________CreatDatabase
    function creatDatabase()
    {
        $conn  = mysqli_connect($this->host, $this->username, "");
        if ($conn  === false) 
        {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        //---------------Create databas-------------------

        $sql = "CREATE DATABASE " . $this->db_name;
        if (mysqli_query($conn, $sql))
        {
            # Read sql  file  
            $db = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $query = file_get_contents("./files/online_medicine_shopping.sql");
            $stmt = $db->prepare($query);
            if ($stmt->execute()) 
            {
                mysqli_select_db($conn, $this->db_name);
                # Read sql Query text file
                $myfile = @fopen("./files/queryFile.txt", "r") or die("Unable to open file!");
                $file = @fread($myfile, filesize("./files/queryFile.txt"));
                $fileContant = @explode(";", $file);
                @fclose($myfile);
                
                foreach ($fileContant as $sql) 
                {
                    if ($sql == "") continue;
                    mysqli_query($conn, $sql);
                }
                mysqli_close($conn);
            } else
                echo "Fail";
        }
    }
    //_________________________________________________________________________________________Write in file
    private function fileWrite($txt)
    {
        $file = fopen("../files/queryFile.txt", "w") or die("Unable to open file!");
        fwrite($file, $txt);
        fclose($file);
    }

}
