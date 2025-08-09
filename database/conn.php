<?php

$hostname = 'localhost';
$dbname = 'to_do_list';
$username = 'postgres';
$password = 'postgres';


try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}


?>