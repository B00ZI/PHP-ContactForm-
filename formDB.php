<?php
$serverName ="localhost";
$username ="root";
$password ="s";
$dbName ="form_data" ;
// DSN string: driver (mysql), host, dbname, and character set

$dsn = "mysql: host:$serverName; dbName=$dbName " ;
try {
    $pdo = new PDO($dsn , $username , $password) ;
    echo "status ok" ;
}catch(PDOException $e) {
   echo "error " ; 
}

// $conn = new mysqli($serverName , $username , $password , $dbName );




?>
