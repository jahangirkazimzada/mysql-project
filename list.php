<?php 
    include 'connect_db.php';

    $searchId = $_POST["id"];
    if($searchId){
        $sql = "SELECT * FROM workers WHERE name = '$searchId' or surname = '$searchId' or  age = '$searchId'";
        $list = $conn -> query($sql);
        while($row = $list -> fetch_assoc()){
            echo("Id: " . $row["id"] . "<br>Name: " . $row["name"] . "<br>Surname: " . $row["surname"] .
            "<br>Password: " . $row["password"] . "<br>Age: " . $row["age"] . "<br><br>");
    }
    }

    
?>