# Produit

Ce microservice permet de gérer une table `products` dans une base de données MySQL. Il expose des fonctions pour effectuer des opérations CRUD (Create, Read, Update, Delete) sur les produits.

---

## Fonctionnalités

- **Récupérer tous les produits** : Retourne une liste de tous les produits.
- **Créer un produit** : Ajoute un nouveau produit à la base de données.
- **Mettre à jour un produit** : Modifie les informations d'un produit existant.
- **Supprimer un produit** : Supprime un produit de la base de données.

---

## Prérequis

- Serveur web (ex. : XAMPP, WAMP, etc.)
- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- Extension PDO activée

---

## Installation

1. **Clonez ce dépôt ou copiez les fichiers dans le répertoire de votre serveur web.**
2. **Configurez votre base de données MySQL :**
    - Créez une base de données (par exemple : `produit`).
    - Créez la table `products` en exécutant le script suivant :

    ```sql
    CREATE TABLE products (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL,
         description TEXT NOT NULL,
         price DECIMAL(10, 2) NOT NULL,
         stock INT NOT NULL,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
         updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );
    ```

3. **Ajoutez des produits de test si nécessaire :**

    ```sql
    INSERT INTO products (name, description, price, stock) VALUES
    ('Produit 1', 'Description du produit 1', 10.99, 100),
    ('Produit 2', 'Description du produit 2', 15.49, 50),
    ('Produit 3', 'Description du produit 3', 7.99, 200);
    ```

4. **Configurez la connexion à la base de données dans votre fichier principal (par exemple, `api.php`).**

---

## Utilisation

### Endpoints disponibles

#### 1. **Récupérer tous les produits**
- **Méthode** : `GET`
- **URL** : `http://localhost/produit/controller_api.php`
- **Description** : Retourne une liste de tous les produits au format JSON.

#### 2. **Récupérer un produit spécifique**
- **Méthode** : `GET`
- **URL** : `http://localhost/produit/controller_api.php?id=1`
- **Description** : Retourne les détails d'un produit spécifique au format JSON.
- **Paramètres** :
  - `id` : Identifiant du produit.

#### 3. **Créer un produit**
- **Méthode** : `POST`
- **URL** : `http://localhost/produit/controller_api.php`
- **Description** : Ajoute un nouveau produit.
- **Données attendues (JSON)** :
  ```json
  {
        "name": "Produit X",
        "description": "Description du produit X",
        "price": 19.99,
        "stock": 50
  }
  ```

#### 4. **Mettre à jour un produit**
- **Méthode** : `PUT`
- **URL** : `http://localhost/produit/controller_api.php`
- **Description** : Met à jour les informations d'un produit existant.
- **Données attendues (JSON)** :
  ```json
  {
        "id": 1,
        "name": "Produit modifié",
        "description": "Nouvelle description",
        "price": 25.99,
        "stock": 30
  }
  ```

#### 5. **Supprimer un produit**
- **Méthode** : `DELETE`
- **URL** : `http://localhost/produit/controller_api.php?action=delete`
- **Description** : Supprime un produit de la base de données.
- **Données attendues (JSON)** :
  ```json
  {
        "id": 1
  }
  ```

---


Ce microservice a été conçu pour gérer les produits dans une application PHP/MySQL.