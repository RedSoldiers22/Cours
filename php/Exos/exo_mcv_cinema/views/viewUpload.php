<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Insérer une image</h3>
    <form action="<?= _URL ?>../upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>