<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "microservice";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Echec de la connexion: " . $e->getMessage());
}
?>
