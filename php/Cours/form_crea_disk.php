<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    require_once "connec_disk.php";
    $sql="SELECT * FROM artistes";
    $sth=$connection->prepare($sql);
    $sth->execute();
    $artistes=$sth->fetchAll();

    $sql="SELECT * FROM genre";
    $sth=$connection->prepare($sql);
    $sth->execute();
    $genre=$sth->fetchAll();
    ?>
</head>
<body>

    <form action="backin_BDD.php" method="POST">
        <p>Titre : <input type="text" name="disque"></p> 
        <p>Artistes : <select name="artistes">
            <?php foreach($artistes as $key=>$val){
                $id=$val['id'];
                $artiste=$val['nom'];
                print_r("<option value=$id>$artiste</option>");
        } ?></select></p>

        <p>Genre : <select name="genre">
            <?php foreach($genre as $key=>$val){
                $id=$val['id'];
                $genres=$val['genre'];
                print_r("<option value=$id>$genres</option>");
        }?></select></p> 
        <input type="submit" value="OK">
    
    </form>
</body>
</html>