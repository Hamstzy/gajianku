<?php
try{
    $host = "localhost";
    $dbname = "Gajian";
    $username = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host=" . $host . ";dbname=". 
    $dbname, $username, $pass);
    $koneksi->exec("set names utf8");

    $sql = "SELECT * FROM timesport";
    $result = $koneksi->query($sql)->fetch();

    var_dump($result);
    
}catch(PDOException $exception){
    echo "Database could not be connected: " . $exception->getmessage();
    }

    ?>