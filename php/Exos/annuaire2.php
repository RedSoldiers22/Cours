<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("6.2.fonctions.php");
        // lire annuaire.txt et l'afficher au bon format
        //comme pour l'écriture on va créer un gestionnaire de fichier appelé handle
        //qui permettra d'effectuer une lecture
    $annuaire = fopen("annuaire.txt","r"); //voir les modes comme "r" dans la doc php de fwrite
    /*$content = fread($annuaire, 200); // fread tout le fichier // 200 caractères
    $content = fgets($annuaire, 200); // fgets ligne par ligne
    echo $content;*/

    /*while (($buffer = fgets($annuaire, 4096)) !== false){
        //echo $buffer."<br>";
        $montableau = explode(":",$buffer);
        debug($montableau);
    }*/
    ?>
    <table>
    <?php
    while (($buffer = fgets($annuaire, 4096)) !== false){ ?>
    <tr>
        <?php
        $montableau = explode(":",$buffer);
        echo "<td>".$montableau[0]."</td>";
        echo "<td>".$montableau[1]."</td>";
        echo "<td>".$montableau[2]."</td>"; ?>
        <?php } ?>
    </tr>
    </table>
</body>
</html>