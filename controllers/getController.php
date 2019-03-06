<?php

$_SESSION['lettersArray'] = [
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

if (!isset($_SESSION['wordsArray'])) {
    setWordsArray();
}
$wordIndex = getRandomIndex($_SESSION['wordsArray']);
$_SESSION['word'] = getWord($wordIndex, $_SESSION['wordsArray']);
$_SESSION['numberOfLetters'] = getNumberOfLetters($_SESSION['word']);
$_SESSION['blurredWord'] = blurringWord(BLURREDCHARACTER, $_SESSION['numberOfLetters']);
$remainningTrials = MAX_TRIALS;
$_SESSION['trials'] = 0;
$_SESSION['triedLetters'] = '';
$gameOver = false;
$gameWon = false;