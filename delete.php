<?php 
    require 'connect_db.php';
    if(isset($_GET["id"])){
        $delete_id = $_GET["id"];

        $stmt = $conn -> prepare("DELETE FROM workers WHERE id = ?");
        $stmt -> bind_param("i", $delete_id);

        if($stmt -> execute()){
            header("Location: index.php");
            exit();
        }else{
            die("Error");
        }
        $stmt -> close();

    }else{
        header("Location: index.php");
        exit();
    }

    $conn -> close();
    

    


?>