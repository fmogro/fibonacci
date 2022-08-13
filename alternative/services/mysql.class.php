<?php

require('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();


/**
* This class contain the helpers for Insert on Mysql and make SQL Queries
*
* @author     Felipe Mogro
* @version    1.0.1
* 
*/

class MySqlClass{

    public function __construct(){
        global $_ENV;
    }

    function mysqlConnectData(){
        $hostname=$_ENV['DBHOST'];
        $username=$_ENV['DBUSER'];
        $password=$_ENV['DBPASS'];
        $dbname=$_ENV['DBNAME'];
        $conection = mysqli_connect($hostname, $username, $password, $dbname);  
        if(!$conection){  
            echo 'Database Connection Error ' . mysqli_connect_error($conection); 
            die(); 
        } 
        return $conection; 
    }


    function insertMysqlData($name,$fibonacciNumber){
        $tablename=$_ENV['TABLENAME'];
        $insertQuery = "INSERT INTO $tablename (nombre,posicion) VALUES ('$name', '$fibonacciNumber')";
        if(mysqli_query($this->mysqlConnectData(), $insertQuery)){  
                return true;
        }else{  
            echo mysqli_error($this->mysqlConnectData()); 
            die(); 
        }  
    }

}

  