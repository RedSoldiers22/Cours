<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
<form action="<?= _URL ?>/controllerEtudiant/addCoursToEtudiant/<?= $student['id'] ?>" method="POST">
        <?= $student['prenom']." ".$student['nom']?>
        <select name="id_cours">
            <?php


             foreach ($cours as $indice =>  $cours_id){
                echo "<option value='".$cours_id['id_cours']."'>"."  ".$cours_id['code']." ".$cours_id['titre']." ".$cours_id['language']."</option>";
            }
            ?>
        </select>
        <input type="submit" value="OK">
        </form>
=======
    <form action="" method="post">
        
    </form>
>>>>>>> 649502bd4a17d3a4c8c6886a5f930aa2e03cf83d
</body>
</html>