<?php
try {
    $pdo = new PDO(
        "mysql:host=mysql;dbname=businessCare_docker",
        "root",
        "root"
    );
    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
