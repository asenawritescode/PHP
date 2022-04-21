<?php
    // databsae connector file 

    $host = "";
    $db_name = "";
    $username = "";
    $password = "";

    try {
        $con = new PDO("mysql:host={$host},dbname={$db_name}",$username,$password);
    }
    // log error
    catch(PDOException $exception){
        echo"Connection Error : " . $exception->getMessage(); 
    }
?>