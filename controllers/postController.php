<?php
$gameOver = false;
$gameWon = false;

$triedLetter = $_POST['triedLetter'];// c'est la seule valeur à recupérer du post car on la transmet via le form
$_SESSION['triedLetters'] .= $triedLetter;
$_SESSION['lettersArray'][$triedLetter] = false;//on parcours le tableau (tableau associatif) et on cherche la lettre correspondant triedLetter puis on affecte sa valeur à false;


$letterFound = false;


for ($i = 0; $i < $_SESSION['numberOfLetters']; $i++) {
    $letter = substr($_SESSION['word'], $i, 1);
    if (strtolower($letter) === $triedLetter) {
        $letterFound = true;
        $_SESSION['blurredWord'] = substr_replace($_SESSION['blurredWord'], $triedLetter, $i, 1);
    }
}
if ($letterFound == false) {
    $_SESSION['trials']++;
}

$remainningTrials = MAX_TRIALS - $_SESSION['trials'];

if ($remainningTrials <= 0) {
    $gameOver = true;
} elseif (strtolower($_SESSION['blurredWord']) === strtolower($_SESSION['word'])) {
    $gameWon = true;
}
