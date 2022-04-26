<?php
$liste = ["nom" => "Smith", "prenom" => "Polo", "age" => 45];
// tableau avec chaque élément étant clé => valeur
// ça s'appelle un tableau associatif, on y retrouve des éléments par association du nom de la clé
?>
<h1>
<?php echo $liste["nom"] ; ?> &nbsp; <?php echo $liste["prenom"]; ?>

/* ou */

<?= $liste["nom"] ?> &nbsp; <?= $liste["prenom"] ?>
/* pour éviter les échos */
</h1>

<?php
// Parcourir le tableau avec foreach mais qui n'est pas utilisé comme dans JS
foreach($liste as $key => $value){
    //echo $key.":".$value."<br>";
    echo "la clé $key a la valeur $value <br>";
}
?>