<?php
$gameOver = false;
$gameWon = false;
$lettersArray = unserialize(urldecode($_POST['lettersArray']));
$triedLetter = $_POST['triedLetter'];
$triedLetters = $_POST['triedLetters'];
$triedLetters .= $triedLetter;
$lettersArray[$triedLetter] = false;//on parcours le tableau (tableau associatif) et on cherche la lettre correspondant triedLetter puis on affecte sa valeur à false;
$wordIndex = $_POST['wordIndex'];
$wordsArray = getWordsArray();
$word = strtolower(getWord($wordIndex, $wordsArray));
$numberOfLetters = $_POST['numberOfLetters'];
$blurredWord = $_POST['blurredWord'];
$letterFound = false;
$trials = $_POST['trials'];

for ($i = 0; $i < $numberOfLetters; $i++) {
    $letter = substr($word, $i, 1);
    if ($letter === $triedLetter) {
        $letterFound = true;
        $blurredWord = substr_replace($blurredWord, $triedLetter, $i, 1);
    }
}
if($letterFound == false){
    $trials ++;
}

$remainningTrials = MAX_TRIALS - $trials;

if ($remainningTrials <= 0){
    $gameOver = true;
}elseif ($blurredWord === $word){
    $gameWon = true;
}