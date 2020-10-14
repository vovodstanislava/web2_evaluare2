<?php

$connect = mysqli_connect('localhost', 'root', '', 'Biblioteca');

if (!$connect) {
    echo 'Ашипка!';
}
