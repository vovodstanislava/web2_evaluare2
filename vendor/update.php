<?php

require_once '../config/connect.php';

$id = $_POST['id'];
$denumirea = $_POST['denumirea'];
$anul = $_POST['anul'];
$pagini = $_POST['pagini'];
$autorul = $_POST['autorul'];

mysqli_query($connect, "UPDATE `carti` SET `denumirea` = '$denumirea', `anul` = '$anul', `pagini` = '$pagini', `autorul` = '$autorul' WHERE `carti`.`id` = $id");

header('Location: /');
