<?php
    include "connect_db.php";

    if(isset($_POST["submit_button"])){
        $name = $_POST["form_name"];
        $surname = $_POST["form_surname"];      
        $age = $_POST["form_age"];
        $city = $_POST["form_city"];

        $personId = rand(999, 10000);

        $stmt = $conn -> prepare("INSERT INTO workers(name, surname, age, city, personId)VALUES(?, ?, ?, ?, ?)");
        $stmt -> bind_param("sssss", $name, $surname, $age, $city, $personId);

        if($stmt -> execute()){
            header("Location: index.php");
            exit();
        }else{
            echo "Error!" . $stmt -> error();
        }
        $stmt -> close();
    }else{
        header("Location: index.php");
        exit();
    }

    $conn -> close();

?>