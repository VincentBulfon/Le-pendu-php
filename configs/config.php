<?php
define('MAX_TRIALS', 8);
define('GAME_TITLE', 'Le pendu');
define('FILE_DIRECTORY', 'data');
define('FILE_NAME', 'words.txt');
define('FILE_PATH_SEPARATOR', '/');//il est intéressant de définir une constante pour le séprateur car il peut changer en fonction du système ici il sera figé
define('FILE_PATH', FILE_DIRECTORY.FILE_PATH_SEPARATOR.FILE_NAME);
define('BLURREDCHARACTER', '*');