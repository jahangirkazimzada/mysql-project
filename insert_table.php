<?php
    include "connect_db.php";

    if(isset($_POST["submit_button"])){
        $name = $_POST["form_name"];
        $surname = $_POST["form_surname"];
        $password = $_POST["form_password"];
        $age = $_POST["form_age"];

        $stmt = $conn -> prepare("INSERT INTO workers(name, surname, password, age)VALUES(?, ?, ?, ?)");
        $stmt -> bind_param("ssss", $name, $surname, $password, $age);

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