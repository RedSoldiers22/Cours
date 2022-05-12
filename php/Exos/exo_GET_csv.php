<?php

/*$file = fopen('myfile.csv', 'r'); -> autre méthode qui met en tableau
while (!feof($file) ) {
    $line[] = fgetcsv($file, 1024,";");
}
fclose($file);*/

$connection = new PDO("mysql:host=localhost;dbname=produits","root","");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$connection->beginTransaction();

$row = 1;
if (($handle = fopen("produit2.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) { // le ";" indique à quel moment il sépare
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
            $categ = $data[0];
            $np = $data[1];
            $desc = $data[2];
            $pht = $data[3];
            $tva = $data[4];
            $img = $data[5];

        }

        $sql = "SELECT * FROM categorie WHERE type = ?";
        $sth = $connection->prepare($sql);
        $sth->execute([$categ]);
        if ($sth->rowCount() > 0) {
            $res= $sth->fetch();
            $id=$res['id'];
        } else {
            $sql = "INSERT INTO categorie (type) VALUES (?)";
            $sth = $connection->prepare($sql);
            $sth->execute([$categ]);
            $id= $connection->lastInsertId();
        }      
        
        $sql = "INSERT INTO velo (nom_produit, description, PHT, TVA, photo, id_categorie) VALUES (?,?,?,?,?,?)";
        $sth = $connection->prepare($sql);
        $sth->execute([$np,$desc,$pht,$tva,$img,$id]);
        



    }
    $connection->commit();
    fclose($handle);
}

    //$connection->rollback(); -> à mettre dans le catch error


?>