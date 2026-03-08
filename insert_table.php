<?php 
    include 'connect_db.php';
    
    $name = "Cahangir";
    $surname = "Kazimzada";
    $password = "200229";

    $name = "Cavid";
    $surname = "Kazimzada";
    $password = "199815";

    $name = "Agamusa";
    $surname = "Kazimzada";
    $password = "201117";
    
    $stmt = $conn -> prepare("INSERT INTO workers(name, surname, password)VALUES(?, ?, ?)");
    $stmt -> bind_param("sss", $name, $surname, $password);
    $stmt -> execute();
    
?>