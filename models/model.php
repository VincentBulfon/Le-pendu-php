<?php
function getWordsArray()
{
    return file(FILE_PATH,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //revois l'array de mots car return avec la method file qu converti un fichier en array
}

function getRandomIndex($wordsArray)
{
    return rand(0, count($wordsArray) - 1);
}

function getWord($index, $wordsArray)
{
    return $wordsArray[$index];
}

function getNumberOfLetters($words){ //return number of letter in the word
    return strlen($words); //use mb_strlen if string dosen't use only alphabet character without accent
}
function blurringWord($blurredCharacter,$nbrLetters){
    {
        return str_repeat($blurredCharacter, $nbrLetters);
        // ou utiliser str_pad('', $nbrLetters, REPLACEMENT_CHAR)
    }
}

function encode($value){
    return urlencode(serialize($value));
}

function decode($value){
    return unserialize(urldecode($value));
}
