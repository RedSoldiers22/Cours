<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "connec_disk.php" ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php   
    $sql="SELECT * FROM artistes";
    $sth=$connection->prepare($sql);
    $sth->execute();
    $artistes=$sth->fetchAll();
    print_r($artistes);

    foreach($artistes as $keys)
?>



</body>
</html>