<?php

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


$wordsArray = getWordsArray();
$wordIndex = getRandomIndex($wordsArray);
$word = getWord($wordIndex, $wordsArray);
$numberOfLetters = getNumberOfLetters($word);
$blurredWord = blurringWord(BLURREDCHARACTER,$numberOfLetters);
$remainningTrials = MAX_TRIALS;
$trials = 0;
$triedLetters='';
$gameOver = false;
$gameWon = false;