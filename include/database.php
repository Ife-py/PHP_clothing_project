<?php 
try{
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
    $db-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // $db->exec("SET NAMES 'uft8'");
}catch(Exception $e){
    echo"Could not connect to the database.";
    exit;
}

//object is a collection of variables called properties and functions called methods 

?>