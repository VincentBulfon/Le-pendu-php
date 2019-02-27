<?php

$lettersArray = unserialize(urldecode($_POST['lettersArray']));
$triedLetter = $_POST['triedLetter'];
$lettersArray[$triedLetter] = false; //on parcours le tableau (tableau associatif) et on cherche la lettre correspondant triedLetter puis on affecte sa valeur à false;