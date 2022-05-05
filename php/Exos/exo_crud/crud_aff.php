<?php

// On inclut la connexion à la base
require_once('connect.php');

// On écrit notre requête
$sql = 'SELECT * FROM `produit`';

// On prépare la requête
$query = $connection->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>

    <h1>Liste des produits</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix HT</th>
            <th>TVA</th>
            <th>Prix TTC</th>
        </thead>
        <tbody>
        <?php
            foreach($result as $produit){
        ?>
                <tr>
                    <td><?= $produit['id'] ?></td>
                    <td><?= $produit['nom'] ?></td>
                    <td><?= $produit['description'] ?></td>
                    <td><?= $produit['prix HT'] ?></td>
                    <td><?= $produit['tva'] ?></td>
                    <td><?= $produit['prix TTC'] ?></td>
                    <td><a href="edit.php?id=<?= $produit['id'] ?>">Modifier</a>  <a href="delete.php?id=<?= $produit['id'] ?>">Supprimer</a></td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a href="add.php">Ajouter</a>
</body>
</html>
