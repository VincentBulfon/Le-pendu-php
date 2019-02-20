<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $lettersArray = [
        'a' => true,
        'b' => true,
        'c' => true,
        'd' => true,
        'e' => true,
        'f' => true,
        'g' => true,
        'h' => true,
        'i' => true,
        'j' => true,
        'k' => true,
        'l' => true,
        'm' => true,
        'n' => true,
        'o' => true,
        'p' => true,
        'q' => true,
        'r' => true,
        's' => true,
        't' => true,
        'u' => true,
        'v' => true,
        'w' => true,
        'x' => true,
        'y' => true,
        'z' => true,
    ];

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lettersArray = unserialize(urldecode($_POST['lettersArray']));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $triedLetter = $_POST['triedLetter'];
    $lettersArray[$triedLetter] = false; //on parcours le tableau et on cherche la lettre correspondant triedLetter puis on affecte sa valeur à false;
}

$serializedLetterArray = urlencode(serialize($lettersArray)); //le tableau est encodé est transmit quoi qu'il se passe, même dès la première visite


include "views/layout.php";