<?php
$serverName ="localhost";
$username ="root";
$password =""; 
$dbName ="form_data" ;
// DSN string: driver (mysql), host, dbname, and character set

$dsn = "mysql:host=$serverName;dbname=$dbName" ;
try {
    $pdo = new PDO($dsn , $username , $password) ;
    $pdo ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
    echo "status ok" ;
}catch(PDOException $e) {
   echo "error " ; 
}

// $conn = new mysqli($serverName , $username , $password , $dbName );




?>
