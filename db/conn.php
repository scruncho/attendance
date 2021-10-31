<?php
    $host = 'localhost';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset= 'utf8mb4';

    $dsn = "mysql:host = $host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
       // echo 'Hello Database';
    }catch(PDOException $e){
      //  echo "<h1 class='text-success'>No Database Found</h1>";
        throw new PDOException($e->getMessage());
    }
?>