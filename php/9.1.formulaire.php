<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9.2.1.enregistre.php" method="post">
        nom:<input type="text" name="nom"><br>
        prenom:<input type="text" name="prenom"><br>
        age:<input type="number" name="age"><br>
        <input type="submit" value="enreg">
    </form>

    <?php
    $annuaire = fopen("annuaire.txt","r");
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
Quand on utilise la méthode Get dans les forms les valeurs sont passées dans l'URL
Il faut plutôt utiliser la méthode POST car il peut y avoir trop de données