<?php

function getDBConnection($dbName) {
    
    //C9 db info
        $host = 'localhost';
        $db = $dbName; 
        $user = 'crescencioDev';
        $pass = 'euBMQ8Y36UFFpS5O';
        $charset = 'utf8mb4';
    
    //when connecting from Heroku
    if  (strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
        $host = $url["host"];
        $db = substr($url["path"], 1);
        $user = $url["user"];
        $pass = $url["pass"];
    } 
    
    try {
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        
        $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        ];
        
        $dbConn = new PDO($dsn, $user, $pass, $opt);
    }
    catch (PDOException $e) {
      echo "Problems connecting to database!";
      exit();
    }
    
    
    return $dbConn;
}

?>