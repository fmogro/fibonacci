<?php

class MySqlClass{

    public $conn;  
    public $error;  
    public $getName;
    public $fibonnaciNumber;

    public function __construct($getName,$fibonnaciNumber){  
        $this->getName = $getName;
        $this->fibonnaciNumber = $fibonnaciNumber;
        $this->conn = mysqli_connect("localhost", "", "", "fibonacci_db");  
        if(!$this->conn){  
            echo 'Database Connection Error ' . mysqli_connect_error($this->conn); 
            die(); 
        }  
    }  

    /**
     * Function that store de data on mysql
     */
    function insertData(){
        $insertQuery = "INSERT INTO info (nombre,posicion) VALUES ('$this->getName', '$this->fibonnaciNumber')";
        var_dump($insertQuery);
        if(mysqli_query($this->conn, $insertQuery)){  
                return true;
        }else{  
            echo mysqli_error($this->conn); 
            die(); 
        }  
    }
}

?>