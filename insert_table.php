<?php 
    include 'connect_db.php';

    $conn -> query("ALTER TABLE workers ADD IF NOT EXISTS age VARCHAR(100) NOT NULL");

    $stmt = $conn -> prepare("INSERT INTO workers(name, surname, password, age) VALUES (?, ?, ?, ?)");
    $stmt -> bind_param("ssss", $name, $surname, $password, $age);
    

    $workers = [
        ["Cahangir", "Kazimzada", "200229", "23"],
        ["Cavid", "Kazimzada", "199815", "27"],
        ["Agamusa", "Kazimzada", "201117", "15"]
    ];

    foreach($workers as $w){
        $name = $w[0];
        $surname = $w[1];
        $password = $w[2];
        $age = $w[3];
        $stmt -> execute();
    }
    echo "Data added";

    $stmt -> close();
    $conn -> close();
    
?>