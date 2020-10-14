<?php

require_once '../config/connect.php';

$denumirea = $_POST['denumirea'];
$anul = $_POST['anul'];
$pagini = $_POST['pagini'];
$autorul = $_POST['autorul'];

mysqli_query($connect, "INSERT INTO `carti` (`id`, `denumirea`, `anul`, `pagini`, `autorul`) VALUES (NULL, '$denumirea', '$anul', '$pagini', '$autorul')");

header('Location: /');
