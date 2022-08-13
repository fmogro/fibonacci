<?php
   include('conn.php');
   $conn = new mysqli($dbhost, $dbuser, $dbpass);

   if ($conn->connect_error) {
      die("Error de conexion: " . $conn->connect_error);
   }
   
   $existingDb = "SHOW DATABASES LIKE '".$db_name."'";
   $queryExistDb = $conn->query($existingDb);

   if($queryExistDb->num_rows===0){
      $sql = "CREATE DATABASE $db_name";
      if ($conn->query($sql) === TRUE) {
         echo "Base creada exitosamente ";
      } else {
         echo "Error creando base de datos: " . $conn->error;
      }

      $conn = new mysqli($dbhost, $dbuser, $dbpass, $db_name);

      $result = $conn->query("SHOW TABLES LIKE '{$table_name}'");
         if( $result->num_rows != 1 ){
            $newTableName = "CREATE TABLE $table_name (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(30), posicion VARCHAR(30))";
            
            if ($conn->query($newTableName) === TRUE) {
               echo "Tabla $table_name se creo exitosamente";
            } else {
               echo "Error creando tabla: " . $conn->error;
            }
         }else{
               echo 'La tabla ya existe';
         }
        }else{
         echo "Base de datos ya existe";
      }


   $conn->close();



?>