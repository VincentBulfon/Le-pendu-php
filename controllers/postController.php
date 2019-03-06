<?php
$gameOver = false;
$gameWon = false;
if(isset($_COOKIE['gameData'])){
    $gameData = decode($_COOKIE['gameData']);
    extract($gameData);
}else{
    die('Apparemment, vous essayer d‘accéder à cette page par un moyen non prévu!');
}

$triedLetter = $_POST['triedLetter'];// c'est la seule valeur à recupérer du post car on la transmet via le form
$triedLetters = $triedLetters;
$triedLetters .= $triedLetter;
$lettersArray[$triedLetter] = false;//on parcours le tableau (tableau associatif) et on cherche la lettre correspondant triedLetter puis on affecte sa valeur à false;

$wordsArray = getWordsArray();
$word = strtolower(getWord($wordIndex, $wordsArray));
$numberOfLetters = $numberOfLetters;
$blurredWord = $blurredWord;
$letterFound = false;
$trials = $trials;

for ($i = 0; $i < $numberOfLetters; $i++) {
    $letter = substr($word, $i, 1);
    if ($letter === $triedLetter) {
        $letterFound = true;
        $blurredWord = substr_replace($blurredWord, $triedLetter, $i, 1);
    }
}
if ($letterFound == false) {
    $trials++;
}

$remainningTrials = MAX_TRIALS - $trials;

if ($remainningTrials <= 0) {
    $gameOver = true;
} elseif ($blurredWord === $word) {
    $gameWon = true;
}

setcookie('gameData', encode(compact('wordIndex', 'lettersArray', 'numberOfLetters', 'triedLetters', 'blurredWord', 'trials')));