<?php
require_once('connect.php');

if(isset($_POST)){
    if(isset($_POST['id']) && !empty($_POST['id'])
        &&(isset($_POST['nom']) && !empty($_POST['nom'])
        && isset($_POST['description']) && !empty($_POST['description'])
        && isset($_POST['prix HT']) && !empty($_POST['prix HT'])
        && isset($_POST['tva']) && !empty($_POST['tva'])
        && isset($_POST['prix TTC']) && !empty($_POST['prix TTC'])){

            $id = strip_tags($_GET['id']);
            $nom = strip_tags($_GET['nom']);
            $description = strip_tags($_POST['description']);
            $pht = strip_tags($_POST['prix HT']);
            $tva = strip_tags($_POST['tva']);
            $pttc = strip_tags($_POST['prix TTC']);

        $sql="UPDATE produit SET nom = 'nom', descriptioption', prix HT = 'prix HT', tva = 'tva', prix TTC = 'prix TTC' WHERE produit.id = 'id';";
        $query = $connection->prepare($sql);

        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        $query->bindValue(':prix HT', $pht, PDO::PARAM_INT);
        $query->bindValue(':tva', $tva, PDO::PARAM_INT);
        $query->bindValue(':prix TTC', $pttc, PDO::PARAM_INT);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: crud_aff.php');
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM `produit` WHERE `id`=:id;";

    $query = $connection->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Modifier un produit</h1>
    <form method="post">
        <p>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $result['nom'] ?>">
        </p>
        <p>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="<?= $result['description'] ?>">
        </p>
        <p>
            <label for="prix HT">Prix HT</label>
            <input type="number" name="prix HT" id="prix HT" value="<?= $result['prix HT'] ?>">
        </p>
        <p>
            <label for="tva">TVA</label>
            <input type="number" name="tva" id="tva" value="<?= $result['tva'] ?>">
        </p>
        <p>
            <label for="prix TTC">Prix TTC</label>
            <input type="number" name="prix TTC" id="prix TTC" value="<?= $result['prix TTC'] ?>">
        </p>
        <p>
            <button>Enregistrer</button>
        </p>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
    </form>
</body>
</html>