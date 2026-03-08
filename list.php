<?php 
    include 'connect_db.php';

    $sql = "SELECT * FROM workers";
    $list = $conn -> query($sql);
    

    while($result = $list -> fetch_assoc()){
        echo("Id: " . $result["id"] . "<br>Name: " . $result["name"] . "<br>Surname: " . 
        $result["surname"] . "<br>Password: " . $result["password"] . "<br><br>");
    }

?>