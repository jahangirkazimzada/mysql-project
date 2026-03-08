<?php
    include 'connect_db.php';

    $sql = "CREATE TABLE `employeer`.`workers` (`id` INT(5) NOT NULL AUTO_INCREMENT ,
    `name` TEXT NOT NULL , `surname` TEXT NOT NULL ,
    `password` VARCHAR(5) NOT NULL , PRIMARY KEY (`id`))";

    if($conn -> query($sql)){
        echo "<br>Table created";
    }else{
        die("Error!");
    }



?>