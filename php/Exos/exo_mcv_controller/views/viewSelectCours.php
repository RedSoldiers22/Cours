<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?= _URL ?>/controllerStudents/addCourseToStudent/<?= $student['id'] ?>" method="POST">
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
</body>
</html>