<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'getController.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'postController.php';
} else {
    die('Vous n‘avez rien à faire ici');
}
//le tableau est encodé est transmit quoi qu'il se passe, même dès la première visite Cela créer un array sérializé