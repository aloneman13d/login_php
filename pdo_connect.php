<?php
    $servername = "127.0.0.1";
    $dbname = "testlogin";
    $username = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Connect Success ";
    }catch(PDOException $e){
        echo "Connect Fail : ".$e->getMessage();
    }

?>