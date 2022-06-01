<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Ajouter un film</h1>
<body>
    <form action=addMovie method="POST">
        <input type="text" name="title">
        <input type="text" name="description">
        <input type="text" name="duration">
        <input type="date" name="date">
        <input type="text" name="coverImage">
        <input type="text" name="genreId">
        <input type="text" name="directorId">
        <input type="submit" value="OK">
    </form>
</body>
</html>