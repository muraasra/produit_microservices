<?php

function GetProduits($pdo) {
    $sql = "SELECT * FROM products";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
}

function PostProduits($pdo, $input) {
    $sql = "INSERT INTO products (name, description, price, stock) VALUES (:name, :description, :price, :stock)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $input['name'], 
        'description' => $input['description'], 
        'price' => $input['price'], 
        'stock' => $input['stock']
    ]);
    echo json_encode(['message' => 'Product created successfully']);
}

function PutProduits($pdo, $input) {
    $sql = "UPDATE products SET name = :name, description = :description, price = :price, stock = :stock WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $input['name'], 
        'description' => $input['description'], 
        'price' => $input['price'], 
        'stock' => $input['stock'], 
        'id' => $input['id']
    ]);
    echo json_encode(['message' => 'Product updated successfully']);
}

function DeleteProduits($pdo, $input) {
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $input['id']]);
    echo json_encode(['message' => 'Product deleted successfully']);
}
?>
