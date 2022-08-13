<?php

/**
* This class contain the helpers for Insert on Mysql and make SQL Queries
*
* @author     Felipe Mogro
* @version    1.0.1
* 
*/

class MySqlClass{

    function mysqlConnectData(){
        $hostname='localhost';
        $username='';
        $password='';
        $dbname='fibonacci_db';
        $conection = mysqli_connect($hostname, $username, $password, $dbname);  
        if(!$conection){  
            echo 'Database Connection Error ' . mysqli_connect_error($conection); 
            die(); 
        } 
        return $conection; 
    }


    function insertMysqlData($name,$fibonacciNumber){
        $insertQuery = "INSERT INTO info (nombre,posicion) VALUES ('$name', '$fibonacciNumber')";
        if(mysqli_query($this->mysqlConnectData(), $insertQuery)){  
                return true;
        }else{  
            echo mysqli_error($this->mysqlConnectData()); 
            die(); 
        }  
    }

}

  