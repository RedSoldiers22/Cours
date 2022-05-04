<?php


try{
    $connection = new PDO("mysql:host=localhost;dbname=premiere","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM employe";
    $stmt=$connection->prepare($sql); //prépare une réquête à l'exécution et retourne un objet
    $stmt->execute();

    $result=$stmt->fetchAll(PDO::FETCH_ASSOC); //prend toute les colones, le PDO récupère la ligne suivant d'un ensemble de résultats sous la forme de tableau associatif
    echo"<pre>";
    print_r($result);
    echo"</pre>";
}
catch(PDOExecption $e) {echo $e->getMessage();}
?>