<?php 
   include 'connect_db.php';

   $sql = "CREATE DATABASE employeer";

   if($conn -> query($sql) === true){
      echo "<br>Database created";
   }else{
      die("Error!");
   }


?>