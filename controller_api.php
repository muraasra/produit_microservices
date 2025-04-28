<?php

include 'fonction_api.php';
header("Content-Type: application/json");
include 'connexionbd.php';


$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);


switch ($method) {
    case 'GET':
        GetProduits($pdo);
        break;
    case 'POST':
        PostProduits($pdo, $input);
        break;
    case 'PUT':
        PutProduits($pdo, $input);
        break;
    case 'DELETE':
        DeleteProduits($pdo, $input);
        break;
    default:
        echo json_encode(['message' => 'requete utilisee pour la methode est invalide']);
        break;
}




?>
