<?php
    require('vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable('.');
    $dotenv->load();
    $dbhost = $_ENV['DBHOST'];
    $dbuser =  $_ENV['DBUSER'];
    $dbpass =  $_ENV['DBPASS'];
    $db_name= $_ENV['DBNAME'];
    $table_name= $_ENV['TABLENAME'];
?>