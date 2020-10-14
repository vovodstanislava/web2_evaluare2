<?php

    require_once 'config/connect.php';

    $carte_id = $_GET['id'];
    $carte = mysqli_query($connect, "SELECT * FROM `carti` WHERE `id` = '$carte_id'");
    $carte = mysqli_fetch_assoc($carte);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redactarea cartilor</title>
</head>
<body>
    <h3>Redactarea informatiei despre carti existente</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<? $carte['id'] ?>">
        <p>Denumirea</p>
        <input type="text" name="denumire" value="<?= $carte['denumirea'] ?>">
        <p>Anul</p>
        <input type="number" name="anul" value="<?= $carte['anul'] ?>">
        <p>Pagini</p>
        <input type="number" name="pagini" value="<?= $carte['pagini'] ?>">
        <p>Autorul</p>
        <input type="text" name="autorul" value="<?= $carte['autorul'] ?>"> <br> <br>
        <button type="submit">Redacteaza carte</button>
    </form>
</body>
</html>
