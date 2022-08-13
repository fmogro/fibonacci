<?php

require('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('.');
$dotenv->load();

class MySqlClass{

    public $conn;  
    public $error;  
    public $getName;
    public $tablename;
    public $fibonnaciNumber;

    public function __construct($getName,$fibonnaciNumber){  
        global $_ENV;
        $this->tablename=$_ENV['TABLENAME'];
        $this->getName = $getName;
        $this->fibonnaciNumber = $fibonnaciNumber;
        $this->conn = mysqli_connect($_ENV['DBHOST'], $_ENV['DBUSER'], $_ENV['DBPASS'],$_ENV['DBNAME']);  
        if(!$this->conn){  
            var_dump($_ENV);
            echo 'Database Connection Error ' . mysqli_connect_error($this->conn); 
            die(); 
        }  
    }  

    /**
     * Function that store de data on mysql
     */
    function insertData(){
        $insertQuery = "INSERT INTO $this->tablename (nombre,posicion) VALUES ('$this->getName', '$this->fibonnaciNumber')";
        if(mysqli_query($this->conn, $insertQuery)){  
                return true;
        }else{  
            echo mysqli_error($this->conn); 
            die(); 
        }  
    }
}

?>