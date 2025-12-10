<?php
class Model
{

    public function getData(): array
    {
        $serverName = "localhost";
        $username = "root";
        $password = "";
        $dbName = "form_data";
        // DSN string: driver (mysql), host, dbname, and character set

        $dsn = "mysql:host=$serverName;dbname=$dbName";

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        $stmt = $pdo->query("SELECT * FROM contacts");
        return $stmt->fetchAll();
    }
}
