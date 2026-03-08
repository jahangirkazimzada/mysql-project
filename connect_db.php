<?php 
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "employeer";

    $conn = new mysqli($server_name, $user_name, $password, $db_name);

    // if($conn -> connect_error){
    //     die("Error! " . $conn -> connect_error);
    // }else{
    //     echo "Connect successfully";
    // }


?>