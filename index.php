<?php

require_once('config/connect.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background: dimgray;
    }
    td {
        background: darkorange;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Denumire</th>
            <th>Anul</th>
            <th>Pagini</th>
            <th>Autorul</th>
        </tr>

            <?php
            $carti = mysqli_query($connect, "SELECT * FROM `carti`");
            $carti = mysqli_fetch_all($carti);
            foreach ($carti as $carte) {
                ?>
                <tr>
                    <td><?= $carte[0] ?></td>
                    <td><?= $carte[1] ?></td>
                    <td><?= $carte[2] ?></td>
                    <td><?= $carte[3] ?></td>
                    <td><?= $carte[4] ?></td>
                    <td><a href="update.php?id=<?= $carte[0] ?>">Redactarea</a></td>
                </tr>

                 <?php
            }
        ?>
    </table>

    <h3>Adauga carte noua</h3>
    <form action="vendor/create.php" method="post">
        <p>Denumire</p>
        <input type="text" name="denumirea">
        <p>Anul</p>
        <input type="number" name="anul">
        <p>Pagini</p>
        <input type="number" name="pagini">
        <p>Autorul</p>
        <input type="text" name="autorul"> <br> <br>
        <button type="submit">Adauga carte</button>
    </form>

</body>
</html>
